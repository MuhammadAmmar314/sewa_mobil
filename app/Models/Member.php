<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_name',
        'address',
        'phone_number',
        'SIM_number'
    ];

    public function user(){
        return $this->hasOne('App\Models\User', 'user_id');
    }
}
