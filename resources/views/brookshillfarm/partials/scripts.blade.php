<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/dateTimePicker.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/jquery.daterangepicker.js') }}"></script>
<script>

$(function() {
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		if (!$(this).next().hasClass('show')) {
			$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		}
		var $subMenu = $(this).next(".dropdown-menu");
		$subMenu.toggleClass('show');


		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
			$('.dropdown-submenu .show').removeClass("show");
		});

		return false;
	});

	   //masonry js
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  $('#show-next-month').calendar(
  {
    num_next_month: 2,
    num_prev_month: 0,
    unavailable: ['*-*-9', '*-*-10']
  });

  $('#daterange').dateRangePicker({
  	format: 'dddd MMM Do, YYYY',
  	startDate: new Date(),
  	autoClose: true
	// beforeShowDay: function(t)
	// {
	// 	var valid = !(t.getDay() == 0 || t.getDay() == 6);  //disable saturday and sunday
	// 	var _class = '';
	// 	var _tooltip = valid ? '' : 'sold out';
	// 	return [valid,_class,_tooltip];
	// }
  });
});

</script>


