<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peminjamans', function (Blueprint $table) {
            $table->id();
             $table->foreignId('status_konfirmasis_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_peminjamans_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_peminjaman');
            $table->string('barangs_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jumlah_pinjam');
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
        Schema::dropIfExists('detail_peminjamans');
    }
}
