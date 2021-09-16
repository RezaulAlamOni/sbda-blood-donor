<?php

namespace App;

use App\Models\BloodGroup;
use App\Models\DonorArea;
use App\Models\Volunteer;
use App\Models\VolunteerArea;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'type', 'password','blood_group_id','phone','areas_id','address','profile_photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blood_group(){
        return $this->belongsTo(BloodGroup::class,'blood_group_id','id');
    }
    public function area(){
        return $this->belongsTo(DonorArea::class,'areas_id','id');
    }
    public function v_area(){
        return $this->belongsTo(VolunteerArea::class,'areas_id','id');
    }

    public function volunteer() {
        return $this->hasOne(Volunteer::class,'user_id','id');

    }

}
