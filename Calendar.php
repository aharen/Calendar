<?php

namespace aharen\Calendar;

class Calendar
{

    public $days;

    public $start;

    public $end;

    public function month($month_year)
    {
        $this->start = new Day($month_year);
        $end_obj     = clone $this->start;
        $this->end   = $end_obj->endOfMonth();
        return $this;
    }

    public function generate()
    {
        for ($day = $this->start; $day < $this->end; $day->addDays(1)) {
            $date              = $day->format('d-m');
            $this->days[$date] = new Day($day);
        }

        $this->days = $this->days;
        return $this;
    }

    public function withEvents($all_day_only = true)
    {
        foreach ($this->days as $day) {
            $day->initEvents($all_day_only);
        }
        return $this;
    }
}
