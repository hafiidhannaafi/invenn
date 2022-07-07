<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysqli;

class BarangSeeder extends Seeder
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
                'kode'=>"adminpusat1",
                'jenis_asets_id'=>"1",
                'jenis_barangs_id'=>"1",
                'asal_perolehans_id'=>"1",
                'satuans_id'=>"1",
                'spesifikasi'=>"canon D312",
                'foto'=>"1",
                'kegunaan'=>"foto barang",
                'tanggal_perolehan'=>"",
                'nilai_perolehan'=>"120.000.000",
                'legalitas'=>"100",
                'luas'=>"100",
                'beban_penyusutan'=>"10%",
                'nilai_buku'=>"-",
                'lokasi'=>"klaten kota",
                'penanggung_jawab'=>"lptp cabang klaten",
                'jumlah'=>"1",
                'kondisi'=>"1",
                'ket'=>"1",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            
            
            
            
        ];
        DB::table('barangs')->insert($posts);
    }
}
