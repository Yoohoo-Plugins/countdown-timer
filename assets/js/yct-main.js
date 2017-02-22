jQuery(document).ready(function($) {

  $("#yct-timer")
  .countdown("" + yct_timer_value.date, function(event) {
    $(this).text(
      event.strftime('%D days %H:%M:%S')
    );
  });

});
	