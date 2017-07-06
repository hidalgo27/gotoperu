@extends('layouts.page.default')

@section('content')

<div class="position-relative">

    <div id="cd-intro-tagline" class="font-montserrat clearfix">
        {{--<h1>Secondary Fixed Navigation</h1>--}}

        <div class="banner position-relative">
            <img src="{{asset('images/banners/itinerary/plaza-cusco.jpg')}}"/>
            <div class="box-header container-fluid">
                <div class="col-md-4">
                    <div class="hidden-xs">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-3.png')}}" alt="" class="img-responsive margin-top-20"></a>
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


                <div class="col-lg-12 text-center">
                    {{--<p class="color-white text-25 no-margin"><b>6 Day</b></p>--}}
                    <h1 class="color-white text-50 color-title-packages">Destinations</h1>
                    {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                </div>
            </div>
        </div>

        {{--<a href="http://codyhouse.co/?p=296" class="cd-btn">View Offers</a>--}}
        {{--<a href="#0" id="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
    </div> <!-- #cd-intro-tagline -->

</div> <!-- #cd-intro -->

<div class="cd-secondary-nav">
    <a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
    <nav>
        <ul class="no-margin">
            @foreach($destinos->sortBy('nombre')->unique('pais') as  $destino)
                <li>
                    <a href="#{{strtolower($destino->pais)}}">
                        <b>{{strtolower($destino->pais)}}</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
            @endforeach
            <li>
                <a href="#cd-inquire" class="btn btn-warning">
                    <b>INQUIRE NOW</b>
                    {{--<span></span><!-- icon -->--}}
                </a>
            </li>
        </ul>
    </nav>
</div> <!-- .cd-secondary-nav -->

<div class="container-category hidden-xs">
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
    @foreach($destinos->sortBy('nombre')->unique('pais') as  $destino)


        <div class="row padding-top-50" id="{{strtolower($destino->pais)}}">
            <div class="col-lg-12 text-center font-montserrat">
                <h1 class="text-30 color-goto-orange"><b>{{strtoupper($destino->pais)}} DESTINATIONS</b></h1>
                <p class="text-15">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
            </div>
        </div>
        <div class="row margin-top-30">

            @foreach($destinos->where('pais',$destino->pais)->sortBy('nombre') as  $destino)
                <div class="col-md-4 margin-bottom-30">
                    <div class="grid-category position-relative">
                        <a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="color-goto-grey">
                            <img src="{{asset('images/destinations/'.str_replace(' ','-', strtolower($destino->nombre)).'.jpg')}}" alt="" class="img-responsive"/>
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


    @endforeach




</div>

@stop