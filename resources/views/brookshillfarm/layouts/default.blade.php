<!DOCTYPE html>
<html lang="en">
	@include('brookshillfarm.partials.head')

	<body>
	  	<h1 class="site-heading text-center text-white d-none d-lg-block">
			<img src="{{ asset('images/brookshill/logo.png') }}" alt="Brookshill Farm logo">
	  	</h1>
	  	@include('brookshillfarm.partials.navbar')
	  	<div id="app">
		  	@yield('content')
		</div>
		@include('brookshillfarm.partials.footer')

	  	@include('brookshillfarm.partials.scripts')
  </body>
</html>