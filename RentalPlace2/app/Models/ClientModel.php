<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $fillable = [
        'name',
        'phone number',
       
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}