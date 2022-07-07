<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class UsersSeeder extends Seeder
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
                'name'=>"adminpusat1",
                'roles_id'=>"1",
                'email'=>"adminpusat1@gmail.com",
                'email_verified_at' => date(now()),
                'alamat'=>"karanganyar, jawa tengah",
                'posisi'=>"admin",
                'telephone'=>"0811111",
                'password' => bcrypt('12345678'),
                  'status'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "2",
                'name'=>"adminpusat2",
                'roles_id'=>"1",
                'email'=>"adminpusat2@gmail.com",
                'email_verified_at' => date(now()),
                'alamat'=>"solo, jawa tengah",
                'posisi'=>"admin",
                'telephone'=>"0821111",
                'password' => bcrypt('12345678'),
                 'status'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "3",
                'name'=>"admincabang1",
                'roles_id'=>"1",
                'email'=>"admincabang1@gmail.com",
                'email_verified_at' => date(now()),
                'alamat'=>"solo, jawa tengah",
                'posisi'=>"admin",
                'telephone'=>"0811121",
                'password' => bcrypt('12345678'),
                'status'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "4",
                'name'=>"kepalaunit",
                'roles_id'=>"2",
                'email'=>"kepalaunit@gmail.com",
                'email_verified_at' => date(now()),
                'alamat'=>"solo, jawa tengah",
                'posisi'=>"kepala unit inventaris",
                'telephone'=>"0811112",
                'password' => bcrypt('12345678'),
                 'status'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => "5",
                'name'=>"peminjam",
                'roles_id'=>"3",
                'email'=>"peminjam@gmail.com",
                'email_verified_at' => date(now()),
                'alamat'=>"karanganyar, jawa tengah",
                'posisi'=>"staff ahli",
                'telephone'=>"0811113",
                'password' => bcrypt('12345678'),
                 'status'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
                
            ],
            
            
            
        ];
        DB::table('users')->insert($posts);
    }
}
