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

    public function update(array $data, Character $character): bool
    {
        return (bool) $character->update($data);
    }

    public function destroy(Character $character): bool
    {
        return (bool) $character->delete();
    }
}
