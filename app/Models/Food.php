<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_makanan',
        'kalori',
        'protein',
        'lemak',
        'karbohidrat',
        'berat',
        'food_category_id',
    ];

    public function foodCategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}

