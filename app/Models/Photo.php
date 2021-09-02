<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $fillable = [
        'photo',
        'c_id',
        'type',
        'description'
    ];

    public function getPhotoAttribute($value)
    {
        return  '/storage/images/'.$this->attributes['type'].'/'.$value;
    }

    public static function boot() {

        parent::boot();

        static::deleting(function($photo) {

        });

    }

}
