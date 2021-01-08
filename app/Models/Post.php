<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        // Un post pertenece a un usuario
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        // Un post pertenece a una categoría
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        // Un post tiene muchos comentarios
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function image()
    {
        // Un post tiene una imagen
        return $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
        // Un post puede tener muchas etiquetas
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
