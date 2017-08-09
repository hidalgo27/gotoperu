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
                    <a href="{{route('testimonials_path')}}">
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
                <h1 class="text-20 color-goto-orange"><strong>About Us</strong></h1>
                <h2 class="text-30 color-goto-green"><b>GO TO PERU... WITH US!</b></h2>
                <p class="text-15">GotoPeru travel agency was founded to fulfill a personal dream: <strong>“Provide first class travel experience for the international community while generating job opportunities locally”</strong>. It is extremely gratifying to employ and reward individuals who extend effort, enthusiasm and commitment to sharing the best of Peru and South America with the rest of the world. </p>
                <p>GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- Page header -->
        <div class="page-header">
            <h2>10 REASONS <small>TO LET OUR GUIDES TAKE YOU ON AN UNFORGETTABLE ADVENTURE!</small></h2>
        </div>
        <!-- /Page header -->

        <!-- Timeline -->
        <div class="about-box">

            <!-- Line component -->
            <div class="line-about text-muted"></div>

            <!-- Separator -->
            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-danger panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="glyphicon glyphicon-heart"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>1. WE CARE</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
                {{--<div class="panel-heading icon">--}}
                    {{--<i class="glyphicon glyphicon-picture"></i>--}}
                {{--</div>--}}
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We promise to do the right thing all the time, every time, for our team, travelers, people and places we visit.
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->


            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-info panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>2. WE ARE ACCESSIBLE</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-success panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>3. WE PROVIDE THE BEST TEAM OF EXPERTS</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    Our expert locals make the difference. They come from all regions across Peru and bring with them unique information and a vast knowledge of main destinations.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-info panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>4. WE ARE INTERNATIONALLY RECOGNIZED</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We are rated as a high quality Travel Operator on TripAdvisor with impeccable testimonials. We are proud members of Promperu, the National Tourism Board, fully licensed and authorized by the government.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-danger panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="glyphicon glyphicon-heart"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>5. WE HELP OUR COMMUNITY</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We aim to make positive differences in the communities where we work and live. We look for ways to improve the standards of living. It is our priority to hire local people, develop their communities and work with local supply chains.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-primary panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>6. WE THINK AHEAD…SO YOU DON’T HAVE TO</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We are aware that surprises, both good and bad, occur while traveling. We are always on top of it and ready to give reliable travel solutions to our customers.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-info panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>7. WE TURN GOOD TRIPS INTO UNFORGETTABLE ADVENTURES</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <div class="col-md-12 margin-bottom-40">
                        We help our travelers choose the perfect trip to the land of the Incas, providing them with the most authentic life-changing adventure possible. We go out of our way to ensure a travel experience unlike anything you’ve seen.
                    </div>
                    <div class="col-md-6">
                        <img src="https://gotoperu.com/img/about/team-meetup.jpg"  class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6">
                        <b>FOR EXAMPLE:</b>
                        <p>We handled different organization trips</p>
                        <img src="https://gotoperu.com/img/logos/meetup.png" alt="">
                    </div>
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-primary panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-level-up" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>8. WE AREN’T AFRAID TO PUSH OUR BOUNDARIES</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We offer alternative extensions to the main South American destinations in Ecuador, Bolivia, Chile, Argentina, Brasil, Uruguay and Columbia. In December, 2015 we will be opening a physical travel office in the USA.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-success panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>9. WE ARE TRUSTWORTHY</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We have glowing testimonials on our website and other acclaimed travel websites. We have set a standard of excellence for our customers by giving them the best Peruvian resources for a memorable journey.
                </div>
                <!-- /Body -->

            </article>

            <div class="separator text-muted">
                {{--<time>26. 3. 2015</time>--}}
            </div>
            <!-- /Separator -->

            <!-- Panel -->
            <article class="panel panel-info panel-outline">

                <!-- Icon -->
                <div class="panel-heading icon">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    <strong>10. WE ARE SINCERE</strong>
                </div>
                <!-- /Body -->

            </article>
            <!-- /Panel -->

            <!-- Panel -->
            <article class="panel panel-default panel-outline">

                <!-- Icon -->
            {{--<div class="panel-heading icon">--}}
            {{--<i class="glyphicon glyphicon-picture"></i>--}}
            {{--</div>--}}
            <!-- /Icon -->

                <!-- Body -->
                <div class="panel-body">
                    We will show you Peru with an open mind and an authentic smile.
                </div>
                <!-- /Body -->

            </article>



            {{--<!-- Panel -->--}}
            {{--<article class="panel panel-default panel-outline">--}}

                {{--<!-- Icon -->--}}
                {{--<div class="panel-heading icon">--}}
                    {{--<i class="glyphicon glyphicon-plus"></i>--}}
                {{--</div>--}}
                {{--<!-- /Icon -->--}}

                {{--<!-- Heading -->--}}
                {{--<div class="panel-heading">--}}
                    {{--<h2 class="panel-title">New content added</h2>--}}
                {{--</div>--}}
                {{--<!-- /Heading -->--}}

                {{--<!-- Body -->--}}
                {{--<div class="panel-body">--}}
                    {{--<strong>2. WE ARE ACCESSIBLE</strong>--}}
                {{--</div>--}}
                {{--<!-- /Body -->--}}

                {{--<!-- Footer -->--}}
                {{--<div class="panel-footer">--}}
                    {{--<small>You will find GoToPeru offices in Lima, Arequipa, Cusco and satellite branches in Quito and La Paz.</small>--}}
                {{--</div>--}}
                {{--<!-- /Footer -->--}}

            {{--</article>--}}
            {{--<!-- /Panel -->--}}

            {{--<!-- Separator -->--}}
            {{--<div class="separator text-muted">--}}
                {{--<time>25. 3. 2015</time>--}}
            {{--</div>--}}
            {{--<!-- /Separator -->--}}

            {{--<!-- Panel -->--}}
            {{--<article class="panel panel-success">--}}

                {{--<!-- Icon -->--}}
                {{--<div class="panel-heading icon">--}}
                    {{--<i class="glyphicon glyphicon-plus"></i>--}}
                {{--</div>--}}
                {{--<!-- /Icon -->--}}

                {{--<!-- Heading -->--}}
                {{--<div class="panel-heading">--}}
                    {{--<h2 class="panel-title">New content added</h2>--}}
                {{--</div>--}}
                {{--<!-- /Heading -->--}}

                {{--<!-- Body -->--}}
                {{--<div class="panel-body">--}}
                    {{--Anything you can do with <code>.panel</code>, can be done in timeline too!--}}
                {{--</div>--}}
                {{--<!-- /Body -->--}}

                {{--<!-- List group -->--}}
                {{--<ul class="list-group">--}}
                    {{--<li class="list-group-item">Like</li>--}}
                    {{--<li class="list-group-item">list</li>--}}
                    {{--<li class="list-group-item">groups</li>--}}
                    {{--<li class="list-group-item">and</li>--}}
                    {{--<li class="list-group-item">tables</li>--}}
                {{--</ul>--}}

            {{--</article>--}}
            {{--<!-- /Panel -->--}}

            {{--<!-- Panel -->--}}
            {{--<article class="panel panel-info panel-outline">--}}

                {{--<!-- Icon -->--}}
                {{--<div class="panel-heading icon">--}}
                    {{--<i class="glyphicon glyphicon-info-sign"></i>--}}
                {{--</div>--}}
                {{--<!-- /Icon -->--}}

                {{--<!-- Body -->--}}
                {{--<div class="panel-body">--}}
                    {{--That is all.--}}
                {{--</div>--}}
                {{--<!-- /Body -->--}}

            {{--</article>--}}
            {{--<!-- /Panel -->--}}

        </div>
        <!-- /Timeline -->

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-50 color-goto-orange"><b>BECAUSE WE CARE</b></h3>
                <p class="text-17">We give back to our <strong>communities
                    Chaullacota</strong> Locates at 15,000 feed (4500 mts) 2 hours Northwest of cusco</p>
            </div>
            <div class="col-md-2">
                <img src="https://gotoperu.com/img/IMG_4480.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-3">
                <img src="https://gotoperu.com/img/social/responsability.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-2">
                <img src="https://gotoperu.com/img/social/responsability-2.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-2">
                <img src="https://gotoperu.com/img/social/responsability-3.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-12 margin-top-30">
                <p class="text-16 text-justify">At GOTOPERU we are committed to doing business in a way that actually give back to our communities specially the one located in remote places. Our planning and execution of one of our trips involves a long supply chain: from local guides and operators to transportation providers to hotels and restaurants, we interact with a lot of different organizations on the ground, but we also know that some communities specially located on top of the Andes at 15,000+feet that due to the difficult access, dont receive the assistance they deserve, is for that reason that we organize periodically trips to this far far away communities to bring them specially sweaters and toys for children.</p>
            </div>
        </div>
    </div>

    <div class="container-category margin-top-60">
        <div class="container">
            <div class="row margin-top-40 margin-bottom-40" id="tour-packages">
                <div class="col-lg-12 text-center font-montserrat">
                    {{--<h1 class="text-20 color-goto-orange"><strong>About Us</strong></h1>--}}
                    <h2 class="text-30 color-goto-green"><b>TOP REASONS TO GO TO PERU</b></h2>
                    {{--<p class="text-15">GotoPeru travel agency was founded to fulfill a personal dream: <strong>“Provide first class travel experience for the international community while generating job opportunities locally”</strong>. It is extremely gratifying to employ and reward individuals who extend effort, enthusiasm and commitment to sharing the best of Peru and South America with the rest of the world. </p>--}}
                    {{--<p>GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>--}}
                </div>
            </div>

            <div class="row margin-bottom-40">
                <div class="col-md-6">
                    <div class="blockquote-box clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-map-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>INCA TRAIL:</b></h4>
                        <p>
                            It is important to visit our ancient Peru travel paths that our Incans created, plus they left some amazing views to enjoy.
                        </p>
                    </div>
                    <div class="blockquote-box blockquote-primary clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-cutlery fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>PERU CUISINE:</b></h4>
                        <p>
                            Peru food is amazing and created with the most tantalizing produce available in Peru.
                        </p>
                    </div>
                    <div class="blockquote-box blockquote-success clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-thumb-tack fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>LOCAL CULTURE:</b></h4>
                        <p>
                            The flea markets and cultural festivals give you a real taste of what Peru is all about. Peruvian diversity culture is very famous!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blockquote-box blockquote-info clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-shopping-bag fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>SHOPPING:</b></h4>
                        <p>
                            Locals at Peru make some wonderful ceramics, hand-woven textiles and even sweaters made from baby alpaca.
                        </p>
                    </div>
                    <div class="blockquote-box blockquote-warning clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-university fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>PERU MUSEUMS:</b></h4>
                        <p>
                            The mummies, golden treasures and more can be visualized in the museums from the past.
                        </p>
                    </div>
                    <div class="blockquote-box blockquote-success clearfix">
                        <div class="square pull-left">
                            <i class="fa fa-play fa-3x" aria-hidden="true"></i>
                        </div>
                        <h4><b>MACHU PICCHU:</b></h4>
                        <p>
                            If you love culture and history, then you must visit the Incan city that has a wonderful view and incredible Peruvian history!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-top-40 margin-bottom-40" id="tour-packages">
            <div class="col-lg-12 text-center font-montserrat margin-bottom-40">
                {{--<h1 class="text-20 color-goto-orange"><strong>About Us</strong></h1>--}}
                <h2 class="text-30 color-goto-green"><b>TOP REASONS TO GO TO PERU</b></h2>
                <p class="text-15">We take pride of our Promises, for each our travelers from solo travelers to large groups.</p>
                {{--<p>GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>--}}
            </div>

            <div class="col-md-6">
                <img src="https://gotoperu.com/img/team/team-10b.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6">
                <h3><b>PROBLEM-FREE TRAVEL</b></h3>
                <p>The itineraries that GOTOPERU create will work for you and your family. Our staff will work day and night to ensure you get to your destinations without delay.</p>

                <h3 class="margin-top-40"><b>PERSONALIZED ITINERARIES</b></h3>
                <p>We want you to have the trip of a lifetime, so email and call us until it exactly where you want it to be. We will make sure that your trip is exactly as you want it.</p>
            </div>
        </div>
    </div>

@stop