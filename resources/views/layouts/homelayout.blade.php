<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='../../css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Güzelliğin Merkezi | @yield('title')</title>

</head>


<body class="nav-btn-only homepage">
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="index.html" class="brand"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                    
                        <li class="mega-menu-parent has-child"><a href="#nav-pages">Pages</a>
                            <div class="wrapper">
                                <div class="mega-menu">
                                    <div class="nav-wrapper" id="nav-pages">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">General</h4>
                                                    <ul>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="submit.html">Submit Listing</a></li>
                                                        <li><a href="detail.html">Listing Detail</a></li>
                                                        <li><a href="detail-2.html">Listing Detail v2</a></li>
                                                        <li><a href="agents-listing.html">Agents Listing</a></li>
                                                        <li><a href="agent-detail.html">Agent Detail</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">User</h4>
                                                    <ul>
                                                        <li><a href="profile.html">Profile Edit</a></li>
                                                        <li><a href="reset-password.html">Reset Password</a></li>
                                                        <li><a href="my-listings.html">My Listings</a></li>
                                                        <li><a href="edit-listing.html">Edit Listing</a></li>
                                                        <li><a href="reviews.html">Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                               
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="image center overlay">
                                                        <div class="vertical-aligned-elements">
                                                            
                                                        </div>
                                                        <div class="bg-transfer"><img src="assets/img/items/10.jpg" alt=""></div>
                                                    </div>
                                                </div>
                                                <!--end col-md-3-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end container-->
                                    </div>
                                    <!--end collapse-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end mega-menu-->
                        </li>
                        
                        <li><a href="blog.html">Blog</a></li>
                        
                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->
                <div class="secondary-nav">
                    <a href="sign-in.html">Giriş Yap</a>
                    <a href="{{route('kullanicikayit')}}">Kayıt Ol-Kullanıcı</a>
                    <a href="{{route('isletmekayit')}}">Kayıt Ol-İşletme</a>
                </div>
                <!--end secondary-nav-->
                
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->
    @yield('content')
    
    <footer id="page-footer">
    
        <div class="footer-wrapper">
            <div class="block">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">
                            <p data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam at neque sit amet vestibulum. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                        </div>
                        <div class="element width-50 text-align-right">
                            <a href="#" class="circle-icon"><i class="social_twitter"></i></a>
                            <a href="#" class="circle-icon"><i class="social_facebook"></i></a>
                            <a href="#" class="circle-icon"><i class="social_youtube"></i></a>
                        </div>
                    </div>
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-50">
                            <img src="assets/img/footer-bg.png" alt="">
                        </div>
                    </div>
                    <!--end background-wrapper-->
                </div>
            </div>
            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">(C) 2016 Your Company, All right reserved</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
    
</div>
<!--end page-wrapper-->


<script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="../../maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="{{asset('assets/js/richmarker-compiled.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/markerclusterer_packed.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/infobox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.trackpad-scroll-emulator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/maps.js')}}"></script>

</body>

</html>