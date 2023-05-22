<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('events.index', [
            "title" => "Event",
            "events" => $events
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            "title" => "Detail Event",
            "event" => $event
        ]);
    }

    public function indexAdmin()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', [
            "title" => "Table Event",
            "events" => $events
        ]);
    }

    public function createAdmin()
    {
        return view('admin.events.create', [
            "title" => "Buat Event"
        ]);
    }

    public function storeAdmin()
    {
        if (request()->file('image')) {
            $image = request()->file('image')->store('images/events');
        } else {
            $image = null;
        }

        Event::create([
            "title" => request()->title,
            "image" => $image,
            "description" => request()->description,
            "location" => request()->location,
            "date" => request()->date,
            "time" => request()->time,
        ]);
        return redirect('/admin/events');
    }

    public function editAdmin(Event $event)
    {
        return view('admin.events.edit', [
            "title" => "Edit Event",
            "event" => $event
        ]);
    }

    public function updateAdmin(Event $event)
    {
        if (request()->file('image')) {
            $image = request()->file('image')->store('images/events');
        } else {
            $image = null;
        }

        $event->update([
            "title" => request()->title,
            "image" => $image,
            "description" => request()->description,
            "location" => request()->location,
            "date" => request()->date,
            "time" => request()->time,
        ]);

        return redirect('/admin/events');
    }

    public function destroyAdmin(Event $event)
    {
        $event->delete();
        return redirect('/admin/events');
    }
}
