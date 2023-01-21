<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('characters')->insert([
            'name' => 'Jin Kazama',
            'image' => ' à faire',
            'description' => 'Lorem ipsum',
            'execution' => 8,
            'poking' => 7,
            'keepout' => 7,
            'damage_output' => 8,
            'throw_game' => 6,
            'evasiveness' => 7,
            'movement' => 7,
            'mixup' => 7,
            'party' => 3,
            'space_control' => 8,
            'okizeme' => 4
        ]);
    }
}
