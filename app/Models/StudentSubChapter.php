<?php

namespace App\Models;

use App\Models\User;
use App\Models\SubChapter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentSubChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sub_chapter_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subChapter()
    {
        return $this->belongsTo(SubChapter::class);
    }
}
