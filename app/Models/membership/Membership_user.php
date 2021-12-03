<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\membership\user_mpackage_description as UMPD;

class Membership_user extends Model
{
    use HasFactory;

    protected $table ='tbl_membership_user';

   
 
    public function UserMPDescr()
    {
        return $this->hasMany(UMPD::class, 'membership_user_id' , 'id'  );
    }
}

