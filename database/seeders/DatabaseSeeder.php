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
        // \App\Models\User::factory(10)->create();
        $this->call([
            ClientStatusSeeder::class,
            ClientCategorySeeder::class, 
            IntermediaireStatusSeeder::class,
            IntermediaireCategorySeeder::class
        ]);
        \App\Models\Client::factory(414)->create();
        \App\Models\Intermediaire::factory(365)->create();
    }
}
