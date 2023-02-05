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

        $archetypes =['Rushdown', 'Defensive', 'Evasive', 'Poking', 'Mixup', 'Grappler'];
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        foreach ($archetypes as $archetype) {
            DB::table('archetypes')->insert([
                'name' => $archetype
            ]);
        }
    }
}
