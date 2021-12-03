<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products\product;
use App\Models\User;

class favourite_prod_user extends Model
{
    use HasFactory;
    protected $table ='tbl_fav_prod_user';

    public $timestamps=false; 

    public function product(){

        return $this->belongsTo(product::class, 'product_id', 'id');
    }

    Public function user(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
