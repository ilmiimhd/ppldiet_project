<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProgram extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_selected_schedules';

    protected $fillable = [
        'user_id',
        'diet_schedule_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'is_active',
    ];

    protected $casts = [
        'tanggal_mulai' => 'datetime',
        'tanggal_selesai' => 'datetime',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // diet schedule
    public function dietSchedule()
    {
        return $this->belongsTo(DietSchedule::class);
    }

    // user profile
    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class);
    }
}
