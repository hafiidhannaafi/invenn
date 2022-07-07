<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{

    use HasFactory;
    protected $table = "jenis_barangs";
    protected $fillable = [
        'jenis_barang'
    ];

    public function barangs() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(Barang::class);
    }
}
