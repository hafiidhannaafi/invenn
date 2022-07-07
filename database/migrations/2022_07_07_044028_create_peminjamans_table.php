<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
           $table->id();
             $table->string('kode_peminjaman');

            // $table->foreignId('barangs_id')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('status_konfirmasis_id')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('status_peminjamans_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_peminjam');
            $table->string('jenis_peminjaman');
            $table->string('tujuan');
            // $table->string('jumlah_pinjam');
            $table->date('tgl_pengajuan');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('surat_pinjam');
            // $table->date('tgl_perpanjangan')->nullable();
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
        Schema::dropIfExists('peminjamans');
    }
}
