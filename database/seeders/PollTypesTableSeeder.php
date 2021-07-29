<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PollTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('poll_types')->delete();
        
        \DB::table('poll_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Yes / No',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1 - 5 Stars',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'A - E Options',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}