<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use App\Services\CharacterService;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    private CharacterService $service;

    public function __construct(CharacterService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        //
    }


    public function store(CharacterRequest$request)
    {
        return $this->service->store(
            $request->validated()
        );
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
