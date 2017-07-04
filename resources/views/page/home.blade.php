@extends('layouts.page.home')

@section('content')

    <div class="container">
        <div class="row margin-top-20" id="tour-packages">
            <div class="col-lg-12 text-center font-montserrat">
                <h1 class="text-20 color-goto-orange"><strong>PERU TRAVEL PACKAGES</strong></h1>
                <h2 class="text-30 color-goto-green"><b>GREAT ADVENTURE PACKAGES FOR EVERYONE WITH GOTOPERU</b></h2>
                <p class="text-15">Founded in 2009, we have served over 10,000+ highly satisfied travelers. We offer personalized Peru and South America vacations including the best hotels at
                    each category, local passionate guides, top transportation , and friendly representatives from start to finish with authentic 24/7 local assistance.</p>
                <p><strong>
                        Below our predesign travel packages ready to book or to have them as travel samples to personalize a dream Peru Vacation!</strong></p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row margin-top-20">
            <div class="col-md-3">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    {{--<ol class="carousel-indicators">--}}
                    {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
                    {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
                    {{--<li data-target="#carousel-example-generic" data-slide-to="3"></li>--}}
                    {{--</ol>--}}

                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="">
                            <img src="{{asset('images/large-1.png')}}" class="img-responsive">
                            {{--<div class="carousel-caption carousel-caption-home no-padding">--}}
                                {{--<b class="text-20">Primero</b>--}}
                                {{--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
                                {{--<a href="{{route('category_path')}}/#cd-{{str_replace(' ','-',strtolower($categorias->nombre))}}" class="btn btn-warning">View</a>--}}
                            {{--</div>--}}
                            </a>
                        </div>

                        {{--@foreach($categoria as $categorias)--}}

                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/large-1.png')}}" class="img-responsive">--}}
                                {{--<div class="carousel-caption carousel-caption-home no-padding">--}}
                                    {{--<b class="text-20">{{ucfirst(strtolower($categorias->nombre))}}</b>--}}
                                    {{--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
                                    {{--<a href="{{route('category_path')}}/#cd-{{str_replace(' ','-',strtolower($categorias->nombre))}}" class="btn btn-warning">View</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}

                    </div>

                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>


                </div>

                <div class="margin-top-20">
                    <img src="{{asset('images/large-2.png')}}" class="img-responsive">
                </div>



            </div>
            <div class="col-md-9">
                <h2 class="text-center font-montserrat hidden-sm hidden-md hidden-lg">Travel Offers</h2>
                <div class="tab_container">
                    <input id="tab1" type="radio" name="tabs" checked class="hidden-xs">
                    <label for="tab1" class="hidden-xs">
                        {{--<i class="fa fa-code"></i>--}}
                        <span>Featured</span>
                    </label>

                    <input id="tab2" type="radio" name="tabs" class="hidden-xs">
                    <label for="tab2" class="hidden-xs">
                        {{--<i class="fa fa-pencil-square-o"></i>--}}
                        <span>With Air From USA</span>
                    </label>

                    <input id="tab3" type="radio" name="tabs" class="hidden-xs">
                    <label for="tab3" class="hidden-xs">
                        {{--<i class="fa fa-bar-chart-o"></i>--}}
                        <span>Machupicchu Galapagos</span>
                    </label>

                    <input id="tab4" type="radio" name="tabs" class="hidden-xs">
                    <label for="tab4" class="hidden-xs">
                        {{--<i class="fa fa-folder-open-o"></i>--}}
                        <span>South America</span>
                    </label>


                    <section id="content1" class="tab-content">

                        <div class="row">


                            @foreach($paquete as $paquetes)
                                <div class="col-md-4 margin-bottom-30">


                                        <div class="pacakges-box clearfix">

                                            <div class="font-montserrat bg-goto-blue-light">
                                                <div class="pacakges-img">
                                                    <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-responsive"></a>
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

                        </div>
                    </section>

                    <section id="content2" class="tab-content">
                        {{--<div class="row margin-top-10">--}}
                            {{--<div class="col-md-12">--}}

                                {{--<div class="text-center font-montserrat">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-lg-12">--}}
                                            {{--<p><b>From</b></p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">New York</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Miami</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Washington DC</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Los Angeles</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Chicago</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Houston</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        <div class="row">
                            @foreach($paquete_f as $paquetes)
                                <div class="col-md-4 margin-bottom-30">


                                    <div class="pacakges-box clearfix">

                                        <div class="font-montserrat bg-goto-blue-light">
                                            <div class="pacakges-img">
                                                <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-responsive"></a>
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
                        </div>
                    </section>

                    <section id="content3" class="tab-content">
                        <div class="row">
                            @foreach($paquete_mg as $paquetes)
                                <div class="col-md-4 margin-bottom-30">


                                    <div class="pacakges-box clearfix">

                                        <div class="font-montserrat bg-goto-blue-light">
                                            <div class="pacakges-img">
                                                <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-responsive"></a>
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
                        </div>
                    </section>

                    <section id="content4" class="tab-content">
                        {{--<div class="row margin-top-10">--}}
                            {{--<div class="col-md-12 filter-destinations text-center">--}}
                                {{--<ul class="no-padding">--}}
                                    {{--<li><input type="checkbox" id="cb1" />--}}
                                        {{--<label for="cb1">--}}
                                            {{--<img src="{{asset('images/destinations/tabs/machupicchu.jpg')}}" class="img-responsive"/>--}}
                                            {{--<span>Peru</span>--}}
                                        {{--</label>--}}
                                    {{--</li>--}}
                                    {{--<li><input type="checkbox" id="cb2" />--}}
                                        {{--<label for="cb2">--}}
                                            {{--<img src="{{asset('images/destinations/tabs/uyuni.jpg')}}" class="img-responsive"/>--}}
                                            {{--<span>Bolivia</span>--}}
                                        {{--</label>--}}
                                    {{--</li>--}}
                                    {{--<li><input type="checkbox" id="cb3" />--}}
                                        {{--<label for="cb3">--}}
                                            {{--<img src="{{asset('images/destinations/tabs/rio.jpg')}}" class="img-responsive"/>--}}
                                            {{--<span>Brasil</span>--}}
                                        {{--</label>--}}
                                    {{--</li>--}}
                                    {{--<li><input type="checkbox" id="cb4" />--}}
                                        {{--<label for="cb4">--}}
                                            {{--<img src="{{asset('images/destinations/tabs/galapagos.jpg')}}" class="img-responsive"/>--}}
                                            {{--<span>Ecuador</span>--}}
                                        {{--</label>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        <div class="row">
                            @foreach($paquete_m as $paquetes)
                                <div class="col-md-4 margin-bottom-30">


                                    <div class="pacakges-box clearfix">

                                        <div class="font-montserrat bg-goto-blue-light">
                                            <div class="pacakges-img">
                                                <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}"><img src="{{asset('images/packages/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-responsive"></a>
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
                        </div>
                    </section>

                    {{--<section id="content5" class="tab-content">--}}
                        {{--<h3>Headline 5</h3>--}}
                        {{--<p>Tab 5 Content.</p>--}}
                    {{--</section>--}}
                </div>

            </div>

        </div>
        <div class="row margin-top-20 margin-bottom-100">
            <div class="col-md-12">
                <div class="text-center margin-top-20">
                    <a href="{{route('packages_path')}}" class="btn btn-lg btn-warning">View all packages</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-middle">
        <div class="fullscreen background parallax" style="background-image:url('images/destinations/home/cusco.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
            <div class="content-a color-white">
                <div class="content-b font-montserrat">
                    <h2>LOCAL PERUVIAN TRAVEL OPERATOR HIGHLY RECOMENDED IN TRIPADVISOR</h2>
                    <h3 class="hidden-xs">Tours starting Daily with our passionateguides, best hotels and smooth local operations.</h3>
                    <a href="https://gotoperu.com/about-us/" target="_blank" class="btn btn-lg btn-danger margin-top-20">Why us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-top-40 margin-bottom-20">
            <div class="col-md-12">
                <div class="text-center font-montserrat">
                    <h2>PERU DESTINATIONS</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 margin-bottom-30 clearfix">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/machupicchu.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Machu<span>picchu</span></h2>
                            <p>Ciudad de los incas</p>
                            <a href="{{route('destinations_show_path', 'machupicchu')}}">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 margin-bottom-30 clearfix">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/cusco.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Cu<span>sco</span></h2>
                            <p>Capital del imperio Inca</p>
                            <a href="{{route('destinations_show_path', 'cusco')}}">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 margin-bottom-30 clearfix">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/titicaca.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Titi<span>caca</span></h2>
                            <p>Civilizacion andina más antigua</p>
                            <a href="{{route('destinations_show_path', 'titicaca')}}">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center margin-top-40">
                    <a href="{{route('destinations_path')}}" class="btn btn-lg btn-warning">View featured destination</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-category margin-top-70">
        <div class="container">
            <div class="row margin-top-40 margin-bottom-20">
                <div class="col-md-12">
                    <div class="text-center font-montserrat">
                        <h2>Category</h2>
                        <h3>Nuestra categorias</h3>
                        <p>Paquetes turisticos para todo tipo de ocaciones</p>
                    </div>
                </div>
            </div>

            <div class="row margin-bottom-60">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">

                        @foreach($categoria as $categorias)
                            <div class="item">
                                <div class="grid-category position-relative">
                                    <a href="{{route('category_path')}}/#cd-{{str_replace(' ','-',strtolower($categorias->nombre))}}" class="color-goto-grey">
                                        <img src="{{asset('images/category/'.str_replace(' ','-', strtolower($categorias->nombre)).'.jpg')}}" alt="" class="img-responsive"/>
                                        <div class="grid-box padding-30 text-center">
                                            <span class="no-margin text-20"><i>{{substr(ucfirst(strtolower($categorias->nombre)), 0, strlen($categorias->nombre)/2)}}</i><b>{{substr(ucfirst(strtolower($categorias->nombre)), strlen($categorias->nombre)/2, strlen($categorias->nombre))}}</b></span>
                                            <div class="line"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach




                        {{--<div class="item">--}}
                            {{--<div class="grid-category">--}}
                                {{--<figure class="effect-category">--}}
                                    {{--<img src="{{asset('images/category/nature.jpg')}}" alt="" class="img-responsive"/>--}}
                                    {{--<figcaption>--}}
                                        {{--<h2>Ama<span>zon</span></h2>--}}
                                        {{--<p>Reconciliate con la naturaleza.</p>--}}
                                        {{--<a href="#">View more</a>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="text-center margin-top-60 font-montserrat">

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-3 col-xs-6 col-xs-offset-3">
                                <img src="{{asset('images/icons/item/contact.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>CONTACT</h3>
                                <p>Chat with us, give us a call (813)600-3042, send us an e-mail or fill out our online form. Share with us your travel preferences! If you already have an outline, an idea, any questions… we will be more than happy to assist your needs.</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-12">
                            <div class="col-md-3 col-xs-6 col-xs-offset-3">
                                <img src="{{asset('images/icons/item/design.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>DESIGN</h3>
                                <p>We will craft out a first travel proposal according to the outline or idea that you shared with us. From then on we will customize it until you are satisfied with the planning! We will then send you a day by day itinerary and leave the rest to you!</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-12">
                            <div class="col-md-3 col-xs-6 col-xs-offset-3">
                                <img src="{{asset('images/icons/item/vacations.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>VACATION</h3>
                                <p>Be ready for an unforgettable vacation to the land of the Incas, with promptly transfers at every point (airports, hotels, buses,trains) with knowledgable local Guides on each destination plus the best hotel locations and perks...GOTOPERU team will be always with you</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                    </div>
                </div>

                <div class="col-lg-6 hidden-xs">
                    <img class="img-responsive" src="{{asset('images/contact.png')}}" alt="" width="140" height="140">
                </div><!-- /.col-lg-4 -->

            </div>
        </div><!-- /.row -->
    </div>


    <div class="container-category margin-top-60" id="cd-hotels">
        <div class="container">
            <div class="row margin-top-40 margin-bottom-40">
                <div class="col-md-12">
                    <div class="text-center font-montserrat">
                        <h2>Hotels</h2>
                        {{--<h3>Nuestra categorias</h3>--}}
                        {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-hotel">
            <img src="{{asset('images/hotels/banner-hotel.jpg')}}" alt="" class="img-responsive">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center margin-top-20 margin-bottom-60">
                        <p class="text-16"><b>Lorem ipsum dolor sit amet, consectetur m illo impedit ipsum laboriosam laudantium modi officiis perspiciatis porro quam similique tenetur. Ad dolore eum nesciunt officia velit.</b></p>
                        <a href="" class="btn btn-lg btn-primary margin-top-20">Hotels</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    
    <div class="container">
        <div class="row margin-top-60 font-montserrat">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="{{asset('images/logos/logo-gotoperu.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-4"></div>
        </div>
        {{--<div class="row margin-top-40">--}}
            {{--<div class="col-md-12">--}}
                {{--<img src="{{asset('images/team.png')}}" alt="" class="img-responsive">--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="container hidden-xs">
        <div class="text-center font-montserrat margin-top-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/groups.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>Small Groups and Private tours</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/hour.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>We live here, trully a 24/7 Assistance</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/customize.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>Book Now option or Customize a dream trip!</h4>
                        <p>Lorem ipsum dolor si. ipsum dolor si.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
            </div>
            <div class="row margin-bottom-30 margin-top-30">
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/alert.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>Cutting the middlemen, headquarters at Peru</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/tripadvisor.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>We take pride of our tripadvisor reviews!</h4>
                        <p>Lorem ipsum dolor sit amet. dolor sit amet.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4 col-lg-offset-4 col-xs-6 col-xs-offset-3">
                        <img class="img-responsive" src="{{asset('images/icons/item/women.png')}}" alt="">
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h4>We can adapt to any arrival and departure</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
            </div>
            <div class="row margin-top-60">
                <div class="col-md-12">
                    <b class="text-18 color-goto-green">24/7 in trip Support. We have your back around the clock.</b>
                </div>
                <div class="col-md-12 margin-top-30">
                    <a href="https://gotoperu.com/about-us/" target="_blank" class="btn btn-lg btn-warning">About Us</a>
                </div>
            </div>
        </div>
    </div>

@stop