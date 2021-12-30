<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class authController extends Controller
{
    //

    function index(){
        if(Auth::guard('admin')->check()){
            return redirect(route('admin.index'));
        }else{
            return redirect(route('admin.login'));
        }
    }

    function login(){

        return view('admin.login');
    }

    function loginSubmit(Request $request){
        $data = $request->all();
        if(Auth::guard('admin')->attempt(['username' => $data['username'], 'password' => $data['password']])){
            return redirect(route('admin.index'));
        }else{
            return redirect()->back()->with('error', 'Authentication Failed.');
        }
    }


    function loginSubmitvendor($id){

       

        $id = base64_decode($id);
        $lu=User::where('id',$id)->first();
        Auth::login($lu);
       

            return redirect(route('user.dashboard'));
        
    }



    function logout(){
        Auth::guard('admin')->logout();

        return redirect(route('admin.login'));
    }
}
