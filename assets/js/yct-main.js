jQuery(document).ready(function($) {

	/**i
	*if yct_timer_value.date default to year end or throw an error saying 'no date has been declared'. Maybe this should be done in the shortcode
	*array year end must be loaded dynamically and not hardcoded. This can be done at a later stage.
	*
	* Have a look @ how time is done. I defaulted to midnight 00:00:00
	* We can include more shortcode options such as UTC time etc.
	*
	*/


	var yct_format = '';

	switch(yct_timer_value.format){
		case 'full':
			yct_format = '%Y years %-m months %-w weeks %-d days %H hours %M minutes %S seconds';
			break;
		case 'time':
			yct_format = '%H hours %M minutes %S seconds';
			break;
		case 'days_only':
			yct_format = '%D days';
			break;
		default:
			yct_format = '%Y years and %-d days';

	}

  $("#yct-timer").countdown(yct_timer_value.date + ' ' + yct_timer_value.time, function(event) {
    $(this).text(
      event.strftime(yct_format)
    );
  });

});
	