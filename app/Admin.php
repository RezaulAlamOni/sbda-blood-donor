<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'status',
        'type',
        'remember_token',
        'created_at',
        'updated_a'
    ];

    protected $hidden = [
        'password','remember_token',

    ];

}
