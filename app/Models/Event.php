<?php

namespace App\Models;

use App\Models\Media;
use App\Models\Chapter;
use App\Models\EventLike;
use App\Models\SubChapter;
use App\Models\Certificate;
use App\Models\EventReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'chapter_id',
        'sub_chapter_id',
        'name',
        'slug',
        'description',
        'poster',
        'venue',
        'start_at',
        'end_at',
        'is_published',
        'published_at',
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function subchapter()
    {
        return $this->belongsTo(SubChapter::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    public function eventlikes()
    {
        return $this->hasMany(EventLike::class);
    }

    public function eventreviews()
    {
        return $this->hasMany(EventReview::class);
    }
}
