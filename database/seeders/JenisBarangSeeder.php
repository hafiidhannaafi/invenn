<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class JenisBarangSeeder extends Seeder
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
                'jenis_barang' => "Kursi",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "2",
                'jenis_barang' => "Camera",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "3",
                'jenis_barang' => "Proyektor",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            [
                'id' => "4",
                'jenis_barang' => "Mesin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "5",
                'jenis_barang' => "Pensil",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "6",
                'jenis_barang' => "Bolpen",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "7",
                'jenis_barang' => "Meja",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "8",
                'jenis_barang' => "Rumah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "9",
                'jenis_barang' => "Sawah",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "10",
                'jenis_barang' => "Sepeda Motor",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'id' => "11",
                'jenis_barang' => "Mobil",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            
            
            
            
        ];
        DB::table('jenis_barangs')->insert($posts);
    }
}
