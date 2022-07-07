<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJenisAset extends Model
{
    use HasFactory;
    protected $table = "jenis_asets";
    protected $fillable = [
        'nama_jenisaset'
    ];

    public function barangs() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(Barang::class);
    }
}
