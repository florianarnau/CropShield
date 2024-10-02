<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherStation extends Model
{
    use HasFactory;

    protected $table = 'weather_station';

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'altitude',
        'city',
        'department',
        'isActive',
        'recorder_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
