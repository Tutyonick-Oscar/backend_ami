<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventCategory;

class EventsController extends Controller
{
    public function __invoke(Request $request)

    {
        $activeEvent = Event::where('is_active', true)->first();
        
        $query = Event::where('is_active', false);
        
        if ($request->has('category')) {
            $category = EventCategory::where('name', $request->category)->first();
            $query->where('event_category_id', $category->id);
        }
        
        $events = $query->with('category')->orderBy('event_date', 'desc')->paginate(3);
        $categories = EventCategory::all();
        
        return view('events',
            [
                'activeEvent' => $activeEvent,
                'events' =>$events,
                'categories' => $categories,
            ]
        );
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $recentsEvents = Event::where('is_active', false)
                                ->where('id', '!=', $event->id)
                                ->orderBy('event_date', 'desc')->limit(3)->get();
        return view('event_details', [
            'event' => $event,
            'recentsEvents' => $recentsEvents,
        ]);
    }
   
}
