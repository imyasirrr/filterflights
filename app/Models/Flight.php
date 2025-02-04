<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_name', 'airline', 'starting_point', 'destination', 
        'departure_time', 'arrival_time', 'duration', 'price', 
        'seats_available', 'class', 'timestamps'
    ];
    // protected $guarded = [];
}
