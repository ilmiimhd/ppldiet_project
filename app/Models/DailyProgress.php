<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyProgress extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'day_id',
        'diet_schedule_id',
        'sarapan',
        'snack_pagi',
        'makan_siang',
        'snack_sore',
        'makan_malam',

    ];
}
