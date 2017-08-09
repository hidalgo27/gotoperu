@extends('layouts.page.default')

@section('content')

    <div class="position-relative">

        <div id="cd-intro-tagline" class="font-montserrat clearfix">
            {{--<h1>Secondary Fixed Navigation</h1>--}}

            <div class="banner position-relative">
                <img src="{{asset('images/banners/itinerary/machupicchu.jpg')}}"/>
                <div class="box-header container-fluid">
                    <div class="col-md-4">
                        <div class="hidden-xs">
                            <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-5.png')}}" alt="" class="img-responsive margin-top-20"></a>
                            <a href="{{route('home_path')}}" id="cd-logo"><img src="{{asset('images/logos/logo-ave-gotoperu.png')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="hidden-sm hidden-md hidden-lg">
                            <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu.png')}}" alt="" class="img-responsive padding-20"></a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="text-right font-montserrat margin-top-10 hidden-xs">
                            <b class="text-30 margin-right-30 hidden-xs">(813) 454-9707</b>
                        </div>
                        <div class="text-center font-montserrat">
                            <b class="text-30 hidden-sm hidden-md hidden-lg">(813) 454-9707</b>
                        </div>
                    </div>


                    <div class="col-lg-12 text-center hidden-sm">
                        {{--<p class="color-white text-25 no-margin"><b>6 Day</b></p>--}}
                        <h1 class="color-white text-50 color-title-packages">GO TO PERU... WITH US!</h1>
                        {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                    </div>
                </div>
            </div>

            {{--<a href="http://codyhouse.co/?p=296" class="cd-btn">View Offers</a>--}}
            {{--<a href="#0" id="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
        </div> <!-- #cd-intro-tagline -->

    </div> <!-- #cd-intro -->

    <div class="cd-secondary-nav cd-secondary-nav-packages">
        <a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
        <nav>
            <ul class="no-margin">
                <li>
                    <a href="{{route('packages_path')}}">
                        <b>TRAVEL PACKAGES</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('category_path')}}">
                        <b>BY STYLE</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#reviews">
                        <b>REVIEWS</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('about_path')}}">
                        <b>ABOUT US</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="#tour-packages">--}}
                {{--<b>FLIGHTS</b>--}}
                {{--<span></span><!-- icon -->--}}
                {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{route('faq_path')}}">
                        <b>FAQ</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="https://gotoperu.com/travel-agents/" target="_blank">
                        <b>TRAVEL AGENTS</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="#cd-inquire">--}}
                {{--<b>INQUIRE NOW</b>--}}
                {{--<span></span><!-- icon -->--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
    </div> <!-- .cd-secondary-nav -->

    <div class="container-category hidden-xs hidden-sm">
        <div class="row padding-top-10 padding-bottom-10"><!--.row -->
            <div class="col-md-1">
                <img src="{{asset('images/logos/apavit.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/apotur.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/asta.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/expedia.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/facebook.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/meetup.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="{{asset('images/logos/new.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="http://gotoperu.travel/img/logos/peru.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="http://gotoperu.travel/img/logos/prom-peru.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="http://gotoperu.travel/img/logos/tripadvisor.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="http://gotoperu.travel/img/logos/yelp.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-1">
                <img src="http://gotoperu.travel/img/logos/youtube.png" alt="" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-top-20" id="tour-packages">
            <div class="col-lg-12 text-center font-montserrat">
                {{--<h1 class="text-20 color-goto-orange"><strong>About Us</strong></h1>--}}
                <h2 class="text-30 color-goto-green"><b>GoToPeru Reviews And Testimonials</b></h2>
                <p class="text-15">We could go on and on about GOTOPERU, but we prefer to show a sample of the testimonials we receive from our value clients from around the world. Check out reviews of GOTOPERU on TripAdvisor or on our own website with over 1000+ testimonials. We want to make you another one of our satisfied clients by giving you stellar service and quality travel, which we have been providing to our customers since 2009.</p>
                {{--<p>GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>--}}
            </div>
        </div>
    </div>

    <div class="container margin-top-60">
        <div class="row ">
            <div class="col-md-6 col-md-offset-3">
                <div class="testimonials">
                    @foreach($testimonials as $testimonial)
                        <p><i class='fa fa-quote-left fa-2x pull-left'></i>
                            {{$testimonial->contenido}} <i class='fa fa-quote-right fa-2x'></i>
                        </p>
                        <p class='text-right author margin-bottom-60 margin-top-30'><b>{{$testimonial->nombre}}</b> <span class='text-info'>{{$testimonial->ciudad}}</span></p>
                    @endforeach
{{--                    {{ $testimonial->links() }}--}}
                        <div class="margin-top-30 text-center">
                            {{ $testimonials->render() }}
                        </div>
                </div>

            </div>
        </div>


    </div>
@stop