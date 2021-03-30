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
              <a href="{{asset('/')}}user/schedule-as-speaker">Schedule as speaker</a>  
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="as_profiel_section">
      <div class="tab_section_button">
        <div class="container">
          <div class="as_tab_section">
            <ul class="clearfix">
              <li class="active_tab"><a href="{{asset('/')}}user/schedule-as-speaker">Schedule as speaker</a></li>
              <li><a href="{{asset('/')}}user/schedule-as-student">Schedule as student</a></li>
            </ul>
          </div>
        </div>
      </div>
    
    <!--main boady-->
    
    </div>
  </div>
</div>

@endsection
