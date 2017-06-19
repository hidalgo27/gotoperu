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
                            <h1 class="color-white text-50 color-title-packages">Traveler to Traveler</h1>
                            {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/banners/itinerary/titicaca.jpg')}}"/>
            </div>

            {{--<a href="http://codyhouse.co/?p=296" class="cd-btn">View Offers</a>--}}
            {{--<a href="#0" id="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
        </div> <!-- #cd-intro-tagline -->

    </div> <!-- #cd-intro -->

    <div class="cd-secondary-nav cd-secondary-nav-tinerary">
        <a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
        <nav>
            <ul class="no-margin">
                @foreach($categoria as $categorias)
                    <li>
                        <a href="#cd-{{str_replace(' ','-',strtolower($categorias->nombre))}}">
                            <b>{{ucwords($categorias->nombre)}}</b>
                            {{--<span></span><!-- icon -->--}}
                        </a>
                    </li>
                @endforeach

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
        <div class="row margin-top-40">
            <div class="col-md-12 text-center font-montserrat">
                <h1 class="text-30 color-goto-green"><b>PERU TRAVEL FEATURED PACKAGES</b></h1>
                <p class="text-16">our most popular Peru and South America itineraries, these packages could be used as a reference to customize your own trip. At GOTOPERU we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>
            </div>
        </div>


        @foreach($categoria as $categorias)
            <div class="row padding-top-50" id="cd-{{str_replace(' ', '-', strtolower($categorias->nombre))}}">
                <div class="col-md-12 font-montserrat">
                    <h2 class="color-goto-grey">{{ucwords(strtolower($categorias->nombre))}}</h2>
                    <p class="text-15">If you have an inclination towards arts and culture, then Peru would leave you absorbed. Peru to lovers of culture and antiquity is the equivalent of what Disneyland means to kids. Peru has many diverse sites that resonate with the splendors of ancient Inca. The abundance of interesting locations and sites like the Cusco and Machu Picchu engage your taste for antiquity. Just when you think you have seen it all, a visit to Lima would jolt you out of the past and into the more contemporary Peru where an emerging hybrid culture is being fueled by the integration of different races from all over the world! A feel of Peruvian culture would mean a trip to Puno and Lake Titicaca where you would experience the colorful and pulsating festivals devoted to reveling Quechua and Aymara roots.</p>
                </div>
            </div>
            <div class="row margin-top-20">
            @foreach($paquete_categoria->where('idcategoria',$categorias->id) as $paquete_categorias)
                    <div class="col-md-4 margin-bottom-30">

                        <div class="pacakges-box clearfix">

                            <div class="font-montserrat bg-goto-blue-light">
                                <div class="pacakges-img">
                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquete_categorias->paquete->titulo)))}}"><img src="{{asset('images/packages/'.$paquete_categorias->paquete->codigo.'.jpg')}}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="pacakges-body">
                                    <div class="padding-rl-10">
                                        <div class="margin-top-5 margin-bottom-5">
                                            <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquete_categorias->paquete->titulo)))}}"><h2 class="text-16 no-margin color-goto-grey"><b class="color-goto-orange">{{$paquete_categorias->paquete->codigo}}:</b> {{ucfirst(strtolower($paquete_categorias->paquete->titulo))}}</h2></a>
                                        </div>
                                    </div>
                                    <div class="padding-rl-10">
                                        <p class="text-info text-12">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            @foreach($paquete_destinos->where('idpaquetes',$paquete_categorias->paquete->id)->take(2) as $paquete_destino)
                                                {{ucwords(strtolower($paquete_destino->destinos->nombre))}}/
                                            @endforeach
                                            <button tabindex="0" class="btn btn-link text-12 color-goto-pink no-padding" role="button" data-toggle="popover" data-trigger="focus" title="Countries Visited" data-content="
                                                                @php $i=0; @endphp
                                            @foreach($paquete_destinos->where('idpaquetes',$paquete_categorias->paquete->id) as $paquete_destino)
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
                                                -                              <li>
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
                                        <b class="text-20 color-goto-green">{{$paquete_categorias->paquete->duracion}} days</b>
                                    </div>
                                    <div class="col-md-6 no-padding text-right">
                                        <b class="text-20 color-goto-green"><sup class="color-goto-light">from $ </sup>
                                            @foreach($paquete_categorias->paquete->precio_paquetes as $precio)
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
            </div>
        @endforeach


        <div class="row margin-top-85">
            <div class="col-md-12 text-center">
                <a href="" class="btn btn-lg btn-warning">See Our Galapagos Tours</a>
            </div>
        </div>

    </div>

@stop