<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maher\Counters\Models\Counter;

class CounterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Counter::create([
            'key' => 'vote_count',
            'name' => 'VOTE',
        ]);


    }
}
