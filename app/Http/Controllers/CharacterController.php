<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Services\CharacterService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        return response()->json(
            $this->service->store($request->validated()),
            Response::HTTP_CREATED
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

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        return response()->json(
            $this->service->update($request->validated(), $character),
            Response::HTTP_NO_CONTENT
        );
    }

    public function destroy(Character $character)
    {
        return response()->json(
            $this->service->destroy($character),
            Response::HTTP_NO_CONTENT
        );
    }
}
