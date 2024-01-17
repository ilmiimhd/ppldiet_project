<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DietaryPreferences extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan',
        'aktivitas',
        'food_category_id',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // food category
    public function foodCategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}
