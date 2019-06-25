<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventForm;
use App\Http\Requests\UpdateEventForm;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $count_event = Event::all();
        $events = Event::paginate(5);
        return view('events.index',compact('events','count_event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event;
        return view('events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventForm $request)
    {
        Event::create([
            'title'=>$request->title,
            'description'=>$request->description
            ]);

        Flashy::message('Évènement crée avec succès !');

        return redirect(route('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show' ,compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventForm $request, Event $event)
    {
        $event->update(['title' => $request->title, 'description' => $request->description]);

        Flashy::info('Évènement modifié avec succès !');

        return redirect(route('events.show',$event));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        Flashy::error('Évènement supprimé avec succès !');


        return redirect(route('event'));
    }
}
