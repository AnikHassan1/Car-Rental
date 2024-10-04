<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentals extends Model
{
    protected $guarded = ["id"];
     // Rental belongs to one car
     public function car() {
        return $this->belongsTo(Car::class);
    }

    // Rental belongs to one user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
