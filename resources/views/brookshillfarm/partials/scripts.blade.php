{{--<script defer
  src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY') }}&callback=initMap">
</script>
<script>
  function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var grayStyles = [
      {
        featureType: "all",
        stylers: [
          { saturation: -90 },
          { lightness: 50 }
        ]
      },
      {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -31.197, lng: 150.744},
      zoom: 9,
      styles: grayStyles,
      scrollwheel:  false
    });
  }
  
</script>--}}
<script src="{{ asset('js/app.js') }}"></script>

@stack('scripts')

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
});

</script>