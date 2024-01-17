<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DietSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'day_id',
        'menu_id',
        'diet_type_id',
        'user_id',
        'sarapan',
        'snack_pagi',
        'makan_siang',
        'snack_sore',
        'makan_malam',

    ];

    // day
    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    // menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    // diet type
    public function dietType()
    {
        return $this->belongsTo(DietType::class);
    }

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // user schedule
    public function userProgram()
    {
        return $this->belongsTo(UserProgram::class);
    }
}
