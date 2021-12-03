<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\countries;
use App\Models\membership\Membership_vendor as MV;
use App\Models\membership\vendor_buy_membership_package as BuyMP;
use App\Models\membership\vendor_mpackage_description as VMPD;

use App\Models\User;
use Auth;
use Hash;

class vendorController extends Controller
{
    //
    function index(){

    	return view('vendor.index');
    }

    function basicInfo(){
        $data['countries'] = countries::all();

    	return view('vendor.profile.basic_info')->with($data);
    }

    function basicInfoSubmit(Request $request){
        $data = $request->all();

        User::updateVendor($data);
        if ($request->hasFile('logo_file')) {
            $file = $request->file('logo_file');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/vendor/logo/'), $filename);

            User::updateLogo($filename);
        }
        return redirect()->back()->with('success', 'Profile Updated.');
    }




    function passSecurity(){

    	return view('vendor.profile.pass_security');
    }
    function passSecuritySubmit(Request $request){
        $data = $request->all();
        $password = $request->input('old_password');

        $user = User::find(Auth::id());
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }else{
            if($data['password'] == $data['password_confirmation']){
                $user->password = bcrypt($data['password']);
                $user->save();

                return redirect()->back()->with('success', 'Password updated.');
            }else{
                return redirect()->back()->with('error', 'Password does not match.');
            }
        }
    }



    function memberPlan(){

        $data=MV::latest()->limit(2)->get();
    //  $data['VedorMPDescr']=VMPD::all();        
        // dd($data);
    	return view('vendor.virtual.member_plan',['data'=> $data]);
    }

    public function buyMembershipVonder( $id)
    {
        $id=base64_decode($id);
        $st = BuyMP::where('user_id', Auth::id())->update([
            'status' => '2'
        ]);

        $date = date('Y-m-d');
            
        $mp = new BuyMP;
        $mp->user_id = Auth::id();
        $mp->membership_vendor_id= $id;
        $mp->status=1;
        $mp->expired_date=date('Y-m-d', strtotime($date. ' + 30 days')); 
        $mp->buy_date=$date;
        
        $mp->save();
        return redirect()->back()->with('success', 'Membership Package has been bought Successfully.');


        
    }
    function memberStatus(){


        $data =BuyMP::where('user_id', Auth::id())->orderBy('id','desc')->get();
    	return view('vendor.virtual.member_status',['data'=> $data]);
    }


   
    function cancelmembership($id, $status){

        $pro= BuyMP::find(base64_decode($id));

        $pro->status=$status;
        $pro->save();

        return redirect()->back()->with('success', 'MemberShip cancelled.');
    }

}
