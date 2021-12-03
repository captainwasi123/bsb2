<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\membership\Membership_user as MU;
use App\Models\membership\Membership_vendor as MV;
use App\Models\membership\vendor_buy_membership_package as VBMP;
use Auth;
use DB;
use Carbon\Carbon;

class adminController extends Controller
{
      //
    function index(){

      $totaluser=User::all()->count();
      $vendoruser=User::where('vendor_status',2)->count();
      
      
    	return view('admin.index',['totaluser' => $totaluser, 'vendoruser' => $vendoruser]);

    
    }

    function vendorNew(){

      $data = User::where('vendor_status',1)->get();

    return view('admin.vendor.new_request', ['data' => $data]);
     }

    function vendorFeatured(){

        $data =User::where('is_feature', 1)->where('vendor_status',2)->get();

    	return view('admin.vendor.featured_vendors', ['data' => $data]);
    }

    function featureStatus($id, $status){

        $user=User::find(base64_decode($id));
        $user->	is_feature = $status;
        $user->save();

        return redirect()->back()->with('success', 'Vendor Feature Updated.');
      }

    function vendorActive(){

      $data = User::where('vendor_status',2)->get();

    	return view('admin.vendor.active_vendors', ['data' => $data]);
    }

    function vendorBlocked(){

      $data = User::where('vendor_status',3)->get();


    	return view('admin.vendor.blocked_vendors',['data' => $data]);
    }

    function changeStatus($id, $status){

      $user=User::find(base64_decode($id));
      $user->vendor_status = $status;
      $user->save();

      return redirect()->back()->with('success', 'Vendor Status Updated.');
    }


    function publishVendor($id){
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime('+30 days', strtotime($start_date)));
        $user=VBMP::where('user_id', base64_decode($id))->where('status',1)->latest()->first();
        $user->start_date = $start_date;
        $user->expired_date = $end_date;
        $user->save();

        return redirect()->back()->with('success', 'Vendor Published.');
    }



    function settingRole(){

    	return view('admin.setting.admin_role');
    }

    function memberPending(){

        $data = array(
            'vendor' => User::where('is_feature',1)
                            ->whereHas('featured', function($q){
                                return $q->where('start_date', null);
                            })
                            ->orderby('created_at', 'Desc')->get()
        );

    	return view('admin.featured_member.pending_member')->with($data);
    }
    function memberPublish(){

        $curr = date('Y-m-d');
        $data = array(
            'vendor' => User::where('is_feature',1)
                            ->whereHas('featured', function($q) use ($curr){
                                return $q->where('start_date', '<=', $curr)
                                            ->where('expired_date', '>=', $curr);
                            })
                            ->orderby('created_at', 'Desc')->get()
        );
      return view('admin.featured_member.publish_member')->with($data);
    }

    function memberExpired(){
          
        $curr = date('Y-m-d');
        $validate = date('Y-m-d', strtotime('+5 days', strtotime($curr)));
        $data = array(
            'vendor' => User::where('is_feature',1)
                            ->whereHas('featured', function($q) use ($validate){
                                return $q->where('expired_date', $validate);
                            })
                            ->orderby('created_at', 'Desc')->get()
        );
        return view('admin.featured_member.expired_member')->with($data);


    }

     public function memberSendMail()
    {

        $curr = date('Y-m-d');
        $validate = date('Y-m-d', strtotime('+5 days', strtotime($curr)));
        $data = User::where('is_feature',2)
                    ->whereHas('featured', function($q) use ($validate){
                        return $q->where('expired_date', $validate);
                    })
                    ->orderby('created_at', 'Desc')->get();

        foreach ($data as $val) {

            $to_name = $val->name;
            $to_email = $val->email;
            $data = array("name"=>$val->name);
            
            Mail::send('mail.sendMail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject("Subscription Expiry Notification");
            $message->from("Info@bsb.com","Test Mail");
            });

        }
        return redirect()->back()->with('success', 'Email has been sent successfully');

  

    }

    function memberBlocked(){

    	return view('admin.featured_member.blocked_member');
    }
    function memberCancel(){

    	return view('admin.featured_member.cancel_member');
    }



}
