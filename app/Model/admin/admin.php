<?php

namespace App\Model\admin;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class admin extends Authenticatable implements HasMedia
{
    use Notifiable ,HasMediaTrait;


    public function roles()
    {
        return $this->belongsToMany('App\Model\admin\role');
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('avatar')

        //->acceptsFile(function (File $file) {
          //  return $file->mimeType === 'image/jpeg';
        //})

        ->registerMediaConversions(function (Media $media){
         $this->addMediaConversion('card')
         ->width(200)
         ->height(300);
         $this->addMediaConversion('thumb')
         ->width(100)
         ->height(100);
     });

    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
       protected $fillable = [
        'name', 'email', 'password','status','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
