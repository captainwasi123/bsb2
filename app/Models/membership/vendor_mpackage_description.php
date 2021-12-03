<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\membership\Membership_vendor as MV;

class vendor_mpackage_description extends Model
{
    use HasFactory;

    protected $table='tbl_vendor_mpackage_description';

    public function mpVendor()
    {
        return $this->hasOne(MV::class, 'id' ,'membership_vendor_id');
    }
}
