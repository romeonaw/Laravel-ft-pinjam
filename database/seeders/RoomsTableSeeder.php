<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $rooms = array(
            0 =>
            array(
                'id' => 1,
                'name' => '201',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 1,
                'created_at' => '2023-05-01 19:05:55',
                'updated_at' => '2023-05-01 19:11:17',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => '202',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 1,
                'created_at' => '2023-05-01 19:19:45',
                'updated_at' => '2023-05-01 19:19:45',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => '101',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:32:33',
                'updated_at' => '2023-05-01 19:32:33',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => '102',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:32:45',
                'updated_at' => '2023-05-01 19:32:45',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => '103',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:32:57',
                'updated_at' => '2023-05-01 19:32:57',
                'deleted_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => '201',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:33:09',
                'updated_at' => '2023-05-01 19:33:09',
                'deleted_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => '202',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:33:30',
                'updated_at' => '2023-05-01 19:33:30',
                'deleted_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => '203',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 2,
                'created_at' => '2023-05-01 19:33:45',
                'updated_at' => '2023-05-01 19:33:45',
                'deleted_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => '101',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:34:02',
                'updated_at' => '2023-05-01 19:34:02',
                'deleted_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => '102',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:34:25',
                'updated_at' => '2023-05-01 19:34:25',
                'deleted_at' => NULL,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => '103',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:34:49',
                'updated_at' => '2023-05-01 19:34:49',
                'deleted_at' => NULL,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => '201',
                'max_people' => 30,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:35:12',
                'updated_at' => '2023-05-01 19:35:12',
                'deleted_at' => NULL,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => '202',
                'max_people' => 20,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:35:34',
                'updated_at' => '2023-05-01 19:35:34',
                'deleted_at' => NULL,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => '203',
                'max_people' => 20,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 3,
                'created_at' => '2023-05-01 19:35:51',
                'updated_at' => '2023-05-01 19:35:51',
                'deleted_at' => NULL,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Laboratorium Jaringan Komputer',
                'max_people' => 20,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 4,
                'created_at' => '2023-05-01 19:37:54',
                'updated_at' => '2023-05-01 19:37:54',
                'deleted_at' => NULL,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Laboratorium Pemrograman Web',
                'max_people' => 20,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 4,
                'created_at' => '2023-05-01 19:38:07',
                'updated_at' => '2023-05-01 19:38:07',
                'deleted_at' => NULL,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Laboratorium Baru',
                'max_people' => 20,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 4,
                'created_at' => '2023-05-01 19:38:19',
                'updated_at' => '2023-05-01 19:38:19',
                'deleted_at' => NULL,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => '115',
                'max_people' => 10,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 5,
                'created_at' => '2023-05-01 19:38:43',
                'updated_at' => '2023-05-01 19:38:43',
                'deleted_at' => NULL,
            ),
            18 =>
            array(
                'id' => 19,
                'name' => '116',
                'max_people' => 10,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 5,
                'created_at' => '2023-05-01 19:39:01',
                'updated_at' => '2023-05-01 19:39:01',
                'deleted_at' => NULL,
            ),
            19 =>
            array(
                'id' => 20,
                'name' => '117',
                'max_people' => 10,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 5,
                'created_at' => '2023-05-01 19:39:16',
                'updated_at' => '2023-05-01 19:39:16',
                'deleted_at' => NULL,
            ),
            20 =>
            array(
                'id' => 21,
                'name' => '118',
                'max_people' => 10,
                'status' => 0,
                'notes' => NULL,
                'room_type_id' => 5,
                'created_at' => '2023-05-01 19:39:27',
                'updated_at' => '2023-05-01 19:39:27',
                'deleted_at' => NULL,
            ),
        );

        // Checking if the table already have a query
        if (is_null(\DB::table('rooms')->first()))
            \DB::table('rooms')->insert($rooms);
        else
            echo "\e[31mTable is not empty, therefore NOT ";
    }
}