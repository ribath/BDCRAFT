<!DOCTYPE html>
<html lang="en-gb">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>
        Handicraft | Bangladesh
    </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet"> <!--header top er background color -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--easing js-->

    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
    <link href="{{asset('css/scrollTop.css')}}" rel="stylesheet">



    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('image/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('image/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('image/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('image/ico/apple-touch-icon-57-precomposed.png')}}">

</head>


<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->



    <div class="header-middle">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-3 col-sm-4 col-xs-5 logo">
                    <a  href="www.handicraft.com"><img src="{{asset('image/logo.png')}}" alt="Handicraft"></a>
                </div>


                <div class="col-lg-9">

                    <div class="shop-menu pull-right">
                        <!--<ul class="navigation menu-primary">
                            <li><a href="/contact-us">Contact us</a></li>
                            <li class="menu_item"><span class="nav_dot"></span><a id="ctl00_hchdr1_myaccountlink1" href="https://www.hobbycraft.co.uk/myaccount">My Account</a></li>
                        <li class="menu_item"><span class="nav_dot"></span><a id="ctl00_hchdr1_signinlink1" href="https://www.hobbycraft.co.uk/login">Sign in</a></li></ul>
                        -->
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <!--<a class="navbar-brand" href="#">Contact us</a>-->
                                <a style="color: #8a6d3b" class="navbar-brand" href="/contact-us">Contact us</a>
                                &nbsp; &nbsp;&nbsp;&nbsp;
                                <a style="color: #8a6d3b" class="navbar-brand" href="/account">My Account</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a style="color: #8a6d3b" class="navbar-brand" href="/signin">Sign in</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--collappsible nav bar-->




</header>


@yield('content')
</body>
</html>