<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoteValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vote_values')->delete();
        
        \DB::table('vote_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'poll_type_id' => 1,
                'name' => 'Yes',
                'value' => 'Yes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'poll_type_id' => 1,
                'name' => 'No',
                'value' => 'No',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'poll_type_id' => 2,
                'name' => '1',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'poll_type_id' => 2,
                'name' => '2',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'poll_type_id' => 2,
                'name' => '3',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'poll_type_id' => 2,
                'name' => '4',
                'value' => '4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'poll_type_id' => 2,
                'name' => '5',
                'value' => '5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'poll_type_id' => 3,
                'name' => 'A',
                'value' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'poll_type_id' => 3,
                'name' => 'B',
                'value' => 'B',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'poll_type_id' => 3,
                'name' => 'C',
                'value' => 'C',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'poll_type_id' => 3,
                'name' => 'D',
                'value' => 'D',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'poll_type_id' => 3,
                'name' => 'E',
                'value' => 'E',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}