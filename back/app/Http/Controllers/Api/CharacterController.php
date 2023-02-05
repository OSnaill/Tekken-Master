<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function storeCharacter(Request $request)
    {
        // Nécessite d'être connecté pour accéder à cette méthode
        if(Character::find('*')->where('name', $request->name ))
        {
            dd('ah');
        }
        $newCharacter = new Character();
        
        $newCharacter->image = "à faire";
        $newCharacter->name = $request->name;
        $newCharacter->difficulty = $request->difficulty;
        $newCharacter->save();

        foreach($request->archetypes as $archetype)
        {
            $archetype = DB::table('archetypes')->find($archetype);
            $newCharacter->archetypes()->attach($archetype);
        }

        return response()->json([
            'succes' => 'OK',
            'message' => 'le personnage a bien été créer'
        ]);
    }
}
