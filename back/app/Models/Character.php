<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function archetypes()
    {
        return $this->belongsToMany(Archetype::class, 'character_archetype');
    }
}
