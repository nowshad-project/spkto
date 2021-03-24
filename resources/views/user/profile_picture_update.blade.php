@extends('layouts.frontend.frontend_layout')
@section('title', 'Update picture')
@section('content')
<!--custome css about info-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/user/user_info_from.css">
<!--phone number country code-->
    <link rel="stylesheet" href="{{ asset('/') }}js/phone_number_country/css/intlTelInput.css">
<!--custome css about info end-->
<div class="profile_section_deshboard">
<style type="text/css">
    .form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay { display: block; height: 210px; width: 210px; margin: 0px auto; border-radius: 50%; object-fit: cover;}
.img-placeholder {
  width: 210px;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 210px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
.b_info{
    display: block;
    margin-left: auto;
    margin-right: auto
}
.closebtn{
	cursor: pointer;
}
</style>
	<div class="container">
		@foreach ($errors->all() as $message)
			@if($errors->any())
			<div class="alert" style=" background-color: #f44336; color: #fff;">
			  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  	<strong>Danger!</strong> {{ $message }}
			</div>
			@endif
		@endforeach
	</div>
	<div class="couse_break_cume">
		<div class="break_cum">
			<div class="container">
				<ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<span itemprop="name">
							<a href="{{asset('/')}}"><i class="fa fa-home"></i> </a>	
							<span> > </span>
							<a href="{{asset('/')}}user/update-profile-picture">Update profile picture </a>	
						</span>
					</li>
                </ul>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="as_profiel_section">
	        <!-- Profile Image Start -->
	        <center>
              	<form action="{{ asset('/user/profile-picture-store') }}" method="post" enctype="multipart/form-data">
	                @csrf
	                <h2 class="text-center mb-3 mt-3">Profile Picture</h2>
	                <?php if (!empty($msg)): ?>
	                  <div class="alert <?php echo $msg_class ?>" role="alert">
	                    <?php echo $msg; ?>
	                  </div>
	                <?php endif; ?>
	                <div class="form-group text-center" style="position: relative;" >
	                  <span class="img-div">
	                    <div class="text-center img-placeholder"  onClick="triggerClick()">
	                      <h4>Select image</h4>
	                    </div>
	                    <img class="rounded-circle" onClick="triggerClick()" id="profileDisplay" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

	                    </span>
	                    <input type="file" name="profile_picture" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
	                </div>
		               <button type="submit" name="save_profile" class="btn btn-primary">Update profile picture</button>
         		</form>
	    	</center>
	    	<script type="text/javascript">
	            function triggerClick(e) {
	            document.querySelector('#profileImage').click();
	            }
	            function displayImage(e) {
	                if (e.files[0]) {
	                  var reader = new FileReader();
	                  reader.onload = function(e){
	                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
	                  }
	                  reader.readAsDataURL(e.files[0]);
	                }
	            }
	    	</script>
	        <!-- Profile Image End -->
		</div>
	</div>
</div>    
@endsection
