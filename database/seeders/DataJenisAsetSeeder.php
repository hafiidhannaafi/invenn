<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class DataJenisAsetSeeder extends Seeder
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
                'nama_jenisaset' => "Bergerak",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "2",
                'nama_jenisaset' => "Tidak Bergerak",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "3",
                'nama_jenisaset' => "Peralatan",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "4",
                'nama_jenisaset' => "Perlengkapan",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            
            
        ];
        DB::table('jenis_asets')->insert($posts);
    }
}
