@extends('layouts.page.default')

@section('content')

    <div class="position-relative">

        <div id="cd-intro-tagline" class="font-montserrat clearfix">
            {{--<h1>Secondary Fixed Navigation</h1>--}}

            <div class="banner position-relative">



                <div class="box-header container-fluid">

                    <div class="row">

                        <div class="col-md-7">

                            <div class="margin-top-20">
                                <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-2.png')}}" alt="" class="img-responsive"></a>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="text-right margin-top-10">
                                <b class="text-30 margin-right-30">(813) 454-9707</b>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 text-center">
                            {{--<p class="color-white text-25 no-margin"><b>6 Day</b></p>--}}
                            <h1 class="color-white text-50 color-title-packages">Destinations</h1>
                            {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/banners/itinerary/plaza-cusco.jpg')}}"/>
            </div>

            {{--<a href="http://codyhouse.co/?p=296" class="cd-btn">View Offers</a>--}}
            {{--<a href="#0" id="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
        </div> <!-- #cd-intro-tagline -->

    </div> <!-- #cd-intro -->

    <div class="cd-secondary-nav cd-secondary-nav-tinerary">
        <a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
        <nav>
            <ul class="no-margin">
                <li>
                    <a href="#cd-peru">
                        <b>PERU</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-ecuador">
                        <b>ECUADOR</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-brasil">
                        <b>BRASIL</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-argentina">
                        <b>ARGENTINA</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-chile">
                        <b>CHILE</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-bolivia">
                        <b>BOLIVIA</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-inquire" class="btn btn-warning">
                        <b>INQUIRE NOW</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
            </ul>
        </nav>
    </div> <!-- .cd-secondary-nav -->

    <div class="container-category">
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
        <div class="row margin-top-20" id="cd-peru">
            <div class="col-lg-12 text-center font-montserrat">
                <h1 class="text-30 color-goto-orange"><b>PERU DESTINATIONS</b></h1>
                <p class="text-15">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
            </div>
        </div>
        <div class="row margin-top-30">
            <div class="col-md-4">
                <div class="grid-category position-relative">
                    <a href="" class="color-goto-grey">
                        <img src="{{asset('images/destinations/machupicchu.jpg')}}" alt="" class="img-responsive"/>
                        <div class="grid-box padding-30 text-center">
                            <span class="no-margin text-20"><i>Machu</i><b>picchu</b></span>
                            <div class="line"></div>
                        </div>
                    </a>
                </div>
            </div>
            @foreach($destinos->where('pais','peru')->sortBy('nombre') as  $destino)
                <div class="col-md-4 margin-bottom-30">
                    <div class="grid-category position-relative">
                        <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="color-goto-grey">
                            <img src="{{asset('images/destinations/cusco.jpg')}}" alt="" class="img-responsive"/>
                            <div class="grid-box padding-30 text-center">
                                {{--<span class="no-margin text-20"><b>{{ucwords(strtolower($destino->nombre))}}</span>--}}
                                <span class="no-margin text-20"><i>{{substr(ucfirst(strtolower($destino->nombre)), 0, strlen($destino->nombre)/2)}}</i><b>{{substr(ucfirst(strtolower($destino->nombre)), strlen($destino->nombre)/2, strlen($destino->nombre))}}</b></span>
                                <div class="line"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

      


    </div>

@stop