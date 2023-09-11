<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 07:49:13 GMT -->

<head>
    <meta charset="utf-8">
    <title>{{ app_name() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', app_name())">
    <meta name="keywords" content="Education Consultants, USA Study Visa, Study Visa, Study Abroad Consultants, Study Visa For USA, Study in USA, Grace Education, " />
    <link rel="canonical" href="index.html">
    @yield('meta')
    <!-- responsive tag -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(get_setting('favicon')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(get_setting('favicon')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(get_setting('favicon')) }}">
    <link rel="manifest" href="{{ asset(get_setting('favicon')) }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


    <meta name="google-site-verification" content="W0apjtnnwb19hnHEXcsi6wq3R6GgJpFbAGQjakbqKBc" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SCJGVNGDK6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SCJGVNGDK6');
    </script>



    </script>
    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "LocalBusiness",
            "name": "7 Sky Consultancy Pvt Ltd",
            "url": "https://www.7skyconsultancy.com/",
            "sameAs": [
                "https://www.facebook.com/7skyconsultancy/",
                "https://www.linkedin.com/in/7-sky-consultancy-5bb182228/",
                "https://twitter.com/7skyconsultancy/",
                "https://www.instagram.com/7skyconsultancy/",
                "https://www.youtube.com/channel/UCgXaiMMZQkZcGdq8cshvTlQ",
                "https://www.pinterest.com/7skyConsultancy/"
            ],
            "logo": "https://www.7skyconsultancy.com/assets/images/logo.png",
            "image": "https://www.7skyconsultancy.com/assets/images/study-in-uk.jpg",
            "description": "7 Sky Consultancy Pvt Ltd is located in Lahore is founded by a group of people having wide experience in overseas study abroad consultants in pakistan.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Main Canal Rd,9-B Upper Mall Scheme",
                "addressLocality": "Lahore",
                "addressRegion": "Punjab",
                "postalCode": "54700",
                "addressCountry": "Pakistan"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "31.5493888,74",
                "longitude": "3553914,15z"
            },
            "priceRange": "Contact for Quote",
            "telephone": "03078488738",
            "AggregateRating": {
                "ratingValue": "4.9",
                "bestRating": "5.0",
                "ratingCount": "22"
            }
        }
    </script>


</head>


