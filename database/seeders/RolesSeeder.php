<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            [
                'id' => "1",
                'roles' => "Admin",
            ],

            [
                'id' => "2",
                'roles' => "Kepalaunit",
            ],

            [
                'id' => "3",
                'roles' => "Staff",
            ],
            
        ];
        DB::table('roles')->insert($posts);
    }
}
