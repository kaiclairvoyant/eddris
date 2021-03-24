<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
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
