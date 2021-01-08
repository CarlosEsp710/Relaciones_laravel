<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable()
    {
        // Tabla polimórfica (Cambiar a...)
        return $this->morphTo();
    }

    public function user()
    {
        // Un comentario pertenece a un usuario
        return $this->belongsTo(User::class);
    }
}
