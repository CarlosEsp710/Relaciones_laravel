<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        // Una etiqueta puede ser transformada / Tener muchos posts
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function tags()
    {
        // Una etiqueta puede ser transformada / Tener muchos videos
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
