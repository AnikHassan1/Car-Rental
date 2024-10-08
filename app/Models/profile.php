<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
   protected $fillable=['number','address','user_id'];

   public function User() {
    return $this->belongsTo(User::class);
} 
}
