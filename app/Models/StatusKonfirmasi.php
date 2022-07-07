<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKonfirmasi extends Model
{
    use HasFactory;
    protected $table = "status_konfirmasis";
    protected $fillable = [
        'status_konfirmasi'
    ];

    public function peminjamans() 
    {

        return $this->hasMany(Peminjaman::class);
    }

     public function detailpeminjaman() 
    {
        return $this->hasMany(DetailPeminjaman::class,'detail_peminjamans_id', 'id'); //1 karyawan mempunyai 1 posisi
    }

}
