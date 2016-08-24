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
