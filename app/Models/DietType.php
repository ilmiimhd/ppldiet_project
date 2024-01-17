<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DietType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'deskripsi',
    ];

    // user profile
    public function userProfiles()
    {
        return $this->hasMany(UserProfile::class);
    }

    // diet schedule
    public function dietSchedules()
    {
        return $this->hasMany(DietSchedule::class);
    }
}
