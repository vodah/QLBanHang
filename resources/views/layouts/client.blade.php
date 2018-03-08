<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('client-assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('client-assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('client-assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('client-assets/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('client-assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('client-assets/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('client-assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('client-assets/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed"
          href="{{asset('client-assets/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> {{$user->phone}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$user->email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/cucai.1996"><i class="fa fa-facebook"></i></a></li>
                            <!--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                            <!--                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                            <li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('home.list')}}"><img src="{{asset('client-assets/images/home/logo.png')}}" alt=""/></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <!--                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
                            <!--                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home.list')}}" class="active"><b>Trang Chủ</b></a></li>
                            <li class="dropdown"><a href="#"><b>Sản Phẩm</b></i></a>

                            </li>
                            <li class="dropdown"><a href="#"><b>Tin Tức</b></i></a>

                            </li>
                            <li><a href="{{route('home.gioithieu')}}"><b>Giới Thiệu</b></a></li>
                            <li><a href="{{route('home.lienhe')}}"><b>Liên Hệ</b></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 search_box_style">
                    <div class="search_box pull-right search">
                        <input type="text" placeholder="Tìm kiếm"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    @section('banner')

</section><!--/slider-->


@section('content')
@section('footer')


<script src="{{asset('client-assets/js/jquery.js')}}"></script>
<script src="{{asset('client-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('client-assets/js/price-range.js')}}"></script>
<script src="{{asset('client-assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('client-assets/js/main.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('client-assets/js/gmaps.js')}}"></script>
<script src="{{asset('client-assets/js/contact.js')}}"></script>
</body>
</html>




