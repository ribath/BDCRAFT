<!DOCTYPE html>
<html lang="en-gb" ng-app="handicrafts">
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>
        Handicraft | Bangladesh
    </title>
    <link href="<?=asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=asset('css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=asset('css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?=asset('css/price-range.css')?>" rel="stylesheet">
    <link href="<?=asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?=asset('css/responsive.css')?>" rel="stylesheet">
    <link href="<?=asset('css/component.css')?>" rel="stylesheet">
    <link href="<?=asset('css/default.css')?>" rel="stylesheet">
    <link href="<?=asset('css/main.css')?>" rel="stylesheet"> <!--header top er background color -->


   {{-- <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">--}}
    <link href="<?=asset('css/scrollTop.css')?>" rel="stylesheet">
    <script src="<?=asset('js/modernizr.custom.js')?>"></script>

    <style type="text/css">
        body
        {
            background-image: url("image/swirl.png");
            background-repeat: repeat;
        }
        .navbar
        {
            background:#345;
            color:#FFF;

            position:absolute;
            top:130px;
            left:100px;
            right:100px;
        }
        .fixed
        {
            position:fixed;
            left:0px;
            right:0px;
            top:0;
        }
    </style>


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
                    <a  href="www.handicraft.com"><img src="<?=asset('image/logo.png')?>" alt="Handicraft"></a>
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
                                {{--<a style="color: #8a6d3b" class="navbar-brand" href="/stores">Stores</a>
                                &nbsp; &nbsp;&nbsp;&nbsp;--}}
                                <a style="color: #8a6d3b" class="navbar-brand" href="http://localhost:8080/bdcraft/public/">Home</a>
                                &nbsp; &nbsp;&nbsp;&nbsp;
                                <a style="color: #8a6d3b" class="navbar-brand" href="/contact-us">Contact us</a>
                                &nbsp; &nbsp;&nbsp;&nbsp;
                                <a style="color: #8a6d3b" class="navbar-brand" href="/account">My Account</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <a style="color: #8a6d3b" class="navbar-brand" href="{{url('login')}} ">Sign in</a>

                                <a style="color: #8a6d3b" class="navbar-brand" href="http://localhost:8080/bdcraft/public/cart?">Cart</a>



                                {{--
                                                                <form action="login">

                                                                    <button type="submit">Sign in</button>
                                                                </form>--}}


                                {{--<form action="cart">

                                    <a style="color: #8a6d3b" class="navbar-brand" href="http://localhost:8080/bdcraft/public/cart?">Cart</a>

                                    --}}{{--<button type="submit" style="color: #8a6d3b" class="navbar-brand">Cart</button>--}}{{--

                                </form>--}}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>








@yield('content')







<br>
<br>
        <!--footer-->
<footer id="footer">
<div  class=".container-fluid">
    <div style="background:grey" class="row">
        <div class="col-xs-6  col-md-1 "> </div>
        <div class="col-xs-12  col-md-2 ">
            <br><h4>Customer Support</h4>

            <a style="color:white" href="">Order</a> <br>
            <a style="color:white" href="">click and collect</a> <br>
            <a style="color:white" href="">delivery</a> <br><br><br><br>
        </div>
        <div class="col-xs-6 col-md-2 ">
            <br><h4>Ways to shop</h4>

            <a style="color:white" href="">Order</a> <br>
            <a style="color:white" href="">click and collect</a> <br>
            <a style="color:white" href="">delivery</a> <br><br><br><br>
        </div>

        <div class="col-xs-6  col-md-2 ">
            <br><h4>About Handicraft </h4>

            <a style="color:white" href="">Order</a> <br>
            <a style="color:white" href="">click and collect</a> <br>
            <a style="color:white" href="">delivery</a> <br><br><br><br>
        </div>
        <div class="col-xs-6 col-md-2 ">
            <br><h4>Essential info</h4>

            <a style="color:white" href="">Order</a> <br>
            <a style="color:white" href="">click and collect</a> <br>
            <a style="color:white" href="">delivery</a> <br><br><br><br>
        </div>

        <div class="col-xs-6  col-md-3 ">
            <br><h4>Handicraft Cub</h4>

            <a style="color:white" href="">Order</a> <br>
            <a style="color:white" href="">click and collect</a> <br>
            <a style="color:white" href="">delivery</a> <br><br><br><br>
        </div>



    </div>
    <div style="background:white" class="row">

        <div class="col-xs-6 col-md-1"> </div>
        <div class="col-xs-6 col-md-5">
            <p> <br> <br> Handicraft is a registered trademark of Handicraft Trading Ltd.</p> </div>
        <div class="col-xs-6 col-md-2 col-md-offset-2">
            <br> <br>

            <form name="_xclick" target="paypal" action="" method="post">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="item_name" value="HTML book">
                <input type="hidden" name="amount" value="24.99">
                <input type="image" src="http://www.paypal.com/en_US/i/btn/sc-but-01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
                <input type="hidden" name="add" value="1">
            </form>
        </div>

    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!-- scroll to top -->
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="glyphicon glyphicon-plane"></i>
	</span>
</div>

<script>  <!-- show and hide the button -->

    $(function(){

        $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });
    });
</script>

<script> <!-- scroll to the top -->

    $(function(){

        $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });

        $('.scroll-top-wrapper').on('click', scrollToTop);
    });

    function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }
</script>

<script>
    var num = 130; //number of pixels before modifying styles

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('.navbar').addClass('fixed');
        } else {
            $('.navbar').removeClass('fixed');
        }
    });
</script>

    </footer>


<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/controllers/MainControllers.js') ?>"></script>



</body>
</html>