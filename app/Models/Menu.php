<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'diet_type_id',
        'day_id',
        'jenis_menu',
        'deskripsi'
    ];

    // diet type
    public function dietType()
    {
        return $this->belongsTo(DietType::class);
    }

    // day
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
