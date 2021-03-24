@extends('layouts.frontend.frontend_layout')
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
              <a href="{{asset('/')}}user/about">About</a> 
            </span>
					</li>
        </ul>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="as_profiel_section">
			<h2 class="f_b">About</h2>
			<form action="#" method="POST">
				@csrf
				<div class="profile_field">
					<div class="row">
						<div class="col-lg-2">
			 	 			@error('name')
			 	 			<small class="text-danger">{{ $message }}</small>
			 	 			@enderror
                            <input class="dropdown_profile" type="text" value="Md Rakibuzzaman" name="name" placeholder="Name" style="width: 100%;">
                        </div>

                        <div class="col-lg-2">
                            @error('language')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input class="dropdown_profile" type="text" name="language" placeholder="Language" style="width: 100%;">
                        </div>                       

                        <div class="col-lg-2">
                            @error('Level')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        	<select class="dropdown_profile" name="Level" placeholder="Level" style="width: 100%;">
                        		<option value="" disabled="" selected="" hidden="">Lavel</option>
                        		<option value="1">Primary</option>
                        		<option value="2">Intermediate</option>
                        		<option value="3">Advanced</option>
                        	</select>
		 	 			</div>
		 	 			<div class="col-lg-2">
                            @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <select class="dropdown_profile" name="gender" style="width: 100%;">
                            	<option value="" disabled="" selected="" hidden="">Gender</option>
                            	<option value="">Male</option>
                            	<option value="">Female</option>
                            	<option value="">Other</option>
                            </select>
		 	 			</div>

			 	 		<div class="col-lg-2">
                            @error('date_of_birth')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                              <input class="dropdown_profile" type="date" name="date_of_birth" placeholder="Date of Birth" style="width: 100%; color: gray;">
                        </div>                        

                        <div class="col-lg-2">
                            @error('country')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <select class="dropdown_profile" id="country" name="country"  style="width: 100%;"></select>
                        </div>

                        <div class="col-lg-12">
                            @error('d_topic')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input class="dropdown_profile" type="text" name="d_topic" placeholder="Topic you want to discuss" style="width: 100%;">
                        </div>
	                </div>

	                <div>
	                	<div class="payment_option" >
		                   	<div>
		                    	<p>Turn on receiving payment for hourly voice chatting </p>
			                   	<label class="switch">
	  								<input type="checkbox">
								  	<span class="slider round"></span>
								</label>
								
				 	 		</div>
	                	</div>
	                	<button class="button_section_button">Show me on the list</button>
	                </div>
	                

              	</div>
              	<div class="hourlyreat" style="">
              		<div class=" m-t-15">
		                @error('HourlyRate')
		                <small class="text-danger">{{ $message }}</small>
		                @enderror
		              	<label style="padding-left: 0px; font-size: 16px;">Hourly rate / hour (USD): $</label>
	              		<input type="text" name="HourlyRate" placeholder="Ex:10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="width: 50px; border: 1px solid gray; border-radius: 5px; font-size: 12px;">
            		</div>
		            <h5>Availability</h5>
		           	<div>
		             	<p>Please select dates you're not available. Unchacked dates will be counted as available. System will count till 3 months ahed.</p>
		           	</div>
		           	<div>
		           		<input type="date" name="date">
		           	</div>

            <!-- multi date user choice celender section -->
            <div class="day_select_calender">
                <div style="width: 315px;">

                    <input style="display: none" id="selectedValues" name="dates" value=""  class="updateValues date-values"/>
                    <div id="parent">
                            <div class="card-header month-selected col-sm" id="monthAndYear">
                            </div>

                        <div class="custome_day_year_month">
                          <select class=" col-xs-6" name="month" id="month" onchange=""></select>
                          <select class="col-xs-6" name="year" id="year" onchange=""></select>
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
 <!-- end multi date user choice celender section -->
           <div class=" m-t-15">
                <label for="" class="margin-right-60 f_b"  style="padding-left:0">Time<span style="color:gray; font-weight: normal;">(Optional)</span>:</label>
            </div>
          <div class="time_optional_field">
            <ul>
              <li>
              <label class="margin-right-60">
                  <input onclick="checkAvailday(this)"  type="checkbox" name="onSaturday"  class="checkbox check_box_with"> Saturday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" name="onSaturdayTime" value="" style="width: 100px" type="time" placeholder="Enter time">
              </li>
              <li>
                <label class="margin-right-60">
                  <input onclick="checkAvailday(this)"  type="checkbox" name="onMonday"  class="checkbox check_box_with"> Monday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" name="onModayTime"  value=""  style="width: 100px" type="time" placeholder="$">
              </li>
              <li>
                <label class="margin-right-60">
                  <input onclick="checkAvailday(this)"  type="checkbox" name="onWednesday" class="checkbox check_box_with"> Wednesday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" style="width: 100px"  value=""  name="onWednesdayTime" type="time" type="number" placeholder="">
              </li>
              <li>
                <label class="margin-right-60">
                  <input onclick="checkAvailday(this)" type="checkbox" name="onSunday" class="checkbox check_box_with"> Sunday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" name="onSundayTime"  value=""  style="width: 100px" type="time" placeholder="$">
              </li>
              <li>
                <label class="margin-right-60">
                  <input onclick="checkAvailday(this)"  type="checkbox" name="onTuesday" class="checkbox check_box_with"> Tuesday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" name="onTuesdayTime"  value=""  style="width: 100px" type="time" type="number" placeholder="$">
              </li>
              <li>
                <label class="margin-right-60">
                  <input type="checkbox" onclick="checkAvailday(this)" name="onThursday" class="checkbox check_box_with"> Thursday
                  <span class="checkmark"></span>
                </label>
                    <input class="smal_input" name="onThursdayTime"  value=""  style="width: 100px" type="time" placeholder="$">
              </li>
              <li>
                <label class="margin-right-60">
                  <input onclick="checkAvailday(this)" type="checkbox" name="onFriday" class="checkbox check_box_with"> Friday
                  <span class="checkmark"></span>
                </label>
                <input class="smal_input" name="onFridayTime"  value="07:34"  style="width: 100px" type="time" placeholder="$">
              </li>
            </ul>
          </div>
        </div>
                    </form>
			 	 	<div class="button_section">
			 	 		<button class="button enable-ripple">
			 	 			Up-date
			 	 		</button>
			 	 	</div>

			 	 </div>

			 </div>
		</div>
    </div>



<!--phone number country--Rakibuzzaman-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('/') }}js/phone_number_country/js/intlTelInput.js"></script>
<script type="text/javascript">
  // get the country data from the plugin  
  var countryData = window.intlTelInputGlobals.getCountryData(),
  addressDropdown = document.querySelector("#country");

// Initialise plugin
var iti = window.intlTelInput(addressDropdown, {
      // allowDropdown: false,
      // autoHideDialCode: false,
       //autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
       formatOnDisplay: false,
      //hiddenInput: "full_number",
      /*initialCountry: "auto",
        geoIpLookup: function(callback) {
        var elt = document.getElementById('phone'),
            current_value = elt.value;
        elt.value = '';  // unset the value before checking geoip
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "";
        callback(countryCode);
            setTimeout(function() {
            elt.value = current_value;  // set value back after geoip is done.
                }, 10);
            });
        },*/
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: false,
      utilsScript: "{{ asset('/') }}frontend/phone_number_country/js/utils.js?1603274336113"
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);

  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
  iti.setCountry(this.value);
});
</script>
<!-- end JS -->
    
@endsection
