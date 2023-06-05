<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Image;
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
        $images = Image::where('event_id', $event->id)->get();
        return view('events.show', [
            "title" => "Detail Event",
            "event" => $event,
            "images" => $images
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
        if ($request->hasFile('cover')) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $validationData = $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'location' => 'required',
                'date' => 'required',
                'time' => 'required',
            ]);

            $validationData['cover'] = $imageName;
            $validationData['slug'] = SlugService::createSlug(Event::class, 'slug', $request->title);

            $event = Event::create($validationData);

            $event->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['event_id'] = $event->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }
        return redirect('/admin/events');
    }

    public function editAdmin(Event $event)
    {
        $images = Image::where('event_id', $event->id)->get();

        return view('admin.events.edit', [
            "title" => "Edit Event",
            "event" => $event,
            "images" => $images
        ]);
    }

    public function updateAdmin(Request $request, Event $event)
    {
        $validationData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            if ($event->cover != "default.jpg") {
                unlink(public_path('cover/' . $event->cover));
            }

            $validationData['cover'] = $imageName;
        }

        $validationData['slug'] = SlugService::createSlug(Event::class, 'slug', $request->title);

        $event->update($validationData);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['event_id'] = $event->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect('/admin/events');
    }

    public function destroyAdmin(Event $event)
    {
        $events = Event::findOrFail($event->id);

        if ($events->cover != "default.jpg") {
            unlink(public_path('cover/' . $events->cover));
        }

        $images = Image::where('event_id', $event->id)->get();
        foreach ($images as $image) {
            if ($image->image != "default.jpg") {
                unlink(public_path('images/' . $image->image));
                $image->delete();
            }
        }

        $events->delete();
        return back();
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function destroyImage(Image $image)
    {
        $images = Image::findOrFail($image->id);

        if ($images->image != "default.jpg") {
            unlink(public_path('images/' . $images->image));
        }

        $images->delete();
        return back();
    }

    public function destroyCover(Event $event)
    {
        $events = Event::findOrFail($event->id);

        if ($events->cover != "default.jpg") {
            unlink(public_path('cover/' . $events->cover));
        }

        return back();
    }
}
