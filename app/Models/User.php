<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        // Un usuario tiene un perfil
        return $this->hasOne(Profile::class);
    }

    public function level()
    {
        // Un usuario pertence a un nivel
        return $this->belongsTo(Level::class);
    }

    public function groups()
    {
        // Un usuario puede pertenecer a muchos grupos
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public function location()
    {
        // Un usuario tiene una localización a través de su perfil
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    public function posts()
    {
        // Un usuario tiene muchos posts
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        // Un usuario tiene muchos videos
        return $this->hasMany(Video::class);
    }

    public function comments()
    {
        // Un usuario puede tener muchos comentarios
        return $this->hasMany(Comment::class);
    }

    public function image()
    {
        // Un usuario puede tener una imagen de perfil
        return $this->morphOne(Image::class, 'imageable');
    }
}
