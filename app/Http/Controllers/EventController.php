<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('admin.event.addEvent');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'title'=>'required',
            'days'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'speaker'=>'required',
            'detail'=>'required',
            'date'=>'required',
            'image'=>'required|image'
        ]);

        

        $validatedData['image'] = $request->file('image')->store('eventImage');
       
        
        Event::create($validatedData);

        
        return redirect('/event/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $events = DB::table('events')->paginate(5);
        return view('informasi',["events"=>$events]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
