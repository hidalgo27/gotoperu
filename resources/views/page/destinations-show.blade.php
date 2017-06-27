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
                        <h1 class="color-white text-50 color-title-packages">Destination {{ucwords(strtolower($title))}}</h1>
                        {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                    </div>
                </div>
            </div>
            <img src="{{asset('images/banners/itinerary/machupicchu.jpg')}}"/>
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
    <div class="row margin-top-20">
        <div class="col-lg-12 text-center font-montserrat">
            <h1 class="text-30 color-goto-orange"><b>Destination {{ucwords(strtolower($title))}}</b></h1>
            <p class="text-15">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
        </div>
    </div>
    <div class="row margin-top-20">
        <div class="col-md-9">
            <div class="row">
                @foreach($paquetes_de as $paquetes_des)
                    @if(isset($paquetes_des->destinos))
                        @foreach($paquete->where('id',$paquetes_des->paquetes->id) as $paquetes)
                            <div class="col-md-4 margin-bottom-30">


                                <div class="pacakges-box clearfix">

                                    <div class="font-montserrat bg-goto-blue-light">
                                        <div class="pacakges-img">
                                            <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><img src="{{asset('images/packages/GTPE1005.jpg')}}" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="pacakges-body">
                                            <div class="padding-rl-10">
                                                <div class="margin-top-5 margin-bottom-5">
                                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><h2 class="text-16 no-margin color-goto-grey"><b class="color-goto-orange">{{$paquetes->codigo}}:</b> {{ucfirst(strtolower($paquetes->titulo))}}</h2></a>
                                                </div>
                                            </div>
                                            <div class="padding-rl-10">
                                                <p class="text-info text-12">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(2) as $paquete_destino)
                                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}}/
                                                    @endforeach
                                                    <button tabindex="0" class="btn btn-link text-12 color-goto-pink no-padding" role="button" data-toggle="popover" data-trigger="focus" title="Countries Visited" data-content="
                                                            @php $i=0; @endphp
                                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                                            @php $i++; @endphp
                                                    @endforeach" data-placement="top">
                                                        @if($i > 2)
                                                            {{$i-2}} more...
                                                        @endif
                                                    </button>
                                                </p>

                                            </div>
                                            <div class="padding-rl-10">
                                                <div class="list-services text-center spacer-10">
                                                    <ul class="no-padding margin-bottom-0">
                                                        <li>
                                                            <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive" title="Assistances">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/breakfast.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/flight.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/tours.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/trains.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                        <li>
                                                            <img src="{{asset('images/icons/include/transfers.png')}}" alt="" class="img-responsive">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-10 padding-rl-10">
                                            <div class="col-md-6 no-padding">
                                                <b class="text-20 color-goto-green">{{$paquetes->duracion}} days</b>
                                            </div>
                                            <div class="col-md-6 no-padding text-right">
                                                <b class="text-20 color-goto-green"><sup class="color-goto-light">from $ </sup>
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            {{$precio->precio_d}}
                                                        @endif
                                                    @endforeach
                                                </b>
                                            </div>
                                        </div>
                                        <div class="col-md-12 margin-top-10 no-padding">
                                            <div class="pacakges-footer"></div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-destinations">
                        <ul class="nav nav-list no-mobile">
                            <li class="h4"><b>Top Destinations</b></li>
                            @foreach($destinos->where('estado', '1') as $destino)
                                @php
                                    if($destino->nombre == $title){
                                        $active = "active";
                                    }else{
                                        $active = "";
                                    }
                                @endphp
                                <li><a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="no-padding {{$active}}"><i class="fa fa-check" aria-hidden="true"></i> {{ucwords(strtolower($destino->nombre))}}</a></li>
                            @endforeach

                            @foreach($destinos->unique('pais') as $destino)
                                {{--<li><a href="" class="no-padding"><i class="fa fa-check" aria-hidden="true"></i> {{ucwords(strtolower($destino->nombre))}}</a></li>--}}
                                <li class="divider margin-top-20 margin-bottom-20"></li>
                                <li class="h4"><b>{{ucwords(strtolower($destino->pais))}} Destinations</b></li>
                                @foreach($destinos->where('pais', $destino->pais) as $destino)
                                    @php
                                        if($destino->nombre == $title){
                                            $active = "active";
                                        }else{
                                            $active = "";
                                        }
                                    @endphp
                                    <li><a href="{{route('destinations_show_path', str_replace(' ', '-', strtolower($destino->nombre)))}}" class="no-padding {{$active}}"><i class="fa fa-check" aria-hidden="true"></i> {{ucwords(strtolower($destino->nombre))}}</a></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@stop