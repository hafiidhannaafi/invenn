<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;
    protected $table = "detail_peminjamans";
    protected $fillable = [
        'kode_peminjaman',
        'status_konfirmasis_id',
        'status_peminjamans_id',
        'barangs_id',
        'jumlah_pinjam',
    ];

    public function peminjamans()
    {

        return $this->hasMany(peminjamans::class);
    }
        public function barangs() 
    {

        return $this->belongsTo(Barang::class, 'barangs_id');
    }
    public function status_konfirmasis() 
    {
        return $this->belongsTo(StatusKonfirmasi::class,'status_konfirmasis_id'); 
    }

     public function status_peminjamans() 
    {
        return $this->belongsTo(StatusPeminjaman::class,'status_peminjamans_id'); 
    }
  

}
