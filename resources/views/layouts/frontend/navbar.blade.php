<header>
	<div class="Logo_section">
        <div class="container">
            <div class="as_logo text-center">
                <a href="{{asset('/')}}"><img src="{{asset('/')}}images/logo.png" alt="Speak to learner"></a>
                <p>Practice speaking English With others, Take test & Others you need</p>
            </div>
        </div>
    </div>
    <div class="menu_section" style="margin-top: 25px;">
    	<!-- start nave section -->
    	<div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            	<button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    	<li class="nav-item">
                    		<a class="nav-link" href="{{asset('/')}}user/create-course">Upload courses</a>
                    	</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Premium speakers</a>
                        </li>

                        @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="badge rounded-circle" style="display: block; background-color: red; color: black;  height: 20px; width: 20px; position: absolute; left: 19px; top: 2px; font-size: 12px; padding: auto;">99</span>
                              <i class="fas fa-bell" alt="Notifications"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                                <a class="dropdown-item notification_main_item"  href="#">
                                  <div class="textlimit">
                                    <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /><span style="padding-left: 10px; ">Voice Chat request from Thomas</span> 
                                   </div>
                                </a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" width="40" height="40" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" 
                            >
                                <a class="dropdown-item" href="{{asset('/')}}user/update-profile-picture">Update pro. picture</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/about">About</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/notification">Notification</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/create-course">Create Course</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/schedule">Schedule</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/request">Requests</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/wallet">Wallet</a>
                                <a class="dropdown-item" href="{{asset('/')}}user/update-password">Change password</a>
                                <!-- Logout-->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                                </form>                                
                            </div>
                        </li>  
                        @else
                        <!--if not sign in-->
                        <li class="nav-item">
                        	<a class="nav-link" href="{{ route('login') }}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                        </li>
                        @endif


                    </ul>
                </div>
            </nav>

        </div>
    </div>
    <!-- end nav section -->
</header>
    


                        
                    
                

            
            