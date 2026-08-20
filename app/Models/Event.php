<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventCategory;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'event_category_id',
        'is_active',
        'event_date',
        'status',
        'user_id',
        'avatar'
    ];

    public function category(){
        return $this->BelongsTo(EventCategory::class, 'event_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function eventSatus()
    {
        /**
         * take the event status and return the corresponding string in french
         */

        switch ($this->status) {
            case 'upcoming':
                return 'À venir';
            case 'ongoing':
                return 'En cours';
            case 'completed':
                return 'Terminé';
            default:
                return 'Non défini';
        }
    }
}
