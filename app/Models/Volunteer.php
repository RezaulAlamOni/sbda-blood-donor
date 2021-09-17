<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'user_id' ,
        'v_area_id',
        'v_type',
        'status',
        'created_at',
        'updated_at'
    ];
    //
}
