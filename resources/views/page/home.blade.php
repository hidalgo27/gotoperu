@extends('layouts.page.default')

@section('content')
    <div class="container">
        <div class="row margin-top-20">
            <div class="col-lg-12 text-center font-montserrat">
                <h1 class="text-20 text-info"><strong>PERU TRAVEL PACKAGES</strong></h1>
                <h2 class="text-30 color-goto-green"><b>GREAT ADVENTURE PACKAGES FOR EVERYONE WITH GOTOPERU</b></h2>
                <p class="text-15">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-top-20">
            <div class="col-md-12">
                <div class="tab_container">
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">
                        {{--<i class="fa fa-code"></i>--}}
                        <span>Travel offers</span>
                    </label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">
                        {{--<i class="fa fa-pencil-square-o"></i>--}}
                        <span>With us flights</span>
                    </label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">
                        {{--<i class="fa fa-bar-chart-o"></i>--}}
                        <span>Machupicchu & Galapagos</span>
                    </label>

                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">
                        {{--<i class="fa fa-folder-open-o"></i>--}}
                        <span>Multicountries</span>
                    </label>

                    {{--<input id="tab5" type="radio" name="tabs">--}}
                    {{--<label for="tab5"><i class="fa fa-envelope-o"></i><span>Contact</span></label>--}}

                    <section id="content1" class="tab-content">
                        <div class="row margin-top-10">
                            <div class="col-md-6">
                                <div class="text-center font-montserrat">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><b>By Days</b></p>
                                        </div>
                                    </div>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="warning">3 - 5</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="warning">6 - 8</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="warning">12 - 15</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="warning">16+</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="warning">unknown</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center font-montserrat">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><b>By Price</b></p>
                                        </div>
                                    </div>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">3 - 5</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">6 - 8</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">12 - 15</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">16+</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info">unknown</button>
                                    <input type="checkbox" class="hidden" />
                                </span>
                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="{{route('home_show_path', 'hola')}}">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP600.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>Peru & Machu Picchu</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
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
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1799 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$799 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP601.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>INCA TRAIL TO MACHU PICCHU</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">Assistances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/breakfast.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">breakfast</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">entrances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/flight.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">flight</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">hotels</span>--}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1599 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$599 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley, Puno,Arequipa</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="content2" class="tab-content">
                        <div class="row margin-top-10">
                            <div class="col-md-12">

                                <div class="text-center font-montserrat">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><b>From</b></p>
                                        </div>
                                    </div>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">New York</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">Miami</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">Washington DC</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">Los Angeles</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">Chicago</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="warning">Houston</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                </div>
                            </div>

                        </div>
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP600.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>Peru & Machu Picchu</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
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
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1799 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$799 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP601.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>INCA TRAIL TO MACHU PICCHU</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">Assistances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/breakfast.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">breakfast</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">entrances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/flight.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">flight</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">hotels</span>--}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1599 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$599 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley, Puno,Arequipa</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="content3" class="tab-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP600.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>Peru & Machu Picchu</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
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
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1799 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$799 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP601.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>INCA TRAIL TO MACHU PICCHU</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">Assistances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/breakfast.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">breakfast</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">entrances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/flight.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">flight</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">hotels</span>--}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1599 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$599 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley, Puno,Arequipa</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="content4" class="tab-content">
                        <div class="row margin-top-10">
                            <div class="col-md-12 filter-destinations text-center">

                                <ul class="no-padding">
                                    <li><input type="checkbox" id="cb1" />
                                        <label for="cb1">
                                            <img src="{{asset('images/destinations/tabs/machupicchu.jpg')}}" class="img-responsive"/>
                                            <span>Peru</span>
                                        </label>
                                    </li>
                                    <li><input type="checkbox" id="cb2" />
                                        <label for="cb2">
                                            <img src="{{asset('images/destinations/tabs/uyuni.jpg')}}" class="img-responsive"/>
                                            <span>Bolivia</span>
                                        </label>
                                    </li>
                                    <li><input type="checkbox" id="cb3" />
                                        <label for="cb3">
                                            <img src="{{asset('images/destinations/tabs/rio.jpg')}}" class="img-responsive"/>
                                            <span>Brasil</span>
                                        </label>
                                    </li>
                                    <li><input type="checkbox" id="cb4" />
                                        <label for="cb4">
                                            <img src="{{asset('images/destinations/tabs/galapagos.jpg')}}" class="img-responsive"/>
                                            <span>Ecuador</span>
                                        </label>
                                    </li>
                                </ul>

                                {{--<div class="text-center font-montserrat">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-lg-12">--}}
                                            {{--<p><b>From</b></p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Peru</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Bolivia</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Brasil</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                        {{--<button type="button" class="btn" data-color="warning">Ecuador</button>--}}
                                        {{--<input type="checkbox" class="hidden" />--}}
                                    {{--</span>--}}

                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                {{--</div>--}}
                            </div>

                        </div>
                        {{--<div class="row margin-top-10">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="text-center font-montserrat">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-lg-12">--}}
                                            {{--<p><b>By Days</b></p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="warning">3 - 5</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="warning">6 - 8</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="warning">12 - 15</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="warning">16+</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="warning">unknown</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<label for="success" class="btn btn-success">3 - 5 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">6 - 8 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">12 - 15 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">16+ <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                    {{--<label for="default" class="btn btn-success">unknown <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="text-center font-montserrat">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-lg-12">--}}
                                            {{--<p><b>By Price</b></p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="info">3 - 5</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="info">6 - 8</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="info">12 - 15</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="info">16+</button>--}}
                                    {{--<input type="checkbox" class="hidden" />--}}
                                {{--</span>--}}
                                    {{--<span class="button-checkbox">--}}
                                    {{--<button type="button" class="btn" data-color="info">unknown</button>--}}
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
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP600.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>Peru & Machu Picchu</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
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
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1799 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$799 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offer">
                                    {{--<div class="shape">--}}
                                    {{--<div class="shape-text">--}}
                                    {{--top--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <a href="">
                                            <div class="col-lg-4">
                                                <img src="{{asset('images/packages/GTP601.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row font-montserrat">
                                                    <div class="col-lg-12">
                                                        <b class="text-30 color-grey">6 Days</b>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h2 class="text-20 no-margin color-grey"><strong>INCA TRAIL TO MACHU PICCHU</strong></h2>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="list-services margin-top-20">
                                                            <ul class="no-padding margin-bottom-0">
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/assistances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">Assistances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/breakfast.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">breakfast</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/entrances.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">entrances</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/flight.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">flight</span>--}}
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('images/icons/include/hotels.png')}}" alt="" class="img-responsive">
                                                                    {{--<span class="text-8">hotels</span>--}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-30 margin-bottom-0 margin-top-10 color-goto-orange"><b>$1599 with flights</b></p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="text-20 color-goto-light no-margin">$599 Ground Package</p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="no-margin text-13"><i class="fa fa-map-marker" aria-hidden="true"></i> Machu Picchu, Cusco, Sacred Valley, Puno,Arequipa</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                    <a href="" class="btn btn-lg btn-warning">View all packages</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-middle">
        <div class="fullscreen background parallax" style="background-image:url('images/destinations/home/cusco.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
            <div class="content-a color-white">
                <div class="content-b font-montserrat">
                    <h2>LOCAL PERUVIAN TRAVEL OPERATOR HIGHLY RECOMENDED IN TRIPADVISOR</h2>
                    <h3>Tours starting Daily with our passionateguides, best hotels and smooth local operations.</h3>
                    <a href="" class="btn btn-lg btn-danger margin-top-20">Why us</a>
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
            <div class="col-md-4">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/machupicchu.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Machu<span>picchu</span></h2>
                            <p>Ciudad de los incas</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/cusco.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Cu<span>sco</span></h2>
                            <p>Capital del imperio Inca</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-destinations">
                    <figure class="effect-destinations">
                        <img src="{{asset('images/destinations/home/titicaca.jpg')}}" alt="" class="img-responsive">
                        <figcaption>
                            <h2>Titi<span>caca</span></h2>
                            <p>Civilizacion andina más antigua</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center margin-top-20">
                    <a href="" class="btn btn-lg btn-warning">View featured destination</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-category margin-top-60">
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
                        <div class="item">
                            <div class="grid-category position-relative">
                                <a href="" class="color-goto-grey">
                                    <img src="{{asset('images/category/family.jpg')}}" alt="" class="img-responsive"/>
                                    <div class="grid-box padding-30 text-center">
                                        <span class="no-margin text-20"><i>Family</i> <b>Combos</b></span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="grid-category position-relative">
                                <a href="" class="color-goto-grey">
                                    <img src="{{asset('images/category/trekking.jpg')}}" alt="" class="img-responsive"/>
                                    <div class="grid-box padding-30 text-center">
                                        <span class="no-margin text-20"><i>Trek</i><b>king</b></span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="grid-category position-relative">
                                <a href="" class="color-goto-grey">
                                    <img src="{{asset('images/category/luxury.jpg')}}" alt="" class="img-responsive"/>
                                    <div class="grid-box padding-30 text-center">
                                        <span class="no-margin text-20"><i>Lux</i><b>ury</b></span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="grid-category position-relative">
                                <a href="" class="color-goto-grey">
                                    <img src="{{asset('images/category/galapagos.jpg')}}" alt="" class="img-responsive"/>
                                    <div class="grid-box padding-30 text-center">
                                        <span class="no-margin text-20"><i>Gala</i><b>pagos</b></span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="item">
                            <div class="grid-category position-relative">
                                <a href="" class="color-goto-grey">
                                    <img src="{{asset('images/category/amazon.jpg')}}" alt="" class="img-responsive"/>
                                    <div class="grid-box padding-30 text-center">
                                        <span class="no-margin text-20"><i>Ama</i><b>zon</b></span>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        {{--<div class="item">--}}
                            {{--<div class="grid-category">--}}
                                {{--<figure class="effect-category">--}}
                                    {{--<img src="{{asset('images/category/amazon.jpg')}}" alt="" class="img-responsive"/>--}}
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
                            <div class="col-md-3">
                                <img src="{{asset('images/icons/item/contact.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>CONTACT</h3>
                                <p>Chat with us, give us a call (813)600-3042, send us an e-mail or fill out our online form. Share with us your travel preferences! If you already have an outline, an idea, any questions… we will be more than happy to assist your needs.</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-12">
                            <div class="col-md-3">
                                <img src="{{asset('images/icons/item/design.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>DESIGN</h3>
                                <p>We will craft out a first travel proposal according to the outline or idea that you shared with us. From then on we will customize it until you are satisfied with the planning! We will then send you a day by day itinerary and leave the rest to you!</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-12">
                            <div class="col-md-3">
                                <img src="{{asset('images/icons/item/vacations.png')}}" alt="" class="img-responsive img-circle">
                            </div>
                            <div class="col-md-9">
                                <h3>VACATION</h3>
                                <p>Be ready for an unforgettable vacation to the land of the Incas, with promptly transfers at every point (airports, hotels, buses,trains) with knowledgable local Guides on each destination plus the best hotel locations and perks...GOTOPERU team will be always with you</p>
                            </div>

                        </div><!-- /.col-lg-4 -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <img class="img-responsive" src="{{asset('images/contact.png')}}" alt="" width="140" height="140">
                </div><!-- /.col-lg-4 -->

            </div>
        </div><!-- /.row -->
    </div>


    <div class="container-category margin-top-60">
        <div class="container">
            <div class="row margin-top-40 margin-bottom-20">
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

    <div class="container">
        <div class="text-center font-montserrat margin-top-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/groups.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4>Small Groups and Private tours</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/hour.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4>We live here, trully a 24/7 Assistance</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/customize.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4>Book Now option or Customize a dream trip!</h4>
                        <p>Lorem ipsum dolor si. ipsum dolor si.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
            </div>
            <div class="row margin-bottom-30 margin-top-30">
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/alert.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4>Cutting the middlemen, headquarters at Peru</h4>
                        <p>Lorem ipsum dolor sit am. dolor sit am.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/tripadvisor.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4>We take pride of our tripadvisor reviews!</h4>
                        <p>Lorem ipsum dolor sit amet. dolor sit amet.</p>
                    </div>
                    {{--<p></p>--}}
                </div>
                <div class="col-md-4">
                    <div class="col-md-4 col-lg-offset-4">
                        <img class="img-responsive" src="{{asset('images/icons/item/women.png')}}" alt="">
                    </div>
                    <div class="col-md-12">
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
                    <a href="" class="btn btn-lg btn-warning">About Us</a>
                </div>
            </div>
        </div>
    </div>

@stop