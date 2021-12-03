<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products\product;

class productController extends Controller
{
    //
    function productPending(){
        $data['products'] = product::where('status', '0')->latest()->get();

        return view('admin.featured_product.pending_product')->with($data);
    }
    function productPublish(){
        $data['products'] = product::where('status', '1')->latest()->get();

        return view('admin.featured_product.publish_product')->with($data);
    }
    function productExpired(){

        return view('admin.featured_product.expired_product');
    }
    function productBlocked(){
        $data['products'] = product::where('status', '2')->latest()->get();

        return view('admin.featured_product.blocked_product')->with($data);
    }

    function changeStatus($id, $status){

      $user= product::find(base64_decode($id));
      $user->status = $status;
      $user->is_featured=4;
      $user->save();

      return redirect()->back()->with('success', 'Product Status Updated.');
    }

    // feature product

    function featproductPending(){
        $data['products'] = product::where('is_featured', '0')->latest()->get();

        return view('admin.featured_product.feature_pending_product')->with($data);
    }

    function featproductApprove(){
        $data['products'] = product::where('is_featured', '1')->latest()->get();

        return view('admin.featured_product.feature_all_product')->with($data);
    }

     function changeFeatureStatus($id, $status){

        $user= product::find(base64_decode($id));
        $user->is_featured=$status;
        $user->save();
  
        return redirect()->back()->with('success', 'Product Status Updated.');
      }

      function cancelFeaPro($id, $status){

        $user= product::find(base64_decode($id));
        $user->is_featured=$status;
        $user->save();
  
        return redirect()->back()->with('success', 'Product Status Updated.');
      }

      
      function rejectFeaPro($id, $status){

        $user= product::find(base64_decode($id));
        $user->is_featured=$status;
        $user->save();
  
        return redirect()->back()->with('success', 'Product Status Updated.');
      }

      

      
}
