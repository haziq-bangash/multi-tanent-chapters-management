<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'title',
        'template_url'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
