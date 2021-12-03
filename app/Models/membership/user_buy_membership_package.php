<?php

namespace App\Models\membership;

use App\Models\User;
use App\Models\membership\Membership_user as MU;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class user_buy_membership_package extends Model
{
    use HasFactory;

    protected $table = 'tbl_user_buy_membership_package';

    public function user(){
        
        return $this->belongsto(User::class, 'user_id', 'id'); 
    }


    public function membershipUser()
    {
        return $this->belongsTo(MU::class, 'membership_user_id', 'id');
    }

    


    
}
