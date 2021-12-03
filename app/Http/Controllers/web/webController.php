<?php

namespace App\Http\Controllers\web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\products\product;
use App\Models\products\categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\favourite_prod_user as fav;
use App\Models\fav_vendor as FVENDR;



class webController extends Controller
{
    //
    function index(){
        $curr = date('Y-m-d');
        $data['categories'] =categories::all();
        $data['users'] =User::where('is_feature',1)->whereHas('featured', function($q) use ($curr){
            return $q->where('start_date', '<=', $curr)
                        ->where('expired_date', '>=', $curr);
        })
        ->orderby('created_at', 'Desc')->take(6)->get();
        
      


        return view('web.index')->with($data);
    }

    function favprod($id){
        $id = base64_decode($id);
        $da = fav::where(['user_id' => Auth::id(), 'product_id' => $id])->first();
        if(empty($da->id)){
            $f = new fav;
            $f->user_id = Auth::id();
            $f->product_id = $id;
            $f->save();

            return '1';
        }else{
            fav::destroy($da->id);

            return '0';
        }
    }

    function favVender($id)
    {
       $id=base64_decode($id);

       $data=FVENDR::where(['user_id' => Auth::id(), 'vendor_id' => $id])->first();

        if(empty($data->id)){

            $fv= new FVENDR;
            $fv->user_id=Auth::id();
            $fv->vendor_id=$id;
            $fv->save();

            return '1';
        }
        else{

            FVENDR::destroy($data->id);

            return '0';

        }

    }


    function about(){

        return view('web.about');
    }

    function categories(){

        return view('web.categories');
    }

    function category($id, $name){
       
        $curr = date('Y-m-d');
        $id = base64_decode($id);
        $data['category'] = categories::find($id);
        $data['products'] = product::where('category_id', $id)->where('is_featured', '1')->get();
        $data['users'] =User::where('is_feature',1)->whereHas('featured', function($q) use ($curr){
            return $q->where('start_date', '<=', $curr)
                        ->where('expired_date', '>=', $curr);
        })
        ->orderby('created_at', 'Desc')->take(6)->get();
        
      
        // $data['users'] =User::where('is_feature',1)->latest()->limit(6)->get();
        return view('web.category')->with($data);
    }

    function physicalBox(){

        return view('web.physicalBox');
    }



    function login(){

        return view('web.login');
    }
    function loginSubmit(Request $request){
        $data = $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => '1'])){

            return redirect('/');
        }else{

            return redirect()->back()->with('error', 'Authentication Error');
        }
    }

    function register(){

        return view('web.register');
    }
    function registerSubmit(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:tbl_users_info|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        $data = $request->all();
        User::addUser($data);
        return redirect(route('web.login'))->with('success', 'Account Created.');
    }

    function logout(){
        Auth::logout();

        return redirect(route('web.login'))->with('error', 'Account Logged Out.');
    }
}
