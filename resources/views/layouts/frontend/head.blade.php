
<!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!--<link rel="apple-touch-icon" sizes="57x57" href="{{asset('/')}}images/fevicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}images/fevicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}images/fevicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}images/fevicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}images/fevicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}images/fevicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}images/fevicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}images/fevicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}images/fevicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/')}}images/fevicon/android-icon-192x192.png">-->

    <!--favicon-->
    <link rel="icon" href="{{asset('/')}}images/fevicon/favicon-16x16.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--<link rel="stylesheet" href="{{asset('/')}}css/custome.css">

    
    <link rel="stylesheet" href="{{asset('/')}}css/flexslider.css">
    <link rel="stylesheet" href="{{asset('/')}}css/star-rating-svg.css">
    
    <link rel="stylesheet" href="{{asset('/')}}css/select2.css">
    <link rel="stylesheet" href="{{asset('/')}}css/toggle.css">
    <link rel="stylesheet" href="{{asset('/')}}css/table.css">
    <link href="{{asset('/')}}css/multi-select-calender.css" rel="stylesheet">
    <link href="{{asset('/')}}css/rateyo.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/nav_bar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/custom/footer.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174467407-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-174467407-1');

    </script>
        <script>
            function alertMessage(m, t = 'g'){
                if(t != 'g'){
                    document.getElementById("alertMsg").style.display = "block";
                    document.getElementById("role-message").classList.add('alert-danger');
                    document.getElementById('typeMsg').innerHTML = 'Warning!';
                    document.getElementById("message").innerHTML = m;
                }else{
                    document.getElementById("alertMsg").style.display = "block";
                    document.getElementById("role-message").classList.add('alert-success');
                    document.getElementById("message").innerHTML = m;

                }
            }

            function successMsg(m, t = 'g'){
                document.getElementById("alertMsg").style.display = "block";
                document.getElementById("role-message").classList.add('alert-success');
                document.getElementById("message").innerHTML = m;
            }

            function warningMsg(m, t = 'g'){
                document.getElementById("alertMsg").style.display = "block";
                document.getElementById("role-message").classList.add('alert-danger');
                document.getElementById('typeMsg').innerHTML = 'Warning!';
                document.getElementById("message").innerHTML = m;
            }

            function hideMessage(){
                document.getElementById("alertMsg").style.display = "none";
            }
            function hideLoader(){
                document.getElementById("back").style.display = "none";
            }
            function changeStatus(){
                var link = "{{asset('/')}}activeUser";
                fetch(link).then(function (s) {
                    return s.text();
                }).then(function(i){
                    console.log('done');
                }).catch(function (e) {
                    console.log('error => ', e);
                });
            }

            function showLoader(){
                    changeStatus();
                    document.getElementById("back").style.display = "block";
            }
        </script>

