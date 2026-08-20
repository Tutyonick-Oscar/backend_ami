<?php

namespace App\Http\Controllers;
use App\Models\Event;

class HomeController extends Controller
{
    public function __invoke()

    {
        $activeEvent = Event::where('is_active',true)->first();
        $events = Event::where('is_active', false)
                            ->with('category')
                            ->orderBy('event_date', 'desc')
                            ->limit(3)->get();
        return view('index',[
            'activeEvent'=>$activeEvent,
            'events'=> $events,
        ]);
    }
}
