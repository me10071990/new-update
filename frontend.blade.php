<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('app/stylesheets/bootstrap.css')}}" >

    <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('app/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('app/stylesheets/responsive.css')}}">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('app/stylesheets/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" >

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('app/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/revolution/css/settings.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Favicon and touch icons  -->
    <link href="{{asset('app/icon/favicon.png')}}" rel="shortcut icon">

    <!--[if lt IE 9]>
    <script src="{{asset('app/javascript/html5shiv.js')}}"></script>
    <script src="{{asset('app/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading</h2>
    </div>
</section>

<!-- Boxed -->
<div class="boxed position_form">
    <div class="wrap-header clearfix">

        @include('includes.header')





    </div>



    @yield('content')


    <section class="flat-row bg-theme flat-contact" style="background-color: #ddf0fb;">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   </div>
                        </div>

        </div>
    </section>
                    </div><!-- subscribe-contact -->
                </div><!-- Col-md-12 -->
                    </div><!-- row -->
        </div><!-- Container -->




    </section>






<footer id="footer" class="footer style2">
    <div class="container">
        <div class="footer-information">
            <div class="row">
                <div class="col-md-4 col-sm-6 info-left">
                    <div class="logo-footer">
                        <a href="index.html"><img src="{{asset('app/images/mylogo.png')}}" alt="image"></a>
                    </div><!-- logo-footer -->
                    <ul class="flat-socials">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>

                    </ul>
                </div><!-- col-md-6 -->
                <div class="col-md-4 col-sm-6 info-left">
                  
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="research.html">Research</a></li>
                        <li><a href="news-and-publications.html">News and Publications</a></li>
                        <li><a href="people.html">People</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact Us</a></li>

                    </ul>
                </div><div class="col-md-4 col-sm-12">
                    
                </div><!-- col-md-6 -->
            </div><!-- row -->
        </div><!-- footer-information -->
        <!-- footer-widget -->
    </div><!-- container -->
</footer>

<div class="bottom style2">

    <div class="container">
        <div class="copyright">
            
            <div class="col-md-6 col-sm-12">
                
            </div>
        </div>
    </div>
</div><!-- bottom -->


<!-- Javascript -->
<script type="text/javascript" src="{{asset('app/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('app/js/jquery.flexslider.js')}}"></script>
<script src="{{ asset('js/toastr.min.js') }}" ></script>


<!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('app/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>



<script>

    @if(Session::has('subscribed'))

    toastr.success("{{Session::get('subscribed')}}")
    @endif


</script>


</body>
</html>