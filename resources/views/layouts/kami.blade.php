<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MotorcycleShop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
    <!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- header modal -->

    <script>
        $('#myModal88').modal('show');
    </script>  
    <!-- header modal -->
    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
           
            <div class="w3l_logo">
                <h1><a href="/">Motorcycle Shopp</a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="#" method="post">
                        <input type="text" name="Search" placeholder="Search...">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="/" >Home</a></li>  

                        <li><a href="/merek">Merek</a></li> 
                        <li><a href="/tipe">Tipe</a></li> 
                        <li><a href="about.html">About Us</a></li> 
                        <li><a href="mail.html">Mail Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    @include('layouts._flash')
        @yield('content')


        <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Motorcycle Shop</h3>
                <p>Pasti Aman, dan Terpercaya</p>
            </div>
            <div class="col-md-6 w3agile_newsletter_right">
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Merek</h3>
                        @php
                        $merek = App\Merekk::all();
                        @endphp
                    <ul class="info"> 
                        @foreach($merek as $data)
                                <li><a href="{{ url('',$data->merek) }}">{{ $data->merek }}</a></li>
                        @endforeach             
                        
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    @php
                        $tipe = App\Tipe::all();
                        @endphp
                    <h3>Information</h3>
                    <ul class="info"> 
                         @foreach($tipe as $data)
                                <li><a href="{{ url('',$data->namatipe) }}">{{ $data->namatipe }}</a></li>
                                @endforeach
                    </ul>
                </div>
                
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    <ul class="info"> 
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Today's Deals</a></li>
                    </ul>
                    <h4>Follow Us</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                            <li><a href="#" class="google"> </a></li>
                            <li><a href="#" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </div>
    <!-- //footer --> 
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) { 
                }
            }
        });
    </script>  
    <!-- //cart-js -->   
    @yield('scripts')
</body>
</html>