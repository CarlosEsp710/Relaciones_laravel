<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function users()
    {
        // Un nivel puede tener muchos usarios
        return $this->hasMany(User::class);
    }

    public function posts()
    {
        // Un nivel puede tener muchos post a través de un usuario
        return $this->hasManyThrough(Post::class, User::class);
    }

    public function videos()
    {
        // Un nivel puede tener muchos videos a través de un usuario
        return $this->hasManyThrough(Video::class, User::class);
    }
}
