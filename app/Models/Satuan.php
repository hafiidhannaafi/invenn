<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
   
    use HasFactory;
    protected $table = "satuans";
    protected $fillable = [
        'nama_satuan'
    ];

    public function barangs() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(Barang::class);
    }
}
