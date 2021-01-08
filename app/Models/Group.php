<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function users()
    {
        // Un grupo puede tener muchos usarios
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
