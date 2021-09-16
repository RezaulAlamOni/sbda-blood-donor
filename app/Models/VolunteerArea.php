<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class VolunteerArea extends Model
{
    //
    public function users() {
        return $this->hasMany(User::class,'areas_id','id');
    }
}
