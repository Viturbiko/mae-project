<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$events = CalendarEvent::limit(5)->orderBy('event_date', 'asc')->get();

    	return view("index", compact("events"));
    }

    public function about()
    {
    	return view("about_main");
    }

    public function downloads()
    {
    	return view("downloads_main");
    }

    public function calendar()
    {
        return view("calendar_main");
    }
}
