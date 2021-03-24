@extends('layouts.frontend.frontend_layout')
@section('title', 'Update Password')
@section('content')
<!--custome css about info-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/user/user_info_from.css">
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
							<a href="{{asset('/')}}user/update-password">Update Password</a>	
						</span>
					</li>
                </ul>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="as_profiel_section">
			<h2 class="f_b">Update Password</h2>
			<center>
				@error('red')
				<small class="form-text text-danger">{{ $message }} </small>
				@enderror
			</center>
			<style type="text/css">
				.pass_input{
					color: black;
				}
				.pass_input:hover{
					color: black;
				}
			</style>
			<div class="password_change">
				<form action="" method="POST">
				    @csrf
				    <div class="form-group">
				    	<input type="password" class="pass_input border-success btn-outline-success form-control @error('currentPassword') is-invalid @enderror" value="{{ old('currentPassword') }}" name="currentPassword" id="currentPassword" aria-describedby="currentPassword" placeholder="Current password">
				    	@error('currentPassword')
				    	<small id="confirmNewPassword" class="form-text text-danger">{{ $message }} </small>
				    	@enderror
		            </div>

		            <div class="form-group">
		              	<input type="password" class="pass_input border-success form-control @error('newPassword') is-invalid @enderror" name="newPassword" value="{{ old('newPassword') }}" id="newPassword" aria-describedby="newPassword" placeholder="New Password">
		              	@error('newPassword')
		              	<small id="confirmNewPassword" class="form-text text-danger">{{ $message }} </small>
		            	@enderror
		            </div>

		            <div class="form-group">
			            <input type="password" class="pass_input border-success btn-outline-success form-control @error('confirmNewPassword') is-invalid @enderror" name="confirmNewPassword" value="{{ old('confirmNewPassword') }}" id="confirmNewPassword" aria-describedby="confirmNewPassword" placeholder="Confirm new password">
			            @error('confirmNewPassword')
			            <small id="confirmNewPassword" class="form-text text-danger">{{ $message }} </small>
			            @enderror
			        </div>
			        <button type="submit" class="btn  btn-block">Submit</button>
			  	</form>
			</div>
		</div>
	</div>
</div>    
@endsection
