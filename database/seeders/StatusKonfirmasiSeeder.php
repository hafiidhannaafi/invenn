<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class StatusKonfirmasiSeeder extends Seeder
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
                'status_konfirmasi' => "Pengajuan",
            ],

            [
                'id' => "2",
                'status_konfirmasi' => "Disetujui",
            ],

            [
                'id' => "3",
                'status_konfirmasi' => "Ditolak",
            ],
            
        ];
        DB::table('status_konfirmasis')->insert($posts);
    }
}
