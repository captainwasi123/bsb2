<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class fav_vendor extends Model
{
    use HasFactory;

    protected $table='tbl_fav_vendor';

    public $timestamps=false;

    Public function user(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    Public function favVender(){

        return $this->belongsTo(User::class, 'vendor_id');
    }
}
