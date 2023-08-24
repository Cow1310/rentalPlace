<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $table ='places';
    protected $fillable=['address', 'price','phone' ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

