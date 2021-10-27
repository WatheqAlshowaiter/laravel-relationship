<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valet extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->morphToMany(Car::class, 'driver');
    }
}
