<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function __invoke()
    {
        return view('events');
    }
}
