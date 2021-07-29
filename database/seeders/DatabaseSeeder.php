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
        $this->call(VoteValuesTableSeeder::class);
        $this->call(PollTypesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
