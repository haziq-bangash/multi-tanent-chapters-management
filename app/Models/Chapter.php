<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\SubChapter;
use App\Models\TeamMember;
use App\Models\University;
use App\Models\StudentChapter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'university_id',
        'description',
        'logo',
        'president_id',
        'vice_president_id',
        'secretary_id',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function president()
    {
        return $this->belongsTo(User::class, 'president_id');
    }

    public function vicePresident()
    {
        return $this->belongsTo(User::class, 'vice_president_id');
    }

    public function secretary()
    {
        return $this->belongsTo(User::class, 'secratery_id');
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function subChapters()
    {
        return $this->hasMany(SubChapter::class);
    }

    public function studentChapters()
    {
        return $this->hasMany(StudentChapter::class);
    }

    public function teammembers()
    {
        return $this->hasMany(TeamMember::class);
    }
    
}
