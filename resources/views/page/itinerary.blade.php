@extends('layouts.page.itinerary')

@section('content')
    <div class="position-relative">

        <div id="cd-intro-tagline" class="font-montserrat clearfix">
            {{--<h1>Secondary Fixed Navigation</h1>--}}

            <div class="banner position-relative">
                @foreach($paquete as $paquetes)
                    <img src="{{asset('images/banners/itinerary/'.$paquetes->codigo.'.jpg')}}"/>
                    {{--<p class="text-18"><b>Machu Picchu, Cusco, Sacred Valley</b></p>--}}
                @endforeach
                <div class="banner-header banner-header-itinerary color-white hidden-xs">
                    <div class="banner-header-top font-montserrat">

                        @foreach($paquete as $paquetes)

                            <p class="text-20 color-white text-center">{{ucfirst(strtolower($paquetes->titulo))}} <span class="display-block text-30"><b>({{$paquetes->duracion}} days)</b></span></p>
                            <div class="list-services text-center">
                                <ul class="no-padding margin-bottom-0">
                                    @foreach($incluye_i->where('idpaquetes',$paquetes->id) as $icons)
                                        <li>
                                            <img src="{{asset('images/icons/include/'.$icons->incluye_iconos->imagen.'')}}" alt="" class="img-responsive" title="Assistances">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <p class="text-16 margin-top-10">
                                <b class="text-25 color-goto-orange"><sup class="color-goto-light">from $ </sup>
                                    @foreach($paquetes->precio_paquetes as $precio)
                                        @if($precio->estrellas == 2)
                                            {{$precio->precio_d}}
                                        @endif
                                    @endforeach
                                </b>
                                All Included
                            </p>
                            <div class="text-center hidden-sm">
                                <a href="#cd-inquire" class="btn btn-sm btn-success ">Check Availability</a>
                            </div>
                        @endforeach

                    </div>
                    <div class="divider margin-top-20 hidden-sm"></div>
                    <div class="banner-header-bottom hidden-sm">
                        <h4 class="text-18 color-white margin-bottom-10">A <b class="color-goto-orange ">BETTER</b> WAY TO TRAVEL TO PERU</h4>
                        <p class="no-margin color-goto-light">$150 average saving</p>
                        <p class="no-margin color-goto-light">24/7 local authentic assistance</p>
                        <p class="no-margin color-goto-light">100s of testimonials</p>
                    </div>
                </div>

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




                    {{--<div class="row margin-top-150">--}}
                    {{--<div class="col-lg-12 text-center">--}}
                    {{--<p class="color-white text-25 no-margin"><b>6 Day</b></p>--}}
                    {{--<h1 class="color-goto-orange text-50">Machu Picchu Express</h1>--}}
                    {{--<i class="color-white text-25">Machu Picchu, Cusco, Sacred Valley</i>--}}
                    {{--</div>--}}
                    {{--</div>--}}
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
                <li>
                    <a href="#cd-overview">
                        <b>OVERVIEW</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-itinerary">
                        <b>ITINERARY</b>
                        {{--<span></span><!-- icon -->--}}
                    </a>
                </li>
                <li>
                    <a href="#cd-prices">
                        <b>PRICES</b>
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
        <div class="row margin-top-40">
            <div class="col-md-8 col-sm-7 font-montserrat">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($paquete as $paquetes)
                        <h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>
                        {{--<p class="text-18"><b>Machu Picchu, Cusco, Sacred Valley</b></p>--}}
                        @endforeach
                    </div>
                </div>
                <div class="row hidden-xs" id="cd-overview">
                    <div class="col-md-12">
                        <h3 class="color-goto-grey"><strong>Outline</strong></h3>
                    </div>
                </div>
                <div class="row hidden-xs">
                    <div class="col-md-12">
                        <div class="box-route-ininerary clearfix">
                            <div class="col-md-3 bg-goto-gray-1 text-center">
                                <i class="fa fa-map-o fa-5x margin-top-30" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 box-route-ininerary-right">
                                @foreach($paquete as $paquetes)
                                    @foreach($paquetes->itinerario as $itinerario)
                                        <p><strong>Day {{$itinerario->dia}} :</strong> {{ucwords(strtolower($itinerario->titulo))}}</p>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 hidden-xs">
                        <p>A visit to Machu Picchu would leave you with an irresistible feeling of enchantment. The Incas civilization had an incontestable reputation for stonemasonry which is evident by the classical style in which Machu Picchu was built. The exotic magnificence of the Machu Picchu is captured by the intricate stone craft and structural design which led many archeologists to believe that it was the lost city of the Incas.</p>
                        <p>Also, this program offer you the best of Cusco city including rich sophistication of buildings and structural designs that are reflective of the diverse historical and cultural influences that the Inca civilization had. From the tough Inca walls to the soaring Spanish churches, you would find that the city is meritorious as a UNESCO World Heritage Site. In addition to all of these historical features, a myriad of tasteful hotels, bars, cafés and every other establishment that is required for a fun filled city experience.</p>
                        <p>Plus the Sacred Valley excursion would certainly bring you through authentic local markets and exceptional ruins. Indeed, you would mingle with the more traditional Peruvians for a more intimate encounter of village life.</p>
                    </div>
                </div>

                <div class="row margin-top-40 hidden-xs hidden">
                    <div class="col-md-12">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-price-aside text-20 font-montserrat color-goto-grey">
                            <b class="color-goto-grey display-block text-left text-30">{{$paquetes->duracion}} Days</b>
                            <span class="color-goto-orange">From<sup>$</sup>
                                <b class="text-50">
                                    @foreach($paquete as $paquetes)
                                        @foreach($paquetes->precio_paquetes->sortBy('precio_d') as $precio)
                                            @if($precio->estrellas == 2)
                                                {{$precio->precio_d}}
                                            @endif
                                        @endforeach
                                    @endforeach
                                </b>USD
                            </span>
                            {{--<p class="text-15">--}}
                                {{--@foreach($paquete as $paquetes_d)--}}
                                    {{--@foreach($paquete_destinos->where('idpaquetes',$paquetes_d->id)->take(2) as $paquete_destino)--}}
                                        {{--{{ucwords(strtolower($paquete_destino->destinos->nombre))}},--}}
                                    {{--@endforeach--}}
                                {{--@endforeach--}}
                            {{--</p>--}}
                            <a class="btn bg-goto-green color-white btn-embossed margin-top-20" style="width: 100%;padding: 10px 0px;" href="#cd-inquire">
                                Choose This Package <span class="fui-triangle-down-small"></span>
                            </a>

                            <ul class="itinerary-destinations text-left margin-top-20 margin-bottom-0">
                                <li class="color-goto-green text-18"><b>Destinations</b></li>
                                @foreach($paquete as $paquetes_d)
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes_d->id) as $paquete_destino)
                                        <li class="text-16"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</li>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row margin-top-20">
                    <div class="col-md-12">
                        <ul class="nav nav-list no-mobile">
                            <li class="h4"><b>Trip Style</b></li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i> Culture / History            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i> City Scenes            </li>
                            <li class="divider margin-top-20 margin-bottom-20"></li>
                            <li class="h4"><b>Physical Difficulty</b></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> 1-Easy</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" id="cd-itinerary">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Itinerary</strong></h3>
            </div>
        </div>

        <div class="row">
            <div class="main-wrapper clearfix">
            <div class="col-md-8 col-sm-7">
                <div class="cd-articles">
                    @foreach($paquete as $paquetes)
                        @foreach($paquetes->itinerario as $itinerario)
                            <article class="text-justify display-block margin-bottom-20 clearfix">
                                <header>
                                    {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                                    <h2 class="font-montserrat text-20"><b>Day {{$itinerario->dia}}:</b> {{ucwords(strtolower($itinerario->titulo))}}</h2>
                                </header>

                                <div class="col-md-5 pull-right">
                                    <div class="project">
                                        <figure class="img-responsive">
                                            @foreach($itinerario->itinerario_imagen->take(1) as $imagen)
                                                <img src="{{asset('images/itinerary/'.$imagen->nombre.'')}}" class="img-responsive" alt="{{$imagen->alt}}">
                                            @endforeach
                                            <span class="actions">
                                                <a href="#" data-toggle="modal" data-target=".img-gallery-{{$itinerario->id}}"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                            </span>
                                        </figure>
                                    </div>
                                </div>

                                @php echo $itinerario->descripcion; @endphp

                                <button class="btn btn-default display-block margin-top-10" data-toggle="modal" data-target=".img-gallery-{{$itinerario->id}}">View Gallery</button>

                                <div class="modal fade img-gallery-{{$itinerario->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div id="carousel-itinerary-{{$itinerario->id}}" class="carousel slide" data-ride="carousel">

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    @foreach($itinerario->itinerario_imagen->take(1) as $imagen)
                                                    <div class="item active">
                                                        <img class="img-responsive" src="{{asset('images/itinerary/'.$imagen->nombre.'')}}" alt="{{$imagen->nombre}}">
                                                        <div class="carousel-caption">
                                                            Cusco
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @foreach($itinerario->itinerario_imagen->take(-1) as $imagen)
{{--                                                        <img src="{{asset('images/itinerary/'.$imagen->nombre.'')}}" class="img-responsive">--}}
                                                        <div class="item">
                                                            <img class="img-responsive" src="{{asset('images/itinerary/'.$imagen->nombre.'')}}" alt="{{$imagen->nombre}}">
                                                            <div class="carousel-caption">
                                                                {{$imagen->title}}
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-itinerary-{{$itinerario->id}}" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-itinerary-{{$itinerario->id}}" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endforeach



                </div> <!-- .cd-articles -->
            </div>
            <div class="col-md-4 col-sm-5 hidden-xs">
                <aside class="aside-itinerary margin-top-30" id="sidebar">
                    <img src="{{asset('images/maps/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-responsive">
                    <ul>
                        @foreach($paquete as $paquetes_i)
                            @foreach($paquetes_i->itinerario->sortBy('dia') as $itinerario)
                                <li>
                                    <a href="{{str_replace(' ','-',strtolower( $paquetes_i->titulo))}}">
                                        <em>Day {{$itinerario->dia}}: {{ucwords(strtolower($itinerario->titulo))}}</em>
                                        {{--<b>by J. Morrison</b>--}}
                                        <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36"><circle fill="none" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle></svg>
                                    </a>
                                </li>

                            @endforeach
                        @endforeach

                    </ul>
                </aside> <!-- .cd-read-more -->
            </div>
            </div>
        </div>

        <div class="row" id="cd-prices">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Prices under Double accommodation</strong></h3>
            </div>
        </div>

        <div class="row">
            @foreach($paquete as $paquetes)
                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)

                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="panel panel-default panel-pricing">
                                <div class="panel-heading">
                                    @for ($i = 0; $i < $precio->estrellas; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <div class="panel-body text-center">
                                    <p><strong>${{$precio->precio_d}}</strong></p>
                                </div>
                                <ul class="list-group text-center">
                                    <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> Price per person based on double accomodation</li>
                                </ul>
                            </div>
                        </div>

                @endforeach
            @endforeach

        </div>
        <div class="row" id="cd-prices">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Prices under Single accommodation</strong></h3>
            </div>
        </div>
        <div class="row">
            @foreach($paquete as $paquetes)
                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="panel panel-default panel-pricing">
                            <div class="panel-heading">
                                @for ($i = 0; $i < $precio->estrellas; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>
                            <div class="panel-body text-center">
                                <p><strong>${{$precio->precio_s}}</strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                                <li class="list-group-item bg-success"><i class="fa fa-check"></i> Price per person based on single accomodation</li>
                            </ul>
                        </div>
                    </div>

                @endforeach
            @endforeach

        </div>

        <div class="row margin-top-40">
            <div class="col-md-12">
                <blockquote>
                    <p>*All our itineraries are fully customizable, just ask!</p>
                    <footer>Please contact one of our expert <cite title="Source Title">travel advisors</cite> for more information.</footer>
                </blockquote>
            </div>
        </div>

        <div class="row margin-top-40">
            <div class="col-md-6 col-sm-6">
                <h4 class="font-montserrat"><b>Included</b></h4>
                <ul>
                    <li>4 nights in Peru high quality Hotels</li>
                    <li>All tours stated in the itinerary with English-speaking guides</li>
                    <li>All transfers and entrance fees</li>
                    <li>All breakfasts</li>
                    <li>Private Airport Shuttle in & out</li>
                    <li>24/7 Assistance</li>
                    <li>Trains and buses</li>
                    <li>A prepaid cellphone for extended Programs</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4 class="font-montserrat"><b>Not Included</b></h4>
                <ul>
                    <li>Internal Flights</li>
                    <li>Lunch or Dinner</li>
                </ul>
            </div>
        </div>

    </div>

@stop