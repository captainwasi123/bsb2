<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\membership\Membership_vendor as MV;
use App\Models\User;
class vendor_buy_membership_package extends Model
{
    use HasFactory;
    protected $table ='tbl_vendor_buy_membership_package';


    public function user(){
        
        return $this->belongsto(User::class, 'user_id', 'id'); 
    }

    public function membershipVendor()
    {
        return $this->belongsTo(MV::class, 'membership_vendor_id', 'id');
    }
}
