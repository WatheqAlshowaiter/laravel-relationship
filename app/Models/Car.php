<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function buyer()
    {
        return $this->morphTo();
    }

    public function drivers()
    {
        return $this->belongsToMany(Driver::class);
    }

    //morphic relationship

    public function valets()
    {
        return $this->morphedByMany(Valet::class, 'driver');
    }

    public function owners()
    {
        return $this->morphedByMany(Owner::class, 'driver');
    }
}
