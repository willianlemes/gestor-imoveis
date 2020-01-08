<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class EventController extends Controller
{
    public function loadEvents()
    {
      $events = Agenda::all();
      return response()->json($events);
    }
}
