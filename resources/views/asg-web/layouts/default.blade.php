<!DOCTYPE html>
<html lang="en">
	@include('asg-web.partials.head')
	<body>
  	<!-- ======= Mobile nav toggle button ======= -->
	  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

	  <!-- ======= Header ======= -->
	  <header id="header">
	    <div class="d-flex flex-column">

	      <div class="profile">
	        <img src="{{ asset('images/asg/asg-web-logo.png') }}" alt="ASG Web Development logo" class="img-fluid">
	        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
	        <div class="social-links mt-3 text-center">
	          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
	          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
	          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
	          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
	          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
	        </div>
	      </div>
	      @include('asg-web.partials.navbar')
	    </div>
	  </header><!-- End Header -->
	  <div id="app">
		  	@yield('content')
		</div>
		@include('asg-web.partials.footer')

	  @include('asg-web.partials.scripts')
  </body>
</html>