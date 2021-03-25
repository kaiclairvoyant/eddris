<?php

namespace App\Services;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterService
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(array $data): Character
    {
        return Character::create($data);
    }

    public function show(Character $character)
    {
        //
    }

    public function edit(Character $character)
    {
        //
    }

    public function update(Request $request, Character $character)
    {
        //
    }

    public function destroy(Character $character)
    {
        //
    }
}
