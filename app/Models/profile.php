<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
   protected $fillable=['number','address','user_id'];

   public function profile() {
    return $this->hasOne(Profile::class); // Assuming one user has one profile
    }

    public function user() {
        return $this->belongsTo(User::class); // Assuming one user has one profile
        }
}
