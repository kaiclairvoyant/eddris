<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use Uuid;
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
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
