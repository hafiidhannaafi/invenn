<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = "barang_masuks";
    protected $fillable = [
        'barangs_id',
        'tanggal_input',
        'jumlah_masuk',
        'supplier',
        'kondisi',
        'ket',
        'status',
    ];

    public function barangs() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(Barang::class,'barangs_id'); //1 karyawan mempunyai 1 posisi
    }
}
