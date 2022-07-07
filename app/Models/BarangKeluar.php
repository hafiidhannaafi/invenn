<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{

    use HasFactory;
    protected $table = "Barang_keluars";
    protected $fillable = [
        'barangs_id',
        'tanggal_keluar',
        'jumlah_keluar',
        'kondisi',
        'ket',
        'status',

    ];

    public function barangs() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(Barang::class,'barangs_id'); //1 karyawan mempunyai 1 posisi
    }

    
}