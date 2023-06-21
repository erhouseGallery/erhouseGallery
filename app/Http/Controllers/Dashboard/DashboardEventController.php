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
            'events' => Event::where('user_id', auth()->user()->id)->get()
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
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('image-events', $imageName );

            $validationData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required|max:1000',
                'location' => 'required|max:255',
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
                $file->storeAs('image-events', $imageName );
                ImageEvent::create($request->all());
            }
        }
        return redirect('/admin/events')->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(Event $event)
    {

        $event = Event::find($event->id);

        if($event->cover != null ) {
            Storage::delete('image-events/' . $event->cover);
           }

           //images

       $currentImages = ImageEvent::where('event_id', $event->id)->get();

       if($currentImages != null) {
        foreach ($currentImages as $currentImage) {
            Storage::delete('image-events/'. $currentImage->image);
        }

        ImageEvent::where('event_id', $event->id)->delete();
    }

    Event::destroy($event->id);
    return redirect('/admin/events')->with('success', 'data berhasil dihapus');

    }
}
