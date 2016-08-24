# Calendar
Calendar generator with optional events for Laravel

### Installation

`composer require aharen/calendar`

### Configuration

Add `aharen\Clendar\CalendarServiceProvider::class` to the end of `providers` in `config/app.php`

### Usage

	$calendar = new Calendar();
	$calendar->month('2016-08')
	    ->generate()
	    ->withEvents(false);

The method `withEvents()` when empty or set true will return events with 30 minute interval time array. 

#### Adding Events to Calendar

There are two methods for adding Events to the calendar.

1. `addEvent($time, $event)`

`$time` - formatted as `H:i` or accepts the string `all_day` eg: `$calendar->addEvent('04:30', 'Early morning walk');`
`$event` - accepts a string as your event detail

`eg: $calendar->days['05-08']->addEvent('08:00', 'that cool project goes live');

2. `addAllDay($event)`

`$event` - accepts a string as your event detail

`eg: $calendar->days['05-08']->addAllDay('Sleep all day');`