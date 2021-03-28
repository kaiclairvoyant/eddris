<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => 'string|nullable',
            "health" => 'integer|nullable',
            "mana" => 'integer|nullable',
            "stamina" => 'integer|nullable',
            "strength" => 'integer|nullable',
            "intelligence" => 'integer|nullable',
            "dexterity" => 'integer|nullable',
        ];
    }
}
