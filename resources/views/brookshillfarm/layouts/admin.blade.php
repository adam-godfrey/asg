<!DOCTYPE html>
<html lang="en">
	@include('partials.admin.head')
	<body>
	  	<div id="app" class="container-scroller">
	  		@include('partials.admin.navbar')
	  		<div class="container-fluid page-body-wrapper">
		  		@include('partials.admin.sidebar')
		  		<div class="main-panel">        
			  		@yield('content')
			  		@include('partials.admin.footer')
			  	</div>
			</div>
		</div>
		@include('partials.admin.scripts')
  	</body>
</html>