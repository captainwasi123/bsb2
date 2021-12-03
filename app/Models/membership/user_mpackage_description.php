<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\membership\Membership_user as MU;

class user_mpackage_description extends Model
{
    use HasFactory;

    protected $table='tbl_user_mpackage_description';


    public function mpUser(Type $var = null)
    {
        return $this->hasOne(MU::class, 'id','membership_user_id');
    }
}
