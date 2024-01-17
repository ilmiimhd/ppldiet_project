<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'diet_type_id',
        'tinggi_badan',
        'berat_badan',
        'umur',
        'lemak_tubuh',
        'target_berat_badan',
        'aktivitas',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // diet type
    public function dietType()
    {
        return $this->belongsTo(DietType::class);
    }
}
