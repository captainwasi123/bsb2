<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\membership\vendor_mpackage_description as VMPD;

class Membership_vendor extends Model
{
    use HasFactory;

    protected $table='tbl_membership_vendor';

    

    public function VedorMPDescr()
    {
        return $this->hasMany(VMPD::class, 'membership_vendor_id' , 'id'  );
    }


}
