<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_asets_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jenis_barangs_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('asal_perolehans_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('satuans_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode');
            $table->string('spesifikasi');
            $table->string('foto');
            $table->string('kegunaan');
            $table->date('tanggal_perolehan');
            $table->string('nilai_perolehan');
            $table->string('legalitas')->nullable();
            $table->string('luas')->nullable();
            $table->string('beban_penyusutan')->nullable();
            $table->string('nilai_buku')->nullable();
            $table->string('lokasi');
            $table->string('penanggung_jawab');
             $table->string('jumlah_awal');
            $table->string('jumlah');
            $table->string('kondisi');
            $table->string('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
