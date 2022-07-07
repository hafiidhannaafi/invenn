<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamans";
    protected $fillable = [
        'kode_peminjaman',
        'users_id',
        // 'detail_peminjamans_id',
        'nama_peminjam',
        'jenis_peminjaman',
        'tujuan',
        'tgl_pengajuan',
        'tgl_pinjam',
        'tgl_kembali',
        'surat_pinjam',
        // 'tgl_perpanjangan',
        // 'status_konfirmasis_id',
        // 'status_peminjamans_id',

    ];

    public function barangs() 
    {
        return $this->belongsTo(Barang::class,'barangs_id'); //1 karyawan mempunyai 1 posisi
    }

    public function status_konfirmasis() 
    {
        return $this->belongsTo(StatusKonfirmasi::class,'status_konfirmasis_id'); 
    }

    public function status_peminjamans() 
    {
        return $this->belongsTo(StatusPeminjaman::class,'status_peminjamans_id'); //1 karyawan mempunyai 1 posisi
    }

    public function users() 
    {
        return $this->belongsTo(User::class,'users_id', 'id'); //1 karyawan mempunyai 1 posisi
    }

    // public function detailpeminjaman() 
    // {
    //     return $this->belongsTo(DetailPeminjaman::class,'detail_peminjamans_id', 'id'); //1 karyawan mempunyai 1 posisi
    // }
    
}

