<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class DonorArea extends Model
{
    //
    public function users() {
        return $this->hasMany(User::class,'areas_id','id');
    }
}
