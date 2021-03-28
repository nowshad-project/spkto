@extends('layouts.frontend.frontend_layout')
@section('title', 'Notification')
@section('content')
<!--custome css about info-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/user/user_info_from.css">
<!--phone number country code-->
    <link rel="stylesheet" href="{{ asset('/') }}js/phone_number_country/css/intlTelInput.css">
<!--custome css about info end-->
<div class="profile_section_deshboard">

	<div class="couse_break_cume">
		<div class="break_cum">
			<div class="container">
				<ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<span itemprop="name">
							<a href="{{asset('/')}}"><i class="fa fa-home"></i> </a>	
							<span> > </span>
							<a href="{{asset('/')}}user/notification">Notification</a>	
						</span>
					</li>
                </ul>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="as_profiel_section">
			<h2 class="f_b">Notification</h2>
			<div>
				<a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>

                <a class="dropdown-item notification_main_item"  href="#">
	                <div style="color: #96c347;">
	                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
	                </div>
                </a>
			</div>
		</div>
	</div>
</div>    
@endsection
