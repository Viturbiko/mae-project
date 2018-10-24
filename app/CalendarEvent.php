<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $table = 'calendarEvents';

    protected $fillable = ['description', 'image', 'image_text', 'event_date'];
}
