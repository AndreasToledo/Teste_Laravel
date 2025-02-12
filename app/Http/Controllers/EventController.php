<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }
    
    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:450',
            'date' => 'required|date'
        ]);

        $event=new Event($validatedData);
        $event->save();

        return redirect()->route('event.index')->with('success', 'Evento criado com sucesso!');
    }
};
