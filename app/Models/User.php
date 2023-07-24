<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Chapter;
use App\Models\EventLike;
use App\Models\SubChapter;
use App\Models\University;
use App\Models\StudentChapter;
use App\Models\StudentSubChapter;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function chapter()
    {
        return $this->hasOne(Chapter::class);
    }

    public function university()
    {
        return $this->hasOneThrough(University::class, Chapter::class);
    }

    public function subChapter()
    {
        return $this->hasOne(SubChapter::class);
    }

    public function universityCard()
    {
        return $this->hasOne(UniversityCard::class);
    }

    public function studentChapter()
    {
        return $this->hasOne(StudentChapter::class);
    }

    public function studentSubChapter()
    {
        return $this->hasOne(StudentSubChapter::class);
    }

    public function eventlike()
    {
        return $this->hasMany(EventLike::class);
    }

    public function eventreview()
    {
        return $this->hasMany(EventReview::class);
    }
}
