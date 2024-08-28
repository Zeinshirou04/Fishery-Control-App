<?php

namespace App\Models;

use App\Models\User\Users;
use Database\Factories\DevicesFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devices extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'automated_feed',
        'servo_control',
        'latitude',
        'longitude',
        'uid'
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'boolean',
        ];
    }

    protected static function newFactory(): Factory
    {
        return DevicesFactory::new();
    }

    public function users() {
        return $this->belongsTo(Users::class, 'uid');
    }

    public function environmentData() {
        return $this->hasMany('environmental_data', 'device_id');
    }
}
