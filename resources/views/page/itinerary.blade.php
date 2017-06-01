@extends('layouts.page.itinerary')

@section('content')

    <div class="container">
        <div class="row margin-top-40">
            <div class="col-md-8 font-montserrat">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="color-goto-orange"><strong>Peru Packages: Machu Picchu Express</strong></h1>
                        <p class="text-18"><b>Machu Picchu, Cusco, Sacred Valley</b></p>
                    </div>
                </div>
                <div class="row">
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

                                        <p><strong>Day 1 :</strong> Arrival in Lima</p>
                                        <p><strong>Day 2 :</strong> Arrival in Cusco <p/>
                                        <p><strong>Day 3 :</strong> Cusco City Tour <p/>
                                        <p><strong>Day 1 :</strong> Sacred Valley Tour</p>
                                        <p><strong>Day 2 :</strong> Machu Picchu Tour <p/>
                                        <p><strong>Day 3 :</strong> Departure from Cusco <p/>


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
                            <b class="text-primary display-block text-left text-30">6 Days</b>
                            <span class="color-goto-orange">From<sup>$</sup><b class="text-50">1019</b>USD</span>
                            <p class="text-15">Machu Picchu, Cusco, Sacred Valley</p>
                            <a class="btn btn-primary btn-embossed" style="width: 100%;padding: 10px 0px;" href="#form-dream-adventure">
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

        <div class="row">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Itinerary</strong></h3>
            </div>
        </div>

        <div class="row main-wrapper">
            <div class="col-md-8">
                <div class="cd-articles">
                    <article class="text-justify">
                        <header>
                            {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                            <h2 class="font-montserrat text-20"><b>Day 1:</b> Lorem ipsum dolor sit amet, consectetur</h2>
                        </header>

                        <div class="col-md-6 pull-right margin-top-20">
                            <div class="project">
                                <figure class="img-responsive">
                                    <img src="{{asset('images/destinations/home/cusco.jpg')}}" class="img-responsive">
                                    <span class="actions">
                                        <a href="#" data-toggle="modal" data-target=".img-gallery-1"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </span>
                                </figure>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate. Blanditiis sunt obcaecati corporis, alias adipisci. Eum illum voluptatibus expedita nulla eius provident pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate.</p>

                        <button class="btn btn-default" data-toggle="modal" data-target=".img-gallery-1">View Gallery</button>

                        <div class="modal fade img-gallery-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="carousel-itinerary-1" class="carousel slide" data-ride="carousel">

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
                                        <a class="left carousel-control" href="#carousel-itinerary-1" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-itinerary-1" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="text-justify">
                        <header>
                            {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                            <h2 class="font-montserrat text-20"><b>Day 2:</b> Lorem ipsum dolor sit amet, consectetur</h2>
                        </header>

                        <div class="col-md-6 pull-right margin-top-20">
                            <div class="project">
                                <figure class="img-responsive">
                                    <img src="{{asset('images/destinations/home/cusco.jpg')}}" class="img-responsive">
                                    <span class="actions">
                                        <a href="#" data-toggle="modal" data-target=".img-gallery-2"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </span>
                                </figure>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate. Blanditiis sunt obcaecati corporis, alias adipisci. Eum illum voluptatibus expedita nulla eius provident pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate.</p>

                        <button class="btn btn-default" data-toggle="modal" data-target=".img-gallery-2">View Gallery</button>

                        <div class="modal fade img-gallery-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="carousel-itinerary-2" class="carousel slide" data-ride="carousel">

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
                                        <a class="left carousel-control" href="#carousel-itinerary-2" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="text-justify">
                        <header>
                            {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                            <h2 class="font-montserrat text-20"><b>Day 3:</b> Lorem ipsum dolor sit amet, consectetur</h2>
                        </header>

                        <div class="col-md-6 pull-right margin-top-20">
                            <div class="project">
                                <figure class="img-responsive">
                                    <img src="{{asset('images/destinations/home/cusco.jpg')}}" class="img-responsive">
                                    <span class="actions">
                                        <a href="#" data-toggle="modal" data-target=".img-gallery-3"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </span>
                                </figure>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate. Blanditiis sunt obcaecati corporis, alias adipisci. Eum illum voluptatibus expedita nulla eius provident pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate.</p>

                        <button class="btn btn-default" data-toggle="modal" data-target=".img-gallery-3">View Gallery</button>

                        <div class="modal fade img-gallery-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="carousel-itinerary-3" class="carousel slide" data-ride="carousel">

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
                                        <a class="left carousel-control" href="#carousel-itinerary-3" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-itinerary-3" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="text-justify">
                        <header>
                            {{--<img src="{{asset('images/banners/cusco.jpg')}}" alt="article image" class="img-responsive">--}}
                            <h2 class="font-montserrat text-20"><b>Day 4:</b> Lorem ipsum dolor sit amet, consectetur</h2>
                        </header>

                        <div class="col-md-6 pull-right margin-top-20">
                            <div class="project">
                                <figure class="img-responsive">
                                    <img src="{{asset('images/destinations/home/cusco.jpg')}}" class="img-responsive">
                                    <span class="actions">
                                        <a href="#" data-toggle="modal" data-target=".img-gallery-4"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </span>
                                </figure>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate. Blanditiis sunt obcaecati corporis, alias adipisci. Eum illum voluptatibus expedita nulla eius provident pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatem, quisquam veniam sequi in quasi excepturi laudantium fugit nihil odio minima quae consequuntur dolorum pariatur obcaecati, adipisci dignissimos officia saepe itaque deleniti porro odit vitae voluptate.</p>

                        <button class="btn btn-default" data-toggle="modal" data-target=".img-gallery-4">View Gallery</button>

                        <div class="modal fade img-gallery-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div id="carousel-itinerary-4" class="carousel slide" data-ride="carousel">

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
                                        <a class="left carousel-control" href="#carousel-itinerary-4" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-itinerary-4" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>



                </div> <!-- .cd-articles -->
            </div>
            <div class="col-md-4">
                <aside class="aside-itinerary margin-top-30" id="sidebar">
                    <img src="{{asset('images/itinerary/GTP500.jpg')}}" alt="" class="img-responsive">
                    <ul>
                        <li>
                            <a href="index.html">
                                <em>Day 1: Lorem ipsum dolor sit amet.</em>
                                {{--<b>by J. Morrison</b>--}}
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36"><circle fill="none" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle></svg>
                            </a>
                        </li>

                        <li>
                            <a href="how-star-wars-brought-kim-and-kanye.html">
                                <em>Day 2: Lorem ipsum dolor sit amet.</em>
                                {{--<b>by J. Morrison</b>--}}
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36"><circle fill="none" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle></svg>
                            </a>
                        </li>

                        <li>
                            <a href="how-audiences-reacted-to-the-star-wars.html">
                                <em>Day 3: Lorem ipsum dolor sit amet.</em>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36"><circle fill="none" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle></svg>
                            </a>
                        </li>

                        <li>
                            <a href="the-ultimate-star-wars-dictionary.html">
                                <em>Day 4: Lorem ipsum dolor sit amet.</em>
                                <svg x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36"><circle fill="none" stroke-width="2" cx="18" cy="18" r="16" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle></svg>
                            </a>
                        </li>
                    </ul>
                </aside> <!-- .cd-read-more -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="color-goto-grey font-montserrat"><strong>Prices</strong></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <div class="panel panel-default panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$688</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Price per person based on double accomodation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="panel panel-default panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$799</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Price per person based on double accomodation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="panel panel-default panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$999</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Price per person based on double accomodation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="panel panel-default panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$1349</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Complete Package</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Price per person based on double accomodation</li>
                    </ul>
                </div>
            </div>
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