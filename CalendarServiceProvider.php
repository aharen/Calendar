<?php

namespace aharen\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('calendar', 'aharen\Calendar\Calendar');
    }
}
