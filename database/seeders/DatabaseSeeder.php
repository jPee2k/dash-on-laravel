<?php

namespace Database\Seeders;

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
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
        ]);

         \App\Models\Dash\Page::factory(30)->create();
         \App\Models\Dash\Template::factory(10)->create();
    }
}
