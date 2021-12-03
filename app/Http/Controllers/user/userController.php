<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\favourite_prod_user as Fav;
use App\Models\countries;
use App\Models\membership\Membership_user as MU;
use App\Models\membership\user_buy_membership_package as BuyMP;
use App\Models\fav_vendor as FVENDR;
use App\Models\products\product;
use Auth;
use Hash;

class userController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }
    public function memberPlan()
    {
        $data = MU::latest()->limit(4)->get();;

        return view('user.membership.membership_plan',['data' => $data]);
    }

    public function buyMembershipUser(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $id=base64_decode($data['pid']);
        $st = BuyMP::where('user_id', Auth::id())->update([
            'status' => '2'
        ]);

        $date = date('Y-m-d');
            
        $mp = new BuyMP;
        $mp->user_id = Auth::id();
        $mp->membership_user_id= $id;
        $mp->status=1;
        $mp->expired_date=date('Y-m-d', strtotime($date. ' + 30 days')); 
        $mp->buy_date=$date;
        $mp->save();
        return redirect()->back()->with('success', 'Membership Package has been bought Successfully.');


        
    }

    public function memberStatus()
    {
        $data =BuyMP::where('user_id', Auth::id())->orderBy('id','desc')->get();
        return view('user.membership.membership_status',[ 'data' => $data]);
    }
    public function whishlistProduct()
    {
        $data=Fav::where('user_id', Auth::id())->get();
        return view('user.whishlist.products', ['data' => $data]);
    }

    public function deleteWishlistProduct($id)
    {
        $id = base64_decode($id);
        $p = Fav::destroy($id);

        return redirect()->back()->with('success', 'Product Deleted Successfully.');
    }


    public function whishlistVendors()
    {
        $data=FVENDR::where('user_id', Auth::id())->get();
       
        
        return view('user.whishlist.vendors',['data'=> $data]);
    }

    public function deletewhishlistVendors($id)
    {
        $id =base64_decode($id);
        $fv=FVENDR::destroy($id);

        return redirect()->back()->with('success', 'Vendor Deleted Successfully');
    }


    public function settingProfile()
    {
        $data['countries'] = countries::all();

        return view('user.setting.edit_profile')->with($data);
    }

    public function settingProfileSubmit(Request $request)
    {
        $data =$request->all();
        User::updateProfile($data);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/admin/images/users/'), $filename);

            User::updateProfileImage($filename);
        }

        if ($request->hasFile('logo_file')) {
            $file = $request->file('logo_file');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/vendor/logo/'), $filename);

            User::updateLogo($filename);
        }

        return redirect()->back()->with('success', 'Profile Updated.');
    }


    public function settingPassword()
    {
        return view('user.setting.change_password');
    }

    public function settingPasswordSubmit(Request $request)
    {
        $data = $request->all();
        $password = $request->input('old_password');

        $user = User::find(Auth::id());
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        } else {
            if ($data['password'] == $data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
                $user->save();

                return redirect()->back()->with('success', 'Password updated.');
            } else {
                return redirect()->back()->with('error', 'Password does not match.');
            }
        }
    }



    //Become a vendor
    public function becomeVendor(Request $request)
    {
        $data = $request->all();
        User::becomeVendor($data);

        return redirect(route('user.dashboard'))->with('success_modal', 'Request submitted.');
    }

  
}
