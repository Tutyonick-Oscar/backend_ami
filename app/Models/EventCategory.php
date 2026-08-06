<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class EventCategory extends Model
{
    protected $fillable = ['name'];

    public function events()
    {
        return $this->hasMany(Event::class, 'event_category_id');
    }
}
