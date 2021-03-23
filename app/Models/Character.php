<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'character_id',
        'name',
        'health',
        'mana',
        'stamina',
        'strength',
        'intelligence',
        'dexterity',
        'endurance',
        'resistance',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
