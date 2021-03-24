    <script src="{{asset('/')}}js/jquery-3.5.1.slim.min.js"></script>
	<script src="{{asset('/')}}js/booking-calender.js" type="text/javascript"></script>

	<script>
	    var dates = $('.updateValues').val();
	    var dsss = dates.split(', ');

	</script>


    <script src="{{asset('/')}}js/jquery-3.5.1.slim.min.js"></script>
    <script src="{{asset('/')}}js/jquery.flexslider-min.js"></script>
    <script src="{{asset('/')}}js/popper.js"></script>
    <script src="{{asset('/')}}js/ripple.js"></script>
    <script src="{{asset('/')}}js/customize.js"></script>
    <script src="{{asset('/')}}js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}js/jquery.star-rating-svg.min.js"></script>
    <script src="{{asset('/')}}js/select2.js"></script>
    <script src="{{asset('/')}}js/toggle.js"></script>
    <script src="{{asset('/')}}js/table.js"></script>
    <script src="{{asset('/')}}js/reteyo.js"></script>
    <script src="{{asset('/')}}js/custom.js"></script>



    <script>
        $(".my-rating-9").starRating({
            initialRating: 0,
            disableAfterRate: false,
            onHover: function (currentIndex, currentRating, $el) {
                $('.live-rating').text(currentIndex);
            },
            onLeave: function (currentIndex, currentRating, $el) {
                $('.live-rating').text(currentRating);
            }
        });

    </script>
    <script>
        $('#carousel_images').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 150,
            itemMargin: 0,
            asNavFor: '#slider_images',

        });

        $('#slider_images').flexslider({

            animation: "slide",
            controlNav: false,
            animationLoop: false,
            animationLoop: false,
            slideshow: false,

            sync: "#carousel_images",



        });



        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>

    <script>
        function subscribe_btn(e) {

            $(e).toggleClass("subscribe_alread");

            /* if($('#subscrib_cat_id').is(":checked")){
                 $( "#subscrib_cat_id" ).prop( "checked", false );
             }else{
               $( "#subscrib_cat_id" ).prop( "checked", true );
             }

             if($('#subscrib_sub_cat_id').is(":checked")){
                $( "#subscrib_sub_cat_id" ).prop( "checked", false );
             }else{
               $( "#subscrib_sub_cat_id" ).prop( "checked", true );
             }

              */




        }

        function hourly_red(e) {
            if ($(e).children('.switch_status').is(":checked")) {
                $('.hourly_reat').css('display', 'block');
            } else {
                $('.hourly_reat').css('display', 'none');

            }
        }

    </script>
    <script>
        $('.recomment_radio_btn li').click(function () {
            $('.recomment_radio_btn li').removeClass('active_recomment');
            $(this).addClass('active_recomment');
        });


        //submit photo
        document.getElementById("file").onchange = function () {
            document.getElementById("form").submit();
        };


        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function () {
            $('.js-example-basic-country').select2({
                placeholder: "Select a country",
                allowClear: true
            });
            $('.js-example-basic-level').select2({
                placeholder: "Select Level",
                minimumResultsForSearch: -1,
                allowClear: true
            });
            $('.js-example-basic-Gender').select2({
                placeholder: "Select Gender",
                minimumResultsForSearch: -1,
                allowClear: true
            });
            $('.js-example-basic-Gender').select2({
                placeholder: "Select Gender",
                minimumResultsForSearch: -1,
                allowClear: true
            });
            $('.js-example-basic-premium').select2({
                placeholder: "Premium ?",
                minimumResultsForSearch: -1,
                allowClear: true
            });
            $('.js-example-basic-practice').select2({
                placeholder: "Are you practising english ?",
                minimumResultsForSearch: -1,
                allowClear: true
            });
            $('.js-example-basic-topic').select2({
                placeholder: "Mention the topic you want to discuss about-",
                allowClear: true,
                tags: true,
            }, function () {
                var data = {
                    id: 1,
                    text: 'Barn owl'
                };
                var newOption = new Option(data.text, data.id, false, false);
                $('#topic').append(newOption).trigger('change');
            });
            $('.js-example-basic-duration').select2({
                placeholder: "Set the duration",
                allowClear: true
            })
        });

    </script>
    <script>
        $('#duration').change(function () {
            $('.topic_days').html("");
            var i = "";
            var day_number = $(this).val();
            for (i = 1; i <= day_number; i++) {
                if (i == 1) {
                    $('.topic_days').append(
                        '<div class="col-md-6"><div class="form_item line_hide_form_item"><input type="text"  name="topic[]" placeholder="' +
                        i + 'st Day' + '"></div></div>');
                } else if (i == 2) {
                    $('.topic_days').append(
                        '<div class="col-md-6"><div class="form_item line_hide_form_item"><input type="text"  name="topic[]" placeholder="' +
                        i + 'nd Day' + '"></div></div>');
                } else if (i == 3) {
                    $('.topic_days').append(
                        '<div class="col-md-6"><div class="form_item line_hide_form_item"><input type="text"  name="topic[]" placeholder="' +
                        i + 'rd Day' + '"></div></div>');
                } else {
                    $('.topic_days').append(
                        '<div class="col-md-6"><div class="form_item line_hide_form_item"><input type="text"  name="topic[]" placeholder="' +
                        i + 'th Day' + '"></div></div>');
                }

            }
        });




        //get te data from the variable
        var dates = $('.updateValues').val();
        var dsss = dates.split(', ');

    </script>

    <!-- able able time check function -->
    <script>
        function checkAvailday(e) {


            if ($(e).is(":checked")) {

                $(e).parent('label').parent('li').children('.smal_input').prop("disabled", false);

            } else {
                $(e).parent('label').parent('li').children('.smal_input').prop("disabled", true);
            }
        }

    </script>

    <script>
        $('.withdraw_btn').click(function () {

            $('#booking_information').css('display', 'block');

        });

        function paypal_file_info(e) {

            $('.visa_master_card').css('display', 'none');
            $('.paypal_info').css('display', 'block');
        }

        function visa_master_info(e) {

            $('.visa_master_card').css('display', 'block');
            $('.paypal_info').css('display', 'none');
        }

    </script>
    <script>
        function title_count(val) {
            var len = val.value.length;
            if (len >= 51) {
                val.value = val.value.substring(0, 50);
            } else {
                $('.t_count_res').text(50 - len);
                $('.title_count').css('display', 'block');

            }
        }

        function discription_count(val) {

            var len = val.value.length;
            if (len >= 201) {
                val.value = val.value.substring(0, 200);
            } else {
                $('.d_count_res').text(200 - len);
                $('.descrip_count').css('display', 'block');

            }
        }

        var amount = document.getElementById('amountMultiply').textContent;

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>

    <script>



        function more_course_filter(e) {
            $('.search_filtr_section').css('display', 'none');
            $('.course_filter_section').css('display', 'block');
        }
        $('.close_filter').click(function () {
            $('.search_filtr_section').css('display', 'block');
            $('.course_filter_section').css('display', 'none');
        });



        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :' + rating);
                $(this).parent().find('#rating').val(rating);
            });
        });

        $('#yesClick').click(function (e) {
            $('#recomendOthers').val('yes');
        });
        $('#noClick').click(function (e) {
            $('#recomendOthers').val('no');
        });

        $('#clickClose').click(function (e) {
            $('.developement').css("display", "none");
        });

        $('#clickCloseThis').click(function (e) {
            $('#emailNotVerified').css("display", "none");
        });

        function updateUserStatus(s,u){
            var link = "{{asset('/')}}getUpdateUserStatus?status="+s+"&user="+u;
            fetch(link).then(function(l){
                return l.text();
            }).then(function(i){
                console.log('data', i);
            }).catch(function(e){
                console.log("error => ", e);
            });
        }



        function activeUsers() {
            showLoader();
            updateUserStatus("yes", "NULL");
            var query = $('#search_online_mean').val();
            var link = "{{asset('/')}}getActiveusers?query="+query;
            fetch(link).then(function (l) {
                hideLoader();
                return l.text();
            }).then(function (l) {
                hideLoader();
                    $("#activeUsers").html(l);
            }).catch(function (e) {
                hideLoader();
                console.log('error', e)
            });
        }


        $("#search_online_mean").keyup(function(){
            activeUsers();
        });

        $("#modelLink").click(function(){
            showLoader();
        });
        // active users



    function logoutButton(){
        updateUserStatus("no", "NULL");
        window.location.href = "{{asset('/')}}logout";
    }


    (activeUsers())
    (change())



    (changeStatus())

    </script>