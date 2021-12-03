<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    function logout(){
        Auth::guard('admin')->logout();

        return redirect(route('admin.login'));
    }
}
