<?php

namespace App\Models;

use App\Models\Chapter;
use App\Models\SubChapter;
use App\Models\UniversityCard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'address',
        'primary_color',
        'secondary_color',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function subChapters()
    {
        return $this->hasManyThrough(SubChapter::class, Chapter::class);
    }

    public function universityCards()
    {
        return $this->hasMany(UniversityCard::class);
    }
}