<body>

    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <script src="{{ asset('assets/js/jssor.slider-28.1.0.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [{
                    $Duration: 500,
                    $Delay: 12,
                    $Cols: 10,
                    $Rows: 5,
                    $Opacity: 2,
                    $Clip: 15,
                    $SlideOut: true,
                    $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                    $Assembly: 2049,
                    $Easing: $Jease$.$OutQuad
                },
                {
                    $Duration: 500,
                    $Delay: 40,
                    $Cols: 10,
                    $Rows: 5,
                    $Opacity: 2,
                    $Clip: 15,
                    $SlideOut: true,
                    $Easing: $Jease$.$OutQuad
                },
                {
                    $Duration: 1000,
                    x: -0.2,
                    $Delay: 20,
                    $Cols: 16,
                    $SlideOut: true,
                    $Formation: $JssorSlideshowFormations$.$FormationStraight,
                    $Assembly: 260,
                    $Easing: {
                        $Left: $Jease$.$InOutExpo,
                        $Opacity: $Jease$.$InOutQuad
                    },
                    $Opacity: 2,
                    $Outside: true,
                    $Round: {
                        $Top: 0.5
                    }
                },
                {
                    $Duration: 1600,
                    y: -1,
                    $Delay: 40,
                    $Cols: 24,
                    $SlideOut: true,
                    $Formation: $JssorSlideshowFormations$.$FormationStraight,
                    $Easing: $Jease$.$OutJump,
                    $Round: {
                        $Top: 1.5
                    }
                },
                {
                    $Duration: 1200,
                    x: 0.2,
                    y: -0.1,
                    $Delay: 16,
                    $Cols: 10,
                    $Rows: 5,
                    $Opacity: 2,
                    $Clip: 15,
                    $During: {
                        $Left: [0.3, 0.7],
                        $Top: [0.3, 0.7]
                    },
                    $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                    $Assembly: 260,
                    $Easing: {
                        $Left: $Jease$.$InWave,
                        $Top: $Jease$.$InWave,
                        $Clip: $Jease$.$OutQuad
                    },
                    $Round: {
                        $Left: 1.3,
                        $Top: 2.5
                    }
                },
                {
                    $Duration: 1500,
                    x: 0.3,
                    y: -0.3,
                    $Delay: 20,
                    $Cols: 10,
                    $Rows: 5,
                    $Opacity: 2,
                    $Clip: 15,
                    $During: {
                        $Left: [0.2, 0.8],
                        $Top: [0.2, 0.8]
                    },
                    $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                    $Assembly: 260,
                    $Easing: {
                        $Left: $Jease$.$InJump,
                        $Top: $Jease$.$InJump,
                        $Clip: $Jease$.$OutQuad
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                },
                {
                    $Duration: 1500,
                    x: 0.3,
                    y: -0.3,
                    $Delay: 20,
                    $Cols: 10,
                    $Rows: 5,
                    $Opacity: 2,
                    $Clip: 15,
                    $During: {
                        $Left: [0.1, 0.9],
                        $Top: [0.1, 0.9]
                    },
                    $SlideOut: true,
                    $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                    $Assembly: 260,
                    $Easing: {
                        $Left: $Jease$.$InJump,
                        $Top: $Jease$.$InJump,
                        $Clip: $Jease$.$OutQuad
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                }
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 16,
                    $SpacingY: 16
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1920;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 053 css*/
        .jssorb053 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb053 .i .b {
            fill: #fff;
            fill-opacity: 0.3;
        }

        .jssorb053 .i:hover .b {
            fill-opacity: .7;
        }

        .jssorb053 .iav .b {
            fill-opacity: 1;
        }

        .jssorb053 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 093 css*/
        .jssora093 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora093 .c {
            fill: none;
            stroke: #fff;
            stroke-width: 400;
            stroke-miterlimit: 10;
        }

        .jssora093 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 400;
            stroke-miterlimit: 10;
        }

        .jssora093:hover {
            opacity: .8;
        }

        .jssora093.jssora093dn {
            opacity: .6;
        }

        .jssora093.jssora093ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- pointer js -->
    <script src="{{ asset('assets/js/pointer.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function sendinquiry() {
            $("#error").hide();
            $("#success").hide();
            var validation = true;
            var name = $("#clientname").val();
            var email = $("#clientemail").val();
            var phone = $("#clientphone").val();
            var qualification = $("#clientqualification").val();
            var interest = $("#clientinterest").val();
            var prefer = $("#clientprefer").val();
            var message = $("#clientmessage").val();
            var roompkg = $("#roompkg").val();
            var adult = $("#adult").val();
            var infant = $("#infant").val();
            var child = $("#child").val();
            var makkahnights = $("#makkahnights").val();
            var madinanights = $("#madinanights").val();

            if (email == "" || validation == false) {
                $("#clientemail").css("border-color", "red");
                validation = false;
            } else {
                $("#clientemail").css("border-color", "green");
                validation = true;
            }
            if (phone == "" || validation == false) {
                $("#clientphone").css("border-color", "red");
                validation = false;
            } else {
                $("#clientphone").css("border-color", "green");
                validation = true;
            }
            if (validation == true) {
                $("#error").hide();
                $("#success").show();
                $("#success").css("color", "blue");
                $("#success").html("Please wait! Inquiry is sending...");

                $.post("main-mail.html", {
                        name: name,
                        email: email,
                        phone: phone,
                        qualification: qualification,
                        interest: interest,
                        prefer: prefer,
                        message: message,
                        infant: infant,
                        acc: roompkg,
                        makkah: makkahnights,
                        medinah: madinanights,
                        email: email

                    },
                    function(response) {
                        if (response == "Inquiry is sent successfully...") {
                            $("#success").css("color", "green");
                            $("#success").html(response);
                            $("#clientname").val("");
                            $("#clientemail").val("");
                            $("#clientphone").val("");
                            $("#clientqualification").val("");
                            $("#clientinterest").val("");
                            $("#clientprefer").val("");
                            $("#clientmessage").val("");
                            $("#roompkg").val("");
                            $("#adult").val("");
                            $("#infant").val("");
                            $("#child").val("");
                            $("#makkahnights").val("");
                            $("#madinanights").val("");
                            //$("#vehicle").val(""); 

                        } else {
                            $("#success").css("color", "red");
                            $("#success").html(response);
                        }

                    });
            } else {
                $("#success").hide();
                $("#error").show();
                $("#error").html("Please fill the required field...");

            }

        }
    </script>
</body>

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 07:49:19 GMT -->

</html>