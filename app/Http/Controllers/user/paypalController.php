<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\membership\Membership_user as MU;
use App\Models\membership\user_buy_membership_package as BuyMP;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Auth;

class paypalController extends Controller
{
    //
    private $_api_context;

    public function __construct()
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }


    public function postPaymentWithpaypal(Request $request)
    {
        $data = $request->all();
        $id=base64_decode($data['pid']);
        $plan = MU::find($id);
        $amountt = $plan->package_price;
        $addons = 0;
        if(!empty($data['addons'])){
            foreach($data['addons'] as $val){
                $amountt = $amountt+$val;
                $addons++;
            }
        }
        $sd = array(
            'plan_id' => $id,
            'amount' => $amountt,
            'addons' => $addons
        );
        Session::put('cart', $sd);
        //dd($plan);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName($plan->package_name)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($amountt);
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($amountt);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('user.status'))
            ->setCancelUrl(URL::route('user.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));            
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return Redirect::route('user.membership.memberPlan');                
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return Redirect::route('user.membership.memberPlan');                
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {            
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
        return Redirect::route('user.membership.memberPlan');
    }

    public function getPaymentStatus(Request $request)
    {        
        $data = Session::get('cart');

        Session::forget('cart');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('user.membership.memberPlan');
        }
        $payment = Payment::get($payment_id, $this->_api_context);        
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));        
        $result = $payment->execute($execution, $this->_api_context);
        
        if ($result->getState() == 'approved') {  

            $st = BuyMP::where('user_id', Auth::id())->update([
                'status' => '2'
            ]);

            $date = date('Y-m-d');
                
            $mp = new BuyMP;
            $mp->user_id = Auth::id();
            $mp->membership_user_id= $data['plan_id'];
            $mp->status=1;
            $mp->expired_date=date('Y-m-d', strtotime($date. ' + 30 days')); 
            $mp->buy_date=$date;
            $mp->save();

            \Session::put('success','Payment success !!');
            return Redirect::route('user.membership.memberPlan');
        }

        \Session::put('error','Payment failed !!');
        return Redirect::route('user.membership.memberPlan');
    }
}
