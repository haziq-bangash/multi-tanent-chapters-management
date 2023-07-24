<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Chapter;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'chapter_id',
        'description',
        'logo',
        'lead_id',
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function lead()
    {
        return $this->belongsTo(User::class, 'lead_id');
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function teammembers()
    {
        return $this->hasMany(TeamMember ::class);
    }
}
