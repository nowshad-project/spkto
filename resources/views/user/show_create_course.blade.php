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
							<a href="{{asset('/')}}user/create-course">Create Course</a>	
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
						<li class="active_tab"><a href="{{asset('/')}}user/create-course">Create course</a></li>
						<li><a href="{{asset('/')}}user/my-course">My course</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- start form field section -->
		<div class="form_fielt">
			<div class="container">
	            <div class="as_form_field">
	                <form id="addListingForm" action="#" method="post" enctype="multipart/form-data">
	                    @csrf
	                    <!-- form -tem -->
	                    <div class="form_item line_hide_form_item">
	                        @error("title")
	                        <p class="text-danger">{{ $message }}</p>
	                        @enderror
	                         <input name="title" type="text" value="" maxlength="50" placeholder="Title*" onkeyup="title_count(this)" />
	                         <span class="title_count count_style" style="display: none;"><span class="t_count_res">0</span>/50</span>
	                    </div>
	                    <!-- form -- item -->

	                    <div class="form_item line_hide_form_item text-center" style="position: relative">
	                    	<!-- form -tem -->
	                        @error("thumbnail")
	                        <p class="text-danger">{{ $message }}</p>
	                        @enderror


	                         <div class="thumbnail thambnail_border_btn">


	                          <input type="text" placeholder="Upload images" id="feture_images_name" value="">
	                          <input type="file" accept="image/*" id="feture_img" name="thumbnail" onchange="loadFile(event)">
	                          <span class='change_btn' >Change images</span>

	                        </div>
	                          <img src="#" id="output"/ style="width:150px; margin-top: 5px">

	                    </div><!-- form -- item -->
	                    <div class="form_item line_hide_form_item"><!-- form -tem -->
	                        @error("videoUrl")
	                        <p class="text-danger">{{ $message }}</p>
	                        @enderror
	                         <input class="add_course_youtube_url" name="videoUrl" value=""  type="text" placeholder="Add video. Just paste Youtube video link">
	                        <div class="show_course_video">

	                        </div>
	                    </div><!-- form -- item -->
	                    <div class="form_item line_hide_form_item"><!-- form -tem -->
	                        @error("description")
	                        <p class="text-danger">{{ $message }}</p>
	                        @enderror
	                         <textarea onkeyup="discription_count(this)" maxlength="200" id="" cols="30" rows="3" name="description" placeholder="Description*"></textarea>
	                         <span class="descrip_count count_style" style="display: none;"><span class="d_count_res">0</span>/200</span>
	                    </div><!-- form -- item -->
	                    <div class="form_item dowupdown_singe_line line_hide_form_item"><!-- form -tem -->
	                        @error("duration")
	                        <p class="text-danger">{{ $message }}</p>
	                        @enderror
	                          <input type="text" name="duration" value="{{ old('duration') }}" placeholder="course duration. e.g. 15 days"/>
	                         <select class="js-example-basic-duration" name="duration" id="duration" style="width: 100%;">
	                            <option></option>
	                            <option value="slksdkfsjdf">sdsdfsdf</option>
	                           @for ($i = 1; $i < 100; $i++)
	                           @if (old("duration") == $i)
	                           <option selected value="{{ $i }}">{{ $i }} days</option>
	                           @endif
	                               <option value="{{ $i }}" >{{ $i }} days</option>
	                           @endfor
	                          </select>
	                        </div><!-- form -- item -->
	                    <h2 class="Topics">
	                        Topics you will be covering on:
	                    </h2>

                    



                    <div class="form_item line_hide_form_item"><!-- form -tem -->
                      <div class="topic_days row">

                     
                          <div class="col-md-6">
                              <div class="form_item line_hide_form_item">
                              <input type="text"  name="" value="">
                                </div>
                            </div>
            

                      </div>

                    </div><!-- form -- item -->
                    <div class="form_item line_hide_form_item"><!-- form -tem -->
                        @error("admissionFee")
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="row">
                            <div class="col-md-6">
                                  <input type="text" class="form-control" value="$" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Admission fee" name="admissionFee" value="" />

                            </div>
                            </div>
                    </div><!-- form -- item -->
                    <div class="switch_box">
                        @error('offerPercentage')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <p>Offer discount on first admission

                        </p>

                        <div class="hourly_reat form_item line_hide_form_item discount_position" style=""><!-- form -tem -->

                            <input type="text" maxlength="2"  placeholder="Discount %" name="offerPercentage" value="" style="max-width:">
                        </div>

                        @error("admission")
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
						<label class="switch" onclick="hourly_red(this)">
                             <input class="switch_status" type="checkbox" name="admission" />
                             <span class="slider round"></span>
                        </label>


                    </div>
                    <div class="switch_box" style="display: none">
                        <p>Do you offer a trial class without booking</p>
                        @error("booking")
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label class="switch" >
                             <input class="switch_status" type="checkbox" name="booking" />
                             <span class="slider round"></span>
                        </label>
                    </div>
                    <div>
                        <p style="font-size: 12px">Please select the dates you're available. You can select 3 months ahead at beast. </p>
                      </div>

                       <!-- multi date user choice celender section -->
                       <div class="day_select_calender">
                           <div style="width: 315px;">
                               <input style="display: none" id="selectedValues" name="dates" value=""  class="date-values updateValues"/>
                               <div id="parent">
                                       <div class="card-header month-selected col-sm" id="monthAndYear">
                                       </div>

                                   <div class="custome_day_year_month">
                                     <select class=" col-xs-6" name="month" id="month" onchange="change()"></select>
                                     <select class="col-xs-6" name="year" id="year" onchange="change()"></select>
                                   </div>
                                   <div class="calender_value">
                                         <table id="calendar">
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
                    <div class="button_section text-center">
                         <button type="submit" class="button enable-ripple">Update</button>

                    </div>
                </form>
            </div>
        </div>

    </div><!-- end form field section -->
    <script src="{{ asset('/') }}/js/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('/') }}/js/multidatespicker.js" type="text/javascript"></script>
    <script>
       document.forms['addListingForm'].elements['duration'].value="";
    </script>









      <!-- upload images query -->
      <script>
          var loadFile = function(event) {
             var zia = event.target.files[0].name;
             $('#feture_images_name').val(zia);
             $('.change_btn').css('display', 'block');
            var reader = new FileReader();

            reader.onload = function(){
              var output = document.getElementById('output');
              output.src = reader.result;

            };


            reader.readAsDataURL(event.target.files[0]);

          };
      </script>
      <!-- end upload images query -->

      <!-- course upload video-->
       <script>
           $('#ArchTechVideo').on('keyup past blur change', function(e) {

            var videoLink   = $(this).val();

            var dataString = 'videoLink='+ videoLink;
                $.ajax
                    ({
                        type: "POST",
                        url: "../../architechAjax/archUploadVideo.php",
                        data: dataString,
                        cache: false,
                        success: function(htdml)
                        {
                        $('#archVideo_view').html(htdml);
                        }
                    });
            });
       </script>
      <!-- end course upload video -->












			

		</div>
	</div>
</div>    
@endsection
