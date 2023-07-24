<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'university_id',
        'card',
        'is_verified',
        'verified_by',
        'verified_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
