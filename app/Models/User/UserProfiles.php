<?php

namespace App\Models\User;

use Database\Factories\UserProfilesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'first_name',
        'last_name',
        'date_of_birth',
        'phone'
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
        ];
    }

    protected static function newFactory(): Factory
    {
        return UserProfilesFactory::new();
    }

    public function users() {
        return $this->belongsTo(Users::class, 'uid');
    }
}
