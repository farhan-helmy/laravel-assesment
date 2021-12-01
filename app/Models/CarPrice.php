<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    use HasFactory;
    protected $table = 'car_price';

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
