<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        // Una categoría tiene muchos posts
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        // Una categoría tiene muchos videos
        return $this->hasMany(Video::class);
    }
}
