<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\ImageEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{


    public function index()
    {

        $events = Event::latest()->paginate(12);
        return view('events.index', [
            'title' => 'Event',
            'events' => $events,
        ]);
    }


    public function show(Event $event)
    {

        $image_events = ImageEvent::where('event_id', $event->id)->get();
        return view('events.show', [
            'title' => 'Detail Event',
            'event' => $event,
            'image_events' => $image_events,
        ]);
    }
}
