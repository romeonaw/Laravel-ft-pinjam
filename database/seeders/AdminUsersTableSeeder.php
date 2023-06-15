<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $admin_users = array (
            0 =>
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$k2jNYZ66DQeRnDVVei4kOeceRvvvU70bJkZo4fHhTDFYivPCeLW52',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'bwMPZyAVO3dD4ttpf6NH6RtpZvt14qgokxHx1QaLVzsgShaiYxNmv4WTZmwt',
                'created_at' => '2023-05-01 10:21:03',
                'updated_at' => '2023-05-01 10:21:03',
            ),
            1 =>
            array (
                'id' => 2,
                'username' => 'eddy maryanto',
                'password' => '$2y$10$xdLRcYL9RVr.wEZqTEZxFeEA63l5bEJEMgAHwhLIQiz9nKvPVF89y',
                'name' => 'Drs.Eddy Maryanto, M.Cs',
                'avatar' => NULL,
                'remember_token' => 'xBlSYu8MJK1jeSiLFxJOMjpHoT8qKC9JKeP8mDK3spcJZMZFs4z4FgOyHCSA',
                'created_at' => '2023-05-01 20:17:54',
                'updated_at' => '2023-05-01 20:17:54',
            ),
            2 =>
            array (
                'id' => 3,
                'username' => 'H1D021048',
                'password' => '$2y$10$KHUdHC5EuOyc0wkUHzCAleXcmf3r6eTsG9Th5q6maa4i8cKiicvhO',
                'name' => 'NUR ARIF WIJAKSONO',
                'avatar' => NULL,
                'remember_token' => '20kX9EFXkg6dMEBmvLJiO0lbsGSad9MYTmKeFHa8LMKfNU8pIOWg9irstvRr',
                'created_at' => '2023-05-01 20:20:55',
                'updated_at' => '2023-05-01 20:20:55',
            ),
            3 =>
            array (
                'id' => 4,
                'username' => 'priyo saptono',
                'password' => '$2y$10$z30ptqF7yT85ERia6nOnOuCNO7WMsYS86YD2MsWFIZvir/2ff/AIm',
                'name' => 'Drs. Priyo Saptono, MM',
                'avatar' => NULL,
                'remember_token' => 'xBlSYu8MJK1jeSicP20EqtVdC2hpBopj5EX8y2QSqJWtunWy5TQuxRpDvBs16TElx5uceiOlQQ9LFxJOMjpHoT8qKC9JKeP8mDK3spcJZMZFs4z4FgOyHCSA',
                'created_at' => '2023-05-01 20:22:54',
                'updated_at' => '2023-05-01 20:22:54',
            ),
        );

        // Checking if the table already have a query
        if (is_null(\DB::table('admin_users')->first()))
            \DB::table('admin_users')->insert($admin_users);
        else
            echo "\e[31mTable is not empty, therefore NOT ";

    }
}