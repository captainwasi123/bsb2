<?php

namespace App\Models\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\products\categories;
use App\Models\favourite_prod_user as fav;
use App\Models\membership\Membership_user as MU;
use Auth;

class product extends Model
{
    use HasFactory;
    protected $table = 'tbl_product_info';

    public static function addProduct(array $data){
        $p = new product;
        $p->title = $data['title'];
        $p->price = $data['price'];
        $p->category_id = $data['category_id'];
        $p->product_url = $data['product_url'];
        $p->description = $data['description'];
        $p->seller_id = Auth::id();
        $p->is_featured = '0';
        $p->status = '0';
        $p->save();

        return $p->id;
    }

    public static function updateProduct(array $data){
        $p = product::find(base64_decode($data['pid']));
        $p->title = $data['title'];
        $p->price = $data['price'];
        $p->category_id = $data['category_id'];
        $p->product_url = $data['product_url'];
        $p->description = $data['description'];
        $p->save();
    }





    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');
    }
    public function category(){
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function favprod()
    { 
        return $this->belongsTo(fav::class, 'id', 'product_id')->where('user_id', Auth::id() );
    }

     public function membershipUser()
    {
return $this->hasOne(MU::class, 'id', 'product_id');
    }
}
