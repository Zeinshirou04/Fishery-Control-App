<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvironmentData extends Model
{
    use HasFactory;

    protected $table = 'environmental_data';

    protected $fillable = [
        'water_ph',
        'water_temp',
        'water_humid',
        'device_id'
    ];

    public function devices() {
        return $this->belongsTo('devices', 'device_id');
    }
}
