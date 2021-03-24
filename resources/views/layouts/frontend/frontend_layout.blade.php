<!DOCTYPE html>
<html>
<head>
	<title>Speak2 learn - @yield('title')</title>
	@include('layouts.frontend.head')
</head>
<body>
	<!--navbar-->
	@include('layouts.frontend.navbar')
	<!--navbar end-->

	<!--alart msg-->
	<div class="container">
		@if(session()->exists('danger'))
		<div class="alert" style=" background-color: #f44336">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  <strong>Danger!</strong> {{ session()->get('danger') }}{{ session()->forget('danger') }}
		</div>
		@endif
		@if(session()->exists('success'))
		<div class="alert" style=" background-color: #4CAF50">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  <strong>Success! </strong> {{ session()->get('success') }}{{ session()->forget('success') }}
		</div>
		@endif
		@if(session()->exists('info'))
		<div class="alert" style=" background-color: #2196F3">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  <strong>Info!</strong> {{ session()->get('info') }}{{ session()->forget('info') }}
		</div>
		@endif
		@if(session()->exists('warning'))
		<div class="alert" style=" background-color: #ff9800">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  <strong>Warning!</strong> {{ session()->get('warning') }}{{ session()->forget('warning') }}
		</div>
		@endif
	</div>

	<!--main content-->
	@yield('content')
	<!--maincontent end-->

	<!--footer-->
	@include('layouts.frontend.footer')
	<!--footer end-->
	<!--js-->
	@include('layouts.frontend.js')
	<!--js end-->
</body>
</html>
