<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Donne le nom et l'image du personnage
     */
    public function characterList()
    {
        return response()->json([
            Character::all([ 'id', 'image', 'name' ]),
        ]);
    }

    public function characterDetails(Character $character)
    {
        return response()->json([
            Character::find($character)
        ]);
    }

    public function store(Request $request)
    {
        // Nécessite d'être connecté pour accéder à cette méthode
        $newCharacter = new Character();
        $newCharacter->image = "à faire";
        $newCharacter->name = $request->name;
        $newCharacter->difficulty = $request->difficulty;

    }
}
