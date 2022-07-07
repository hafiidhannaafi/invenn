<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class StatusPeminjamanSeeder extends Seeder
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
                'status_peminjamans' => "Barang belum diambil",
            ],

            [
                'id' => "2",
                'status_peminjamans' => "Barang sudah dipinjam",
            ],

            [
                'id' => "3",
                'status_peminjamans' => "Dikembalikan",
            ],
            
        ];
        DB::table('status_peminjamans')->insert($posts);
    }
}
