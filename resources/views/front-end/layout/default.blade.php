<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/jquery.mb.YTPlayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/lnr-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/build/vendor_assets/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/src/style.css') }}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-end/build/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}">
    @yield('styles')
</head>

<body>
    <section class="">
        <div class="">
            <div class="intro-area-11 pb-0">
                @include('front-end.layout.components.header')
                {{-- @yield('slider') --}}
            </div><!-- ends: .intro-area-11 -->
        </div>
    </section><!-- ends: .intro-area -->
    @yield('slider')
    <div id="rev_slider_17_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider3" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
        <div id="rev_slider_17_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-40" data-transition="fade,slotfade-horizontal" data-slotamount="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Elastic.easeOut,default" data-easeout="Elastic.easeIn,default" data-masterspeed="300,default" data-thumb="assets/100x50_b4995-slider_bg1.jpg" data-delay="6010" data-rotate="0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="/front-end/build/img/slider_bg10.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="3000" data-ease="Power3.easeOut" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="15" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzm_40" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-40-layer-2" data-x="" data-y="center" data-voffset="-210" data-width="['auto']" data-height="['auto']" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-40-layer-3" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="75%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  tp-no-events   tp-resizeme" id="slide-40-layer-5" data-x="" data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on" data-fontsize="['50', '45', '40', '32']" data-lineheight="['64', '55', '43', '38']" data-frames='[{"delay":"+0","split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; max-width: 930px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 600; color: #ffffff; letter-spacing: 0px; display: block;pointer-events:none;">
                                    When One Idea <br>
                                    Changes Everything
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" id="slide-40-layer-6" data-x="" data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on" data-fontsize="['20', '20', '18', '16']" data-lineheight="['36', '36', '24', '22']" data-frames='[{"delay":"+2600","speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[35,35,35,35]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; max-width: 731px; white-space: normal; font-size: 20px; line-height: 36px; font-weight: 400; color: #ffffff; letter-spacing: 0px; display: block;">
                                    We activate brands through cultural insight strategic <br> vision, and the motion
                                    across.
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption" id="slide-40-layer-10" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+3600","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: normal; display: inline-block;">
                                    <a href="#" class="btn btn--rounded btn-secondary">Learn More</a></div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption" id="slide-40-layer-11" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+3800","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[30,30,30,30]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: normal; display: inline-block;">
                                    <a href="#" class="btn btn--rounded btn-outline-light">Learn More</a></div>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption  " id="slide-40-layer-4" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="25%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; width: 100%;"></div>
                        </div>
                    </div>
                </li>
            </ul>
            <div style="" class="tp-static-layers">
                <!-- LAYER NR. 15 -->
                <div class="tp-caption   tp-static-layer" id="slider-17-layer-1" data-x="right" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-responsive="on" data-startslide="0" data-endslide="1" data-visibility="['on', 'on', 'off', 'off']" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                    <div class="form-wrapper cardify card--rounded">
                        <h5 class="color-dark text-center">Request A Call Back</h5>
                        <form action="#">
                            <input type="text" placeholder="Your Name" class="form-control fc--rounded mb-4">
                            <input type="text" placeholder="Phone Number" class="form-control fc--rounded mb-4">
                            <div class="form-group mb-4">
                                <div class="select-basic">
                                    <select class="form-control fc--rounded">
                                        <option>Business Planning</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary btn--rounded btn-block">Request Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

    @yield('content')

    @include('front-end.layout.components.footer')

    @include('front-end.components.login-modal')

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery/uikit.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/revolution/jquery.themepunch.revolution.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script
        src="{{ asset('front-end/build/vendor_assets/js/revolution/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('front-end/build/vendor_assets/js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/grid.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.camera.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.easing1.3.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('front-end/build/vendor_assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-end/build/theme_assets/js/main.js') }}"></script>
    <script src="{{ asset('front-end/build/theme_assets/js/map.js') }}"></script>
    <script src="{{ asset('front-end/build/theme_assets/js/revolution.slider.init.js') }}"></script>
    <!-- endinject-->
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // $('.datepicker').datepicker();
        $('.numbers').mask('000.000.000.000.000.000.000.000.000.000.000.000');

        function numbers(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
    @yield('scripts')
</body>

</html>
