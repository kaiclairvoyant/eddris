<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "player_id" => 'exists:players,id',
            "name" => 'string',
            "health" => 'integer',
            "mana" => 'integer',
            "stamina" => 'integer',
            "strength" => 'integer',
            "intelligence" => 'integer',
            "dexterity" => 'integer',
        ];
    }
}
