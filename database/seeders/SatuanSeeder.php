<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class SatuanSeeder extends Seeder
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
                'nama_satuan' => "Buah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "2",
                'nama_satuan' => "Box",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "3",
                'nama_satuan' => "Kardus",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "4",
                'nama_satuan' => "Biji",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            
            
        ];
        DB::table('satuans')->insert($posts);
    }
}
