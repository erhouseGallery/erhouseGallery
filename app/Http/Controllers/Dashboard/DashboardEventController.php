<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Event;
use App\Models\ImageEvent;
use Illuminate\Support\Facades\Storage;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardEventController extends Controller
{

    public function index()
    {
        return view('admin.events.index', [
            'title' => "Dashboard Event",
            'events' => Event::where('user_id', auth()->user()->id)->paginate(8)

        ]);
    }


    public function create()
    {
        return view('admin.events.create', [
            'title' => 'Buat Event',
        ]);
    }


    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('public/image-events', $imageName);


            $validationData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required|max:1000',
                'location' => 'required|max:255',
                'date_event' => 'required|max:255',
                'time' => 'required|max:255',
            ]);

            $validationData['cover'] = $imageName;
            $validationData['user_id'] = auth()->user()->id;

            $event = Event::create($validationData);
            $event->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['event_id'] = $event->id;
                $request['image'] = $imageName;
                $file->storeAs('public/image-events', $imageName);

                ImageEvent::create($request->all());
            }
        }
        return redirect('/admin/events')->with('success', 'data berhasil ditambahkan');
    }


    public function show(Event $event)
    {

        if ($event->user->id !== auth()->user()->id) {
            abort(403);
        }

        $image_events = ImageEvent::where('event_id', $event->id)->get();

        return view('admin.events.show', [

            'event' => $event,
            'title' => 'Admin Detail Event',
            'image_events' => $image_events,
        ]);
    }



    public function edit(Event $event)
    {

        return view('admin.events.edit', [

            'title' => 'Edit Event',
            'event' => $event,
        ]);
    }


    public function update(Request $request, Event $event)
    {

        $rules = [
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'location' => 'required|max:255',
            'date_event' => 'required|max:255',
            'time' => 'required|max:255',
        ];


        if ($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }
        $validateData = $request->validate($rules);

        // cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('public/image-events', $imageName);
            $validateData['cover'] = $imageName;

            if ($event->cover != null) {
                Storage::delete('public/image-events/' . $event->cover);
            }

            $validateData['cover'] = $imageName;
        }

        $validateData['user_id'] = auth()->user()->id;
        Event::where('id', $event->id)
            ->update($validateData);


        //  images
        if ($request->hasFile("images")) {

            $files = $request->file("images");

            $currentImages = ImageEvent::where('event_id', $event->id)->get();

            if ($currentImages != null) {
                foreach ($currentImages as $currentImage) {
                    Storage::delete('public/image-events/' . $currentImage->image);
                }

                ImageEvent::where('event_id', $event->id)->delete();
            }

            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['event_id'] = $event->id;
                $request['image'] = $imageName;
                $file->storeAs('public/image-events', $imageName);
                ImageEvent::create($request->all());
            }
        }

        return redirect('/admin/events')->with('success', 'data berhasil diupdate');
    }



    public function destroy(Event $event)
    {

        $event = Event::find($event->id);

        if ($event->cover != null) {
            Storage::delete('public/image-events/' . $event->cover);
        }

        //images

        $currentImages = ImageEvent::where('event_id', $event->id)->get();

        if ($currentImages != null) {
            foreach ($currentImages as $currentImage) {
                Storage::delete('public/image-events/' . $currentImage->image);
            }

            ImageEvent::where('event_id', $event->id)->delete();
        }

        Event::destroy($event->id);
        return redirect('/admin/events')->with('success', 'data berhasil dihapus');
    }
}
