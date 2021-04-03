@extends('layouts.frontend.frontend_layout')
@section('title', 'About')
@section('content')
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="{{asset('/')}}calendar/jquery.calendar.js"></script>
		<link rel="stylesheet" href="{{asset('/')}}calendar/jquery.calendar.css" />
		<section style="width: 400px; margin-left: 10px">
			<input type="text" id="inputed_date" name="" style="width: 100%;">
			<br>
			<br>
			<div id="pnlEventCalendar" style="width:100%;"></div>
			<script>
				$(function () {
					$('#pnlEventCalendar').calendar({months: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
						days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']});
				});
			</script>
		</section>

			
@endsection




