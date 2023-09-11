@extends('frontend.layouts.app')
@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        /* The grid: Four equal columns that floats next to each other */
        .column {
            float: left;
            width: 15%;
            padding: 20px;
        }

        /* Style the images inside the grid */
        .column img {
            opacity: 0.8;
            cursor: pointer;
        }

        .column img:hover {
            opacity: 1;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The expanding image container */
        .containers {
            position: relative;
            display: none;
            margin-left: 20%;
        }

        /* Expanding image text */
        #imgtext {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: white;
            font-size: 20px;
        }

        /* Closable button inside the expanded image */
        .closebtn {
            position: absolute;
            top: 10px;
            right: 15px;
            color: white;
            font-size: 35px;
            cursor: pointer;
        }
    </style>
    <main class="xs-main">
        <section class="xs-banner-inner-section parallax-window"
            style="background-image: url({{ asset('/setting/banner/' . $banner->banner) }});">
            <div class="xs-black-overlay"></div>
            <div class="container">
                <div class="color-white xs-inner-banner-content">
                    <h2>Gallery</h2>
                </div>
            </div>
        </section>
        <section class="xs-content-section-padding">
            <div class="container" style="max-width: 80%;">
                <div class="containers" style="max-width: 100%;">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg" style="max-width: 100%;">
                    <div id="imgtext"></div>
                </div>

                @if ($galary)
                    <div class="row">
                        @foreach ($galary as $g)
                            <div class="column" style="max-width: 50%;">
                                <img src="{{ asset('/setting/banner/' . $g) }}" alt="" style="width:80%"
                                    onclick="myFunction(this);">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="align-content-center text-center">
                        <h1>Sorry there are no photos!!!!</h1>
                    </div>
                @endif

            </div>



            <script>
                function myFunction(imgs) {
                    var expandImg = document.getElementById("expandedImg");
                    var imgText = document.getElementById("imgtext");
                    expandImg.src = imgs.src;
                    imgText.innerHTML = imgs.alt;
                    expandImg.parentElement.style.display = "block";
                }
            </script>

        </section>
    @endsection
