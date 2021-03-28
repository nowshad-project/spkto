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
							<a href="{{asset('/')}}user/create-course">Schedule</a>	
						</span>
					</li>
                </ul>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="as_profiel_section">
			<h2 class="f_b">Schedule</h2>
			


<!-- shedule section -->
   <div class="as_shedule_section">
       <div class="container">
            <div class="title_course_shedule clearfix">

                <div class="pull-left">
                    <h2>Advanced course for english grammer</h2>
                </div>
                <div class="pull-right">
                    <span class="number_day_she">14 Days</span><span class="session_she">12 sessions to</span>
                    <a href="#" class="finish_course ">Finish Course</a>
                </div>

            </div>
        </div>
   </div><!-- end shedule section -->

   <div class="container">
    <div class="customize_shedule_btn  table-responsive">
        <table class="table" style="min-width:478px">
              <tbody>
                <tr>
                 <td style="width: 18%; padding-left:0">
                     <div class="profile_section">
                            <a href="#">
                            <div class="profile_images">

                            </div>
                            </a>
                        
                    </div>
                 </td>
                 <td class="m-l-15">
                   <div class="inline-block m-r-15 f-s f-s ">
                        <img src="http://127.0.0.1:8000/images/green-star.png" alt="First Levels" class="result_icon_images_width_15">
                    </div>
                     <div class="inline-block m-r-15 f-s ">
                         10
                     </div>
                     <div class="inline-block m-r-15 f-s f-s padding_left_12">                                                                                                                        <img src="http://127.0.0.1:8000/images/flags/AL.png" alt="secend label" class="result_icon_images_width_15">

                     </div>
                 </td>

             </tr>


        </tbody></table>
    </div>
   </div>

   <div class="shedule_result_section"><!-- as_shedule_section-->
        <div class="container">
            <div class="row_section clearfix">
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item old_date_sehedule">
                        <h3>Tense</h3>
                        <span>19 July 2020</span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item old_date_sehedule">
                        <h3>Tense</h3>
                        <span>19 July 2020</span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item old_date_sehedule">
                        <h3>Tense</h3>
                        <span>19 July 2020</span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item">
                        <h3>Tense</h3>
                        <span>19 July 2020 </span><span class="edite_calender" data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item">
                        <h3>Tense</h3>
                        <span>19 July 2020 </span><span class="edite_calender" data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item">
                        <h3>Tense</h3>
                        <span>19 July 2020 </span><span class="edite_calender" data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    </div>
                </div><!-- end as colom section -->
                <div class="col-md-5"><!-- ass colom section -->
                    <div class="shedule_item">
                        <h3>Tense</h3>
                        <span>19 July 2020 </span><span class="edite_calender" data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    </div>
                </div><!-- end as colom section -->
            </div>
        </div>
   </div><!-- end as_shedule_section-->


   <!-- Modal -->
   <div class="modal fade pim_speaker" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="mobile_custome_calender model_pop_box_content modal-content" style="width: 376px; padding-left:0; padding-right:0;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <img src="images/delete.png" alt="delete">
        </button>

        <a href="#" class="update_btncal button  enable-ripple">Update</a>

        <div class="modal-body" style="padding-left: 0; padding-right:0; padding-bottom:0; padding-to
        0">
          <div class="day_select_calender" style="padding-bottom: 0; margin-bottom:0;">
              <div class="container" >
                  <div>
                      @error('selectedDates')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                      <input type="text" style="display: none" id="selectedValues" value="" name="selectedDates"  class="booking_count date-values" readonly/>
                      <input type="text" style="display: none" value="7/26/2020, 7/27/2020" name="updateselectedDates"  class="updateValues" readonly/>
                      <div id="parent">
                            <div class="card-header month-selected col-sm" id="monthAndYear">
                              </div>
                          <div class="custome_day_year_month" style="padding-left:12px">
                            <select class=" col-xs-6" name="month" id="month" onchange="change()"></select>
                            <select class="col-xs-6" name="year" id="year" onchange="change()"></select>
                          </div>
                          <div class="">
                                <table id="calendar" style="border-collapse: initial">
                              <thead>
                                  <tr>
                                      <th>Su</th>
                                      <th>Mo</th>
                                      <th>Tu</th>
                                      <th>We</th>
                                      <th>Th</th>
                                      <th>Fr</th>
                                      <th>Sa</th>
                                  </tr>
                              </thead>
                              <tbody id="calendarBody"></tbody>
                          </table>
                          </div>
                      </div>
                  </div>
                 </div>

              </div>


        </div>

      </div>
    </div>
  </div>
<center class="container" style="margin-bottom: 316px"><p>You don't have any Schedule</p></center>

   <script src="{{ asset('/') }}/js/jquery-3.5.1.slim.min.js"></script>
  <script src="{{ asset('/') }}/js/booking-calender.js" type="text/javascript"></script>















		</div>
	</div>
</div>    
@endsection
