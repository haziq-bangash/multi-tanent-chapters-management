<?php

namespace App\Models;

use App\Models\SubChapter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chapter_id',
        'sub_chapter_id',
        'role'
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function subchapter()
    {
        return $this->belongsTo(SubChapter::class);
    }
}
