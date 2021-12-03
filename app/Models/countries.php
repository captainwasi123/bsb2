<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class countries extends Model
{
    use HasFactory;
    protected $table = 'tbl_country_info';

    public function user(){
        
        return $this->hasOne(User::class);
    }
}
