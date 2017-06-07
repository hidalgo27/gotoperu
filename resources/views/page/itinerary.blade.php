@extends('layouts.page.itinerary')

@section('content')

    <div class="container">
        <div class="row margin-top-40">
            <div class="col-md-8 font-montserrat">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($paquete as $paquetes)
                        <h1 class="color-goto-orange"><strong>Peru Packages: {{ucwords(strtolower($paquetes->titulo))}}</strong></h1>
                        <p class="text-18"><b>Machu Picchu, Cusco, Sacred Valley</b></p>
                        @endforeach
                    </div>
                </div>
                <div class="row" id="cd-overview">
                    <div class="col-md-12">
                        <h3 class="color-goto-grey"><strong>Overview</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-route-ininerary clearfix">
                            <div class="col-md-3 bg-goto-gray-1">
                                <h3 class="color-goto-grey"><i class="fa fa-map-marker" aria-hidden="true"></i> Route</h3>
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
                    <div class="col-md-12">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt illum nihil quia quisquam. Aspernatur distinctio ducimus et expedita fugit libero quibusdam, rerum tempore? Asperiores assumenda cupiditate excepturi officiis sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt illum nihil quia quisquam. Aspernatur distinctio ducimus et expedita fugit libero quibusdam, rerum tempore? Asperiores assumenda cupiditate excepturi officiis sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt illum nihil quia quisquam. Aspernatur distinctio ducimus et expedita fugit libero quibusdam, rerum tempore? Asperiores assumenda cupiditate excepturi officiis sint.
                    </div>
                </div>

                <div class="row margin-top-40">
                    <div class="col-md-12">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-price-aside text-20 font-montserrat color-goto-grey">
                            <b class="text-primary display-block text-left text-30">{{$paquetes->duracion}} Days</b>
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
                            <p class="text-15">
                                @foreach($paquete as $paquetes_d)
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes_d->id)->take(2) as $paquete_destino)
                                        {{ucwords(strtolower($paquete_destino->destinos->nombre))}},
                                    @endforeach
                                @endforeach
                            </p>
                            <a class="btn btn-primary btn-embossed" style="width: 100%;padding: 10px 0px;" href="#cd-inquire">
                                Choose This Package <span class="fui-triangle-down-small"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-list no-mobile">
                            <li class="h4"><b>Tour Highlights</b></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Cusco Tour</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Machu Picchu</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Sacred Valley</li>
                            <li class="divider margin-top-20 margin-bottom-20"></li>
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

        <div class="row main-wrapper">
            <div class="col-md-8">
                <div class="cd-articles">
                    @foreach($paquete as $paquetes)
                        @foreach($paquetes->itinerario as $itinerario)
                            <article class="text-justify">
                                <header>
                                    {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                                    <h2 class="font-montserrat text-20"><b>Day {{$itinerario->dia}}:</b> {{ucwords(strtolower($itinerario->titulo))}}</h2>
                                </header>

                                <div class="col-md-6 pull-right margin-top-20">
                                    <div class="project">
                                        <figure class="img-responsive">
                                            <img src="{{asset('images/destinations/home/cusco.jpg')}}" class="img-responsive">
                                            <span class="actions">
                                        <a href="#" data-toggle="modal" data-target=".img-gallery-{{$itinerario->id}}"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </span>
                                        </figure>
                                    </div>
                                </div>

                                <p>{{$itinerario->descripcion}}</p>

                                <button class="btn btn-default" data-toggle="modal" data-target=".img-gallery-{{$itinerario->dia}}">View Gallery</button>

                                <div class="modal fade img-gallery-{{$itinerario->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div id="carousel-itinerary-{{$itinerario->id}}" class="carousel slide" data-ride="carousel">

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img class="img-responsive" src="{{asset('images/destinations/home/cusco.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                            Cusco
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="{{asset('images/destinations/home/machupicchu.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                            Machu Picchu
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="{{asset('images/destinations/home/titicaca.jpg')}}" alt="...">
                                                        <div class="carousel-caption">
                                                            Titicaca
                                                        </div>
                                                    </div>
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
            <div class="col-md-4">
                <aside class="aside-itinerary margin-top-30" id="sidebar">
                    <img src="{{asset('images/itinerary/GTP500.jpg')}}" alt="" class="img-responsive">
                    <ul>
                        @foreach($paquete as $paquetes_i)
                            @foreach($paquetes_i->itinerario->sortBy('duracion') as $itinerario)
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

        <div class="row" id="cd-prices">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Prices</strong></h3>
            </div>
        </div>

        <div class="row">
            @foreach($paquete as $paquetes)
                @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)

                        <div class="col-md-3 text-center">
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

        <div class="row margin-top-40">
            <div class="col-md-12">
                <blockquote>
                    <p>*All our itineraries are fully customizable, just ask!</p>
                    <footer>Please contact one of our expert <cite title="Source Title">travel advisors</cite> for more information.</footer>
                </blockquote>
            </div>
        </div>

        <div class="row margin-top-40">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <h4 class="font-montserrat"><b>Not Included</b></h4>
                <ul>
                    <li>Internal Flights</li>
                    <li>Lunch or Dinner</li>
                </ul>
            </div>
        </div>

    </div>

@stop