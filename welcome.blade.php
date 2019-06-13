<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{$title}}</title>

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

    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slider_styles space-left space-top" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <div class="slotholder"></div>
            <ul><!-- SLIDE  -->

                <!-- SLIDE 1 -->
                <li data-index="rs-3049" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{asset('app/images/slides/slides1.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide"
                         id="slide-3049-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-77','-77']"
                         data-fontsize="['72','72','45','35']"
                         data-lineheight="['30','30','45','35']"
                         data-fontweight="['700','700','700','700']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[18,18,18,18]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0"
                         data-paddingleft="[0,0,0,0]"

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title"
                         id="slide-3049-layer-4"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','0','0']"
                         data-fontsize="['16',16','14','14']"
                         data-fontweight="['300','300','300','300']"
                         data-width="660"
                         data-height="none"
                         data-lineheight="['16','16','16','16']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                      

                    <a 
                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['188','188','188','50']"
                       data-width="['auto']"
                       data-fontsize="['13',13','11','11']"
                       data-fontweight="['500','500','500','500']"
                       data-lineheight="['46','46','38','38']"
                       data-paddingright="['23','23','23','23']"
                       data-paddingleft="['26','26','26','26']"
                       data-height="['auto']">
                    </a><!-- END LAYER LINK -->
                </li>

                <!-- SLIDE 2 -->
                <li data-index="rs-3050" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{asset('app/images/slides/slides2.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide"
                         id="slide-3049-layer-2"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-77','-77']"
                         data-fontsize="['72','72','45','35']"
                         data-lineheight="['60','60','45','35']"
                         data-fontweight="['700','700','700','700']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[18,18,18,18]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0"
                         data-paddingleft="[0,0,0,0]"

                         </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title"
                         id="slide-3049-layer-5"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','0','0']"
                         data-fontsize="['16',16','14','14']"
                         data-fontweight="['300','300','300','300']"
                         data-width="660"
                         data-height="none"
                         data-lineheight="['16','16','16','16']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                    </div>

                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['188','188','188','50']"
                       data-width="['auto']"
                       data-fontsize="['13',13','11','11']"
                       data-fontweight="['500','500','500','500']"
                       data-lineheight="['46','46','38','38']"
                       data-paddingright="['23','23','23','23']"
                       data-paddingleft="['26','26','26','26']"
           
                    </a><!-- END LAYER LINK -->
                </li>

                <!-- SLIDE 3 -->
                <li data-index="rs-3046" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{asset('app/images/slides/slides3.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide"
                         id="slide-3047-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-77','-77']"
                         data-fontsize="['72','72','45','35']"
                         data-lineheight="['60','60','45','35']"
                         data-fontweight="['700','700','700','700']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[18,18,18,18]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0"
                         data-paddingleft="[0,0,0,0]"

                          </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title"
                         id="slide-3049-layer-6"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','0','0']"
                         data-fontsize="['16',16','14','14']"
                         data-fontweight="['300','300','300','300']"
                         data-width="660"
                         data-height="none"
                         data-lineheight="['16','16','16','16']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         
                    </div>

                    <a 

                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['188','188','188','50']"
                       data-width="['auto']"
                       data-fontsize="['13',13','11','11']"
                       data-fontweight="['500','500','500','500']"
                       data-lineheight="['46','46','38','38']"
                       data-paddingright="['23','23','23','23']"
                       data-paddingleft="['26','26','26','26']"
                     
                    </a><!-- END LAYER LINK -->
                </li>

                <!-- SLIDE 4 -->
                <li data-index="rs-3048" data-transition="slideremoveright" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('app/images/slides/slides4.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide"
                         id="slide-3048-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-77','-77']"
                         data-fontsize="['72','72','45','35']"
                         data-lineheight="['60','60','45','35']"
                         data-fontweight="['700','700','700','700']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[18,18,18,18]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0"
                         data-paddingleft="[0,0,0,0]"

                        </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title style_subtitle"
                         id="slide-3049-layer-7"
                         data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['55','55','0','0']"
                         data-fontsize="['16',16','14','14']"
                         data-fontweight="['300','300','300','300']"
                         data-width="660"
                         data-height="none"
                         data-lineheight="['16','16','16','16']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         

                    <a 

                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['188','188','188','50']"
                       data-width="['auto']"
                       data-fontsize="['13',13','11','11']"
                       data-fontweight="['500','500','500','500']"
                       data-lineheight="['46','46','38','38']"
                       data-paddingright="['23','23','23','23']"
                       data-paddingleft="['26','26','26','26']"
           
                    </a><!-- END LAYER LINK -->
                </li>
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->


    <section  style="padding-bottom:0px;background-color: #ddf0fb;" class="flat-row flat-detail pd-top-70">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="wrap-event">
                        <div class="event-title">
                            <div style="margin-bottom: 16px;" class="title-section color-title left">
                                <h1 align="center" class="title">UPCOMING <span class="color-orange">EVENTS</span></h1>

                            </div>
                        </div><!-- detail-event-title -->

                        @foreach($EVENTS->posts()->orderBy('created_at','asc')->take(2)->get() as $post)

                        <div class="dividers h20">
                        </div><!-- dividers -->
                        <div class="wrap-event-times" style="margin-bottom:0px">
                            <ol class="wrap-times content mCustomScrollbar">
                                <li>
                                    <article class="times-body">
                                        <div class="time-list">
                                            <p class="number-mon" style="font-size:19px"><h2><strong>{{ \Carbon\Carbon::parse($post->date_time)->format('j F')  }}</strong></h2> </p>

                                        </div>
                                        <div class="times-meta">
                                            <h6 class="my-font" style="color:#000000;">{{$post->title}}</h6>
                                            <p class="evt-dtl"><a target="_blank" href="files/invitation-for-research-proposal.pdf"><span style="padding-left:0px;font-size: 18px;color: #468b10;">{{$post->content}}</span></a></p>


                                        </div>
                                    </article>
                                </li>
                                <li>

                                </li>



                            </ol>
                        </div><!-- wrap-event-times -->
                    </div>
                </div>

                @endforeach
            </div>
        </div><!-- container -->

    </section>


</div>

</div>
<section class="flat-row bg-theme flat-contact">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe-contact wrap-box pdfull" style="background-color: #ddf0fb;">
                    <div class="title-section">
                        <h1 style="text-transform:uppercase;margin-bottom: 20px;" class="title"></h1>
                        <h1 style="text-transform:uppercase;margin-bottom: 20px;" class="title text-center"></h1>

                        <h1 class="title about-sub">V :</h1>

                        <div align="left" class="sub-title">
                           
                        </div>

                        <h1 class="title about-sub">Mn :</h1>

                        <div align="left" class="sub-title">

                       
                    <div align="center">
                        <div class="wrap-btn">

           
                        </div>
                    </div>
                </div><!-- subscribe-contact -->
            </div><!-- Col-md-12 -->
        </div><!-- row -->
    </div><!-- Container -->

</section>


<section class="flat-row bg-theme flat-contact" style="background-color: #ddf0fb;">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="subscribe-contact wrap-box pdfull">
                    <div class="title-section">
                        <h1 style="text-transform:uppercase;margin-bottom: 30px;text-align:left;" class="title text_centre"></h1>
                        
                    </div>
                    <div align="center">
                        <div class="wrap-btn">
                        </div>
                    </div>
                </div><!-- subscribe-contact -->
            </div><!-- Col-md-12 -->
            <div class="col-md-6">
                <div class="subscribe-contact wrap-box pdfull">
                    <div class="title-section">
                        <h1 style="text-transform:uppercase;margin-bottom: 30px;text-align:left;" class="title"></h1>

                   
                        
                    </div>
                    <div align="center">
                        <div class="wrap-btn">
                          
                        </div>
                    </div>
                </div><!-- subscribe-contact -->
            </div><!-- Col-md-12 -->
        </div><!-- row -->
    </div><!-- Container -->

</section>

<section class="flat-row bg-theme flat-contact">
    <div class="container">
        <div class="row">
            <!-- col.md-8 -->
            <!-- col.md-4 -->
        </div><!-- row -->
    </div><!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-contact">

                </div>
            </div>
        </div>
    </div><!-- Container -->
    <div class="container-fluid">
    </div>    <div class="row medium-padding120 bg-border-color">


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe-contact wrap-box pdfull" style="background-color: #ddf0fb;">
                        <div class="title-section">
                            
                        </div>
                        <div align="center">
                            
                        </div>
                    </div><!-- subscribe-contact -->
                </div><!-- Col-md-12 -->
            </div><!-- row -->
        </div><!-- Container -->
<!-- Footer -->
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
                    <h3 style="color:white;font-weight:bold" class="widget-title">Important Links</h3>
                    
                </div><div class="col-md-4 col-sm-12">
                    <div class="footer widget widget-our-services" style="padding-left: 0px;">
                        <h3 style="text-align:center;margin-bottom: 5px;" class="widget-title"></h3>
                        
                    </div><!-- /.wiget-categories -->
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
                    <div class="col-md-6 col-sm-12">
                      
                    </div>
                </div>
            </div>
        </div><!-- bottom -->


        <a class="go-top show"></a>
</div><!-- Boxed -->

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