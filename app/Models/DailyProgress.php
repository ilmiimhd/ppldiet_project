<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyProgress extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'diet_schedule_id',
        'user_id',
        'sarapan',
        'snack_pagi',
        'makan_siang',
        'snack_sore',
        'makan_malam',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dietSchedule()
    {
        return $this->belongsTo(DietSchedule::class);
    }
}