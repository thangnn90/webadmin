<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventsController extends Controller
{
    public function index()
    {
        return view('event.index');
    }

    public function findAll()
    {
        $events = Events::get(['id','title','start','end','color']);
        return Response()->json($events);
    }
}
