<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);

         Listing::factory(6)->create([
            'user_id' => $user->id
         ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, JavaScript',
        //     'company' => 'Acme Corp',
        //     'location' => 'New York',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'dorime ameno dorime ameno'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'Laravel, Backend',
        //     'company' => 'Stark Corp',
        //     'location' => 'Tokyo',
        //     'email' => 'tunde@email.com',
        //     'website' => 'https://www.stark.com',
        //     'description' => 'full stack engineers are somewhat well paid!'
        // ]);
    }
}
