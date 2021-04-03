@extends('layouts.frontend.frontend_layout')
@section('title', 'About')
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
      <form action="{{asset('/')}}user/regestration-submit" method="POST">
				@csrf
				<div class="profile_field">
					<div class="row">
						<div class="col-lg-3">
              <input class="dropdown_profile" type="text" value="{{Auth::user()->name}}" name="name" placeholder="Name" style="width: 100%;">
              @error('name')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-3">
              <select class="dropdown_profile" id="languages" placeholder="Language" name="language"  style="width: 100%;">
                  <option value="af">Afrikaans</option>
                  <option value="sq">Albanian - shqip</option>
                  <option value="am">Amharic - አማርኛ</option>
                  <option value="ar">Arabic - العربية</option>
                  <option value="an">Aragonese - aragonés</option>
                  <option value="hy">Armenian - հայերեն</option>
                  <option value="ast">Asturian - asturianu</option>
                  <option value="az">Azerbaijani - azərbaycan dili</option>
                  <option value="eu">Basque - euskara</option>
                  <option value="be">Belarusian - беларуская</option>
                  <option value="bn">Bengali - বাংলা</option>
                  <option value="bs">Bosnian - bosanski</option>
                  <option value="br">Breton - brezhoneg</option>
                  <option value="bg">Bulgarian - български</option>
                  <option value="ca">Catalan - català</option>
                  <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                  <option value="zh">Chinese - 中文</option>
                  <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                  <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                  <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                  <option value="co">Corsican</option>
                  <option value="hr">Croatian - hrvatski</option>
                  <option value="cs">Czech - čeština</option>
                  <option value="da">Danish - dansk</option>
                  <option value="nl">Dutch - Nederlands</option>
                  <option value="en">English</option>
                  <option value="en-AU">English (Australia)</option>
                  <option value="en-CA">English (Canada)</option>
                  <option value="en-IN">English (India)</option>
                  <option value="en-NZ">English (New Zealand)</option>
                  <option value="en-ZA">English (South Africa)</option>
                  <option value="en-GB">English (United Kingdom)</option>
                  <option value="en-US">English (United States)</option>
                  <option value="eo">Esperanto - esperanto</option>
                  <option value="et">Estonian - eesti</option>
                  <option value="fo">Faroese - føroyskt</option>
                  <option value="fil">Filipino</option>
                  <option value="fi">Finnish - suomi</option>
                  <option value="fr">French - français</option>
                  <option value="fr-CA">French (Canada) - français (Canada)</option>
                  <option value="fr-FR">French (France) - français (France)</option>
                  <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                  <option value="gl">Galician - galego</option>
                  <option value="ka">Georgian - ქართული</option>
                  <option value="de">German - Deutsch</option>
                  <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                  <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                  <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                  <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                  <option value="el">Greek - Ελληνικά</option>
                  <option value="gn">Guarani</option>
                  <option value="gu">Gujarati - ગુજરાતી</option>
                  <option value="ha">Hausa</option>
                  <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                  <option value="he">Hebrew - עברית</option>
                  <option value="hi">Hindi - हिन्दी</option>
                  <option value="hu">Hungarian - magyar</option>
                  <option value="is">Icelandic - íslenska</option>
                  <option value="id">Indonesian - Indonesia</option>
                  <option value="ia">Interlingua</option>
                  <option value="ga">Irish - Gaeilge</option>
                  <option value="it">Italian - italiano</option>
                  <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                  <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                  <option value="ja">Japanese - 日本語</option>
                  <option value="kn">Kannada - ಕನ್ನಡ</option>
                  <option value="kk">Kazakh - қазақ тілі</option>
                  <option value="km">Khmer - ខ្មែរ</option>
                  <option value="ko">Korean - 한국어</option>
                  <option value="ku">Kurdish - Kurdî</option>
                  <option value="ky">Kyrgyz - кыргызча</option>
                  <option value="lo">Lao - ລາວ</option>
                  <option value="la">Latin</option>
                  <option value="lv">Latvian - latviešu</option>
                  <option value="ln">Lingala - lingála</option>
                  <option value="lt">Lithuanian - lietuvių</option>
                  <option value="mk">Macedonian - македонски</option>
                  <option value="ms">Malay - Bahasa Melayu</option>
                  <option value="ml">Malayalam - മലയാളം</option>
                  <option value="mt">Maltese - Malti</option>
                  <option value="mr">Marathi - मराठी</option>
                  <option value="mn">Mongolian - монгол</option>
                  <option value="ne">Nepali - नेपाली</option>
                  <option value="no">Norwegian - norsk</option>
                  <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                  <option value="nn">Norwegian Nynorsk - nynorsk</option>
                  <option value="oc">Occitan</option>
                  <option value="or">Oriya - ଓଡ଼ିଆ</option>
                  <option value="om">Oromo - Oromoo</option>
                  <option value="ps">Pashto - پښتو</option>
                  <option value="fa">Persian - فارسی</option>
                  <option value="pl">Polish - polski</option>
                  <option value="pt">Portuguese - português</option>
                  <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                  <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                  <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                  <option value="qu">Quechua</option>
                  <option value="ro">Romanian - română</option>
                  <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                  <option value="rm">Romansh - rumantsch</option>
                  <option value="ru">Russian - русский</option>
                  <option value="gd">Scottish Gaelic</option>
                  <option value="sr">Serbian - српски</option>
                  <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                  <option value="sn">Shona - chiShona</option>
                  <option value="sd">Sindhi</option>
                  <option value="si">Sinhala - සිංහල</option>
                  <option value="sk">Slovak - slovenčina</option>
                  <option value="sl">Slovenian - slovenščina</option>
                  <option value="so">Somali - Soomaali</option>
                  <option value="st">Southern Sotho</option>
                  <option value="es">Spanish - español</option>
                  <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                  <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                  <option value="es-MX">Spanish (Mexico) - español (México)</option>
                  <option value="es-ES">Spanish (Spain) - español (España)</option>
                  <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                  <option value="su">Sundanese</option>
                  <option value="sw">Swahili - Kiswahili</option>
                  <option value="sv">Swedish - svenska</option>
                  <option value="tg">Tajik - тоҷикӣ</option>
                  <option value="ta">Tamil - தமிழ்</option>
                  <option value="tt">Tatar</option>
                  <option value="te">Telugu - తెలుగు</option>
                  <option value="th">Thai - ไทย</option>
                  <option value="ti">Tigrinya - ትግርኛ</option>
                  <option value="to">Tongan - lea fakatonga</option>
                  <option value="tr">Turkish - Türkçe</option>
                  <option value="tk">Turkmen</option>
                  <option value="tw">Twi</option>
                  <option value="uk">Ukrainian - українська</option>
                  <option value="ur">Urdu - اردو</option>
                  <option value="ug">Uyghur</option>
                  <option value="uz">Uzbek - o‘zbek</option>
                  <option value="vi">Vietnamese - Tiếng Việt</option>
                  <option value="wa">Walloon - wa</option>
                  <option value="cy">Welsh - Cymraeg</option>
                  <option value="fy">Western Frisian</option>
                  <option value="xh">Xhosa</option>
                  <option value="yi">Yiddish</option>
                  <option value="yo">Yoruba - Èdè Yorùbá</option>
                  <option value="zu">Zulu - isiZulu</option>
              </select>
              @error('language')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>                       

		 	 			<div class="col-lg-3"> 
              <select class="dropdown_profile" name="gender" style="width: 100%;">
              	<option value="" disabled="" selected="" hidden="">Gender</option>
              	<option value="male">Male</option>
              	<option value="female">Female</option>
              	<option value="other">Other</option>
              </select>
              @error('gender')
              <small class="text-danger">{{ $message }}</small>
              @enderror
		 	 			</div>

			 	 		<div class="col-lg-3"> 
                <input class="dropdown_profile" type="text" name="date_of_birth" placeholder="Date of Birth" onfocus="(this.type='date')" style="width: 100%; color: gray;">
                @error('date_of_birth')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>                        

            <div class="col-lg-3"> 
                <select class="dropdown_profile" id="country" name="country"  style="width: 100%;"></select>
                @error('country')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-lg-9"> 
                <input class="dropdown_profile" type="text" name="d_topic" placeholder="Topic you want to discuss" style="width: 100%;">
                @error('d_topic')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
	        </div>          
        </div>

        <div>
        	<div class="payment_option" >
            <div>
              <p>Turn on receiving payment for hourly voice chatting </p>
              <label class="switch">
                <input type="checkbox" name="is_receiving_payment" id="remember" onclick="validate()" >
                <span class="slider round"></span>
              </label>
            </div>
        	</div>
        </div>
        
        <script type="text/javascript">
          function validate(){
            if (document.getElementById('remember').checked) {
              document.getElementById('p_from').style.display='block';
            } 
            else {
              document.getElementById('p_from').style.display='none';
            }
          }
        </script>

        <div id="p_from" style="display: block;">
          <div class="hourlyreat">
          	<div class=" m-t-15">
              	<label style="padding-left: 0px; font-size: 16px;">Hourly rate / hour (USD): $</label>
            		<input type="text" name="HourlyRate" placeholder="Ex:10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="width: 50px; border: 1px solid gray; border-radius: 5px; font-size: 12px;">
                @error('HourlyRate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
        		</div>
          </div>
          <h5>Availability</h5>
         	<div>
           	<p>Please select dates you are available. Unchacked dates will be counted as not available. System will count till 3 months ahed.</p>
         	</div>

          <!-- multi date user choice celender section -->

          <!-- end multi date user choice celender section -->



          <div class=" m-t-15">
            <label for="" class="margin-right-60 f_b"  style="padding-left:0">Time:</label>
          </div>
          <div class="time_optional_field">
            <div class="row">
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Saturday</label>
                <input class="smal_input" id="Saturday" name="Saturday" value="" style="width: 100px" type="time">
                @error('Saturday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Sunday</label>
                <input class="smal_input" id="Sunday" name="Sunday" value="" style="width: 100px" type="time">
                @error('Sunday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Monday</label>
                <input class="smal_input" id="Monday" name="Monday" value="" style="width: 100px" type="time">
                @error('Monday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Tuesday</label>
                <input class="smal_input" id="Tuesday" name="Tuesday" value="" style="width: 100px" type="time">
                @error('Tuesday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Wednesday</label>
                <input class="smal_input" id="Wednesday" name="Wednesday" value="" style="width: 100px" type="time">
                @error('Wednesday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Thursday</label>
                <input class="smal_input" id="Thursday" name="Thursday" value="" style="width: 100px" type="time">
                @error('Thursday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-lg-3">
                <label style="font-size: 16px; width: 100px;" >Friday</label>
                <input class="smal_input" id="Friday" name="Friday" value="" style="width: 100px" type="time">
                @error('Friday')
                <br><small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>          
        </div> 
        <div class="button_section">
          <button type="submit" class="button enable-ripple">Show me on the list</button>
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
      //separateDialCode: false,
      //utilsScript: "{{ asset('/') }}frontend/phone_number_country/js/utils.js?1603274336113"
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
