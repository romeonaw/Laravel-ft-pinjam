<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $room_types = array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Gedung A',
                'is_active' => 1,
                'created_at' => '2023-05-01 22:52:24',
                'updated_at' => '2023-05-01 22:52:24',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Gedung C',
                'is_active' => 1,
                'created_at' => '2023-05-01 22:52:24',
                'updated_at' => '2023-05-01 22:52:24',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Gedung E ',
                'is_active' => 1,
                'created_at' => '2023-05-05 19:09:56',
                'updated_at' => '2023-05-05 19:09:56',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Gedung D',
                'is_active' => 1,
                'created_at' => '2023-05-05 19:20:58',
                'updated_at' => '2023-05-05 19:20:58',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Gedung F',
                'is_active' => 1,
                'created_at' => '2023-05-05 19:21:05',
                'updated_at' => '2023-05-05 19:21:05',
            ),
          
        );

        // Checking if the table already have a query
        if (is_null(\DB::table('room_types')->first()))
            \DB::table('room_types')->insert($room_types);
        else
            echo "\e[31mTable is not empty, therefore NOT ";
    }
}