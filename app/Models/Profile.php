<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function location()
    {
        // Un perfil tiene una localización
        return $this->hasOne(Location::class);
    }
}
