<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$events = CalendarEvent::limit(6)->orderBy('event_date', 'asc')->get();

    	return view("index", compact("events"));
    }
}
