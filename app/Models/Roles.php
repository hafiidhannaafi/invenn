<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = "roles";
    

    public function User() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(User::class);
    }
}
