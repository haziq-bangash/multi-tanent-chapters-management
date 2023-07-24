<?php

namespace App\Models;

use App\Models\User;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chapter_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
