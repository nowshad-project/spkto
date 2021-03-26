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
						<div class="col-lg-3">
			 	 			@error('name')
			 	 			<small class="text-danger">{{ $message }}</small>
			 	 			@enderror
              <input class="dropdown_profile" type="text" value="Md Rakibuzzaman" name="name" placeholder="Name" style="width: 100%;">
            </div>

            <div class="col-lg-3">
              @error('language')
              <small class="text-danger">{{ $message }}</small>
              @enderror
              <input class="dropdown_profile" type="text" name="language" placeholder="Language" style="width: 100%;">
            </div>                       


		 	 			<div class="col-lg-3">
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

			 	 		<div class="col-lg-3">
                @error('date_of_birth')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <input class="dropdown_profile" type="text" name="date_of_birth" placeholder="Date of Birth" onfocus="(this.type='date')" style="width: 100%; color: gray;">
            </div>                        

            <div class="col-lg-3">
                @error('country')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <select class="dropdown_profile" id="country" name="country"  style="width: 100%;"></select>
            </div>

            <div class="col-lg-9">
                @error('d_topic')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <input class="dropdown_profile" type="text" name="d_topic" placeholder="Topic you want to discuss" style="width: 100%;">
            </div>
	        </div>
          <center id="Show_me_on_the_list" style="margin-left: -50px; padding-top: 20px; padding-bottom: 20px;" >
            <button type="submit" class="button_section_button" >Show me on the list</button>
          </center>           
        </div>

        <div>
        	<div class="payment_option" >
            <div>
              <p>Turn on receiving payment for hourly voice chatting </p>
              <label class="switch">
                <input type="checkbox" id="remember" onclick="validate()" >
                <span class="slider round"></span>
              </label>
            </div>
        	</div>
        </div>
        
        <script type="text/javascript">
          function validate(){
            if (document.getElementById('remember').checked) {
              document.getElementById('p_from').style.display='block';
              document.getElementById('Show_me_on_the_list').style.display='none';
            } 
            else {
              document.getElementById('p_from').style.display='none';
              document.getElementById('Show_me_on_the_list').style.display='block';
            }
          }
        </script>
        
        <div id="p_from" style="display: none;">
          <div class="hourlyreat">
          	<div class=" m-t-15">
                @error('HourlyRate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              	<label style="padding-left: 0px; font-size: 16px;">Hourly rate / hour (USD): $</label>
            		<input type="text" name="HourlyRate" placeholder="Ex:10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="width: 50px; border: 1px solid gray; border-radius: 5px; font-size: 12px;">
        		</div>
          </div>
          <h5>Availability</h5>
         	<div>
           	<p>Please select dates you are available. Unchacked dates will be counted as not available. System will count till 3 months ahed.</p>
         	</div>

          <!-- multi date user choice celender section -->
          <link rel="stylesheet" href="{{asset('/')}}calendar/page.css">
          <link rel="stylesheet" href="{{asset('/')}}calendar/style.css">
          <link rel="stylesheet" href="{{asset('/')}}calendar/theme.css">
          <main>
            <div class="calendar-wrapper"></div>
            <!--<div id="editor"></div>-->
          </main>
          <script src="{{asset('/')}}calendar/jquery.min.js"></script>
          <script src="{{asset('/')}}calendar/calendar.min.js"></script>
          <script src="{{asset('/')}}calendar/codeflask.min.js"></script>
          <script type="text/javascript">
            /*var config = 
            `function selectDate(date) {
              $('.calendar-wrapper').updateCalendarOptions({
                date: date
              });
            }

            var defaultConfig = {
              weekDayLength: 1,
              date: new Date(),
              onClickDate: selectDate,
              showYearDropdown: true,
            };

            $('.calendar-wrapper').calendar(defaultConfig);`;
                  eval(config);
                  const flask = new CodeFlask('#editor', { 
                    language: 'js', 
                    lineNumbers: true 
                  });
                  flask.updateCode(config);
                  flask.onUpdate((code) => {
                    try {
                      eval(code);
                    } catch(e) {}
                  });
            */



                  function selectDate(date) {
              $('.calendar-wrapper').updateCalendarOptions({
                date: date
              });
            }

            var defaultConfig = {
              weekDayLength: 1,
              date: new Date(),
              showThreeMonthsInARow: true,
              enableMonthChange: true,
              enableYearView: false,
              showTodayButton: true,
              highlightSelectedWeekday: false,
              highlightSelectedWeek: false,
              todayButtonContent: "Today",
              showYearDropdown: false,
              min: null,
              max: null,
            };

            $('.calendar-wrapper').calendar(defaultConfig);
          </script>
          <!-- end multi date user choice celender section -->
          <div class=" m-t-15">
            <label for="" class="margin-right-60 f_b"  style="padding-left:0">Time:</label>
          </div>
          <div class="time_optional_field">
            <div class="row">
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Saturday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Sunday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Monday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Tuesday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Wednesday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Thursday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Friday</label>
                <input class="smal_input" name="" value="" style="width: 100px" type="time">
              </div>
            </div>
          </div>
          <div class="button_section">
            <button type="submit" class="button enable-ripple">Show me on the list</button>
          </div>
        </div>        
      </form>
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
