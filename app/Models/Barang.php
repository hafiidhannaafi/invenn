<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $fillable = [
        'jenis_asets_id',
        'jenis_barangs_id',
        'asal_perolehans_id',
        'satuans_id',
        'kode',
        'spesifikasi',
        'foto',
        'kegunaan',
        'tanggal_perolehan',
        'nilai_perolehan',
        'legalitas',
        'luas',
        'beban_penyusutan',
        'nilai_buku',
        'lokasi',
        'penanggung_jawab',
        'jumlah_awal',
        'jumlah',
        'kondisi',
        'ket',
    ];

    public function jenis_asets() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(DataJenisAset::class,'jenis_asets_id'); //1 karyawan mempunyai 1 posisi
    }

    public function jenis_barangs() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(JenisBarang::class,'jenis_barangs_id'); //1 karyawan mempunyai 1 posisi
    }

    public function asal_perolehans() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(DataAsalPerolehan::class,'asal_perolehans_id'); //1 karyawan mempunyai 1 posisi
    }

    public function satuans() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(Satuan::class,'satuans_id'); //1 karyawan mempunyai 1 posisi
    }

    public function getTanggalPerolehan() // relasi tabel posisi ke kryawan
    {
        return carbon::parse($this->fillable['tanggal_perolehan'])
        ->translatedFormat('l, d F Y'); //1 karyawan mempunyai 1 posisi
    }

    public function barang_keluars() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(BarangKeluar::class);
    }

    public function barang_masuks() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(BarangMasuk::class);
    }

}