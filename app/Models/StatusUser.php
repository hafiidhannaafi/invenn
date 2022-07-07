<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
   use HasFactory;
    protected $table = "status_users";
    protected $fillable = [
        'status_users'
    ];

   public function User() 
    {

        return $this->hasMany(User::class);
    }
}
