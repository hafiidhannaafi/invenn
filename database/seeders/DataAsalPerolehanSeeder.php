<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class DataAsalPerolehanSeeder extends Seeder
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
                'nama_asalperolehan' => "Pembelian",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "2",
                'nama_asalperolehan'=> "Pemberian",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "3",
                'nama_asalperolehan' => "Hadiah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "4",
                'nama_asalperolehan' => "Lelang",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            
            
        ];
        DB::table('asal_perolehans')->insert($posts);
    }
}
