<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPeminjaman extends Model
{
    use HasFactory;
    protected $table = "status_peminjamans";
    protected $fillable = [
        'status_peminjamans'
    ];

    public function peminjamans() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(Peminjaman::class);
    }

     public function detailpeminjaman() 
    {
        return $this->hasMany(DetailPeminjaman::class,'detail_peminjamans_id', 'id'); //1 karyawan mempunyai 1 posisi
    }
}
