<?php

namespace aharen\Calendar;

use Carbon\Carbon;

class Day extends Carbon
{

    public $events = [];

    public function __construct($time = null, $tz = null)
    {
        parent::__construct($time, $tz);
    }

    public function events()
    {
        return $this->events;
    }

    public function addAllDay($text)
    {
        $this->events['all_day'][] = $text;
        return $this;
    }

    public function addEvent($when, $text)
    {
        $this->events[$when][] = $text;
        return $this;

    }

    public function initEvents($all_day_only = true)
    {
        $this->events['all_day'] = null;

        if ($all_day_only === true) {
            $time_start   = new Day('00:00');
            $time_end_obj = clone $time_start;
            $time_end     = $time_end_obj->addDay()->subMinutes(30);

            for ($time = $time_start; $time < $time_end; $time->addMinutes(30)) {
                $this->events[$time->format('H:i')] = null;
            }
        }

        return $this;
    }
}
