@extends('frontend.layouts.app')
@section('content')
    <style>
        .heading {
            text-align: center;
            color: #454343;
            font-size: 40px;
            font-weight: 700;
            position: relative;
            margin-top: -100px;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .red {
            background-color: #fa575d;
            border: none;
        }

        .blue {
            background-color: #011b58;
        }

        .yellow {
            background-color: #f7a900;
        }

        .white-heading {
            color: #1E73BE;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            /* background: url(img/heading-line.png); */
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
            background-color: #1E73BE;
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #1E73BE;
        }
    </style>
    <main class="xs-main">
        @if ($banner != null)
            <section class="xs-banner-inner-section parallax-window mrt"
                style="background-image: url({{ asset('/setting/team/' . $banner->banner) }});">
                <div class="xs-black-overlay"></div>
                <div class="container">
                    <div class="container row">
                        <div class="xs-welcome-wraper banner-verion-2 color-white col-md-8 content-left">
                            <h2 class="xs-title">Team</h2>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section class="xs-section-padding">
            <div class="container">
                <div class="heading white-heading">
                    Team
                </div>
                <div class="row">
                    @foreach ($team as $t)
                        <div class="col-md-6 col-lg-3">
                            <div class="xs-single-team xs-mb-50">
                                <img src="{{ asset('/setting/team/' . $t->image) }}" alt="">
                                <div class="xs-team-content">
                                    <h4>{{ $t->name }}</h4>
                                    <p>{{ $t->type }}</p>
                                    <small style="margin-bottom: 15%">{{ $t->description }}</small>
                                    <svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 270 138">
                                        <path
                                            class="@if ($t->type == 'player') fill-navy-blue @elseif ($t->type == 'coach') fill-red @elseif ($t->type == 'judge') fill-yellow @endif"
                                            d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z"
                                            transform="translate(-375 -3294)" />
                                    </svg>
                                </div>
                                {{-- @if ($t->description != null)
                                    <div
                                        class="card @if ($t->type == 'player') blue @elseif ($t->type == 'coach') red @elseif ($t->type == 'judge') yellow @endif">
                                        <p>{{ $t->description }}</p>
                                    </div>
                                @endif --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
