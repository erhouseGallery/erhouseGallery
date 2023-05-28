<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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

    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:events|max:255',
            'slug' => 'required|unique:events',
            'image' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        Event::create($validatedData);
        return redirect('/admin/events');
    }

    public function editAdmin(Event $event)
    {
        return view('admin.events.edit', [
            "title" => "Edit Event",
            "event" => $event
        ]);
    }

    public function updateAdmin(Request $request, Event $event)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
        ];

        if ($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }

        $validatedData = $request->validate($rules);

        Event::where('id', $event->id)
            ->update($validatedData);

        return redirect('/admin/events');
    }

    public function destroyAdmin(Event $event)
    {
        $event->delete();
        return redirect('/admin/events');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
