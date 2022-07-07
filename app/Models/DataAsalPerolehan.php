<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsalPerolehan extends Model
{
    use HasFactory;
    protected $table = "asal_perolehans";
    protected $fillable = [
        'nama_asalaperolehan'
    ];

    public function barangs() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(Barang::class);
    }
}
