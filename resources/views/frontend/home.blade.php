@extends('layouts.frontend.frontend_layout')

@section('title', 'Home')

@section('content')
<!--custome css home-->
 <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/home.css">
<!--custome css home end-->

<!--google ads-->
<center>
    <img class="google_add_section" src="images/3713987663458155639.jpg" alt="Google add section">
</center>
<!--google ads end-->

<!--active table-->
<div class="filter_section">
     <div class="container">
        <div class="as_contacts_section">
            <div class="as_home_result all_border_section">

                <!--table head-->
                <center>
                <div class="active_table_header">
                    <div style="margin-bottom: 10px;">
                        <b>Active now</b><span style="color: gray;"> 5 currently online</span>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <form action="" class="inline-block f_p" style="font-size: 14px;">
                                <input type="text" placeholder="search" class="search_online_mean" id="search_online_mean">
                                <button class="search_btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <a href="#" class="click_btn inline-block">Show me on the list</a>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <span class="">Show only: </span>
                        <span>Premimum speakers <input type="checkbox"></span>  
                    </div>
                </div>
                </center>
                <!--end table head-->

                <!-- active elements -->
                <div class="speaking_active_show" style="margin-top:38px">
                    <div class="as_showing_result table-responsive">

                        <div class="active_profile_s">
                            <div class="pro_sec">
                                <div style="margin-right: 10px;">
                                    <img class="profile_picture" src="{{asset('/')}}images/user_robin.jpg">
                                </div>
                                <div style=" margin-right: 10px; display: flex; flex-direction: row;">
                                    <div>
                                        <span>Merry cury</span> 
                                        <div class="ratting_section">
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ratting_number">
                                        <b>4</b>
                                        <p>(287)</p>
                                    </div>                                
                                </div>
                                <div style="margin-right: 10px; margin-top: 10px;">
                                   <span>21</span> 
                                </div>
                                <div style="margin-right: 10px; margin-top: 10px;">
                                   <img style="width: 32px; height: 23px; object-fit: contain;" src="{{asset('/')}}images/flag.png" alt="secend label">
                                </div>    
                            </div>
                            <div style="margin-right: 10px; margin-top: 10px;">
                               <span>Bangla </span> 
                               <span>| English</span> 
                            </div>
                            <div>
                                <div style="margin-bottom: 10px; margin-top: 10px;">
                                    <a href="#" class="click_btn">Book for voice chat</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!--end active elements -->

            </div>
        </div>
    </div>
</div>

<!--google Ads-->
<center>
    <img class="google_add_section" src="images/lifebuoy460X140.png" alt="Google add section">
</center>
<!--end google ads-->
@endsection


        
    



