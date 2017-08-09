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
                    <a href="#reviews">
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
                {{--<h1 class="text-20 color-goto-orange"><strong>About Us</strong></h1>--}}
                <h2 class="text-30 color-goto-green"><b>Frequently Asked Questions</b></h2>
                <p class="text-15">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>
                {{--<p>GotoPeru has become a family for all of us. The best thing about working in GotoPeru is that it requires me to be permanently connected to the world of art, culture, archaeology, geography, wildlife conservation, and cuisine. For this reason, it helps me to understand more of the travel world and formulate new methods that ensure our customers’ memorable travel experience. It is also enriching to interact with different yet all amazing people from all over the globe daily as it teaches me more of their culture.</p>--}}
            </div>
        </div>
    </div>

    <div class="container margin-top-60">
        <div class="row faq-indice">
            <div class="col-lg-6">
                <ul>
                    <li><a href="#faq1" class="page-scroll"><i class="fa fa-angle-right"></i> When Is the Best Time to Travel to Peru?</a></li>
                    <li><a href="#faq2" class="page-scroll"><i class="fa fa-angle-right"></i> Are There Any Tips for Staying Healthy During My Trip?</a></li>
                    <li><a href="#faq3" class="page-scroll"><i class="fa fa-angle-right"></i> What Are the Effects of Altitude? How Can I Prevent Altitude Sickness?</a></li>
                    <li><a href="#faq4" class="page-scroll"><i class="fa fa-angle-right"></i> What Kinds of Food Are Available in Peru?</a></li>
                    <li><a href="#faq5" class="page-scroll"><i class="fa fa-angle-right"></i> What Should I Do to Stay Safe in Peru?</a></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li><a href="#faq6" class="page-scroll"><i class="fa fa-angle-right"></i> What Currency Do I Need in Peru?</a></li>
                    <li><a href="#faq7" class="page-scroll"><i class="fa fa-angle-right"></i> Do I Tip for Services in Peru?</a></li>
                    <li><a href="#faq8" class="page-scroll"><i class="fa fa-angle-right"></i> Can Yellow Fever or Malaria Affect Me While in Peru?</a></li>
                    <li><a href="#faq9" class="page-scroll"><i class="fa fa-angle-right"></i> Do Travelers from the UK Need a Visa to Travel to Peru?</a></li>
                    <li><a href="#faq10" class="page-scroll"><i class="fa fa-angle-right"></i> What Is the One Thing I Should Know Before Beginning My Trip?</a></li>
                </ul>
            </div>
        </div>
        <div class="row margin-top-20 faq-indice text-justify">
            <div class="col-lg-6 col-lg-offset-3">
                <h3 class="padding-bottom-10 padding-top-20" id="faq1"><b>When Is the Best Time to Travel to Peru?</b></h3>
                <div class="sec-title-div-6"></div>
                <p class="padding-bottom-5">If your travel dates are flexible, the majority of travelers prefer to go to Peru in the dry season, from May to October. If you plan on hiking, the best months to visit are April, May, September, and October—though the rainy season can sometimes end later or begin earlier than normal. Early in the dry season is ideal for visiting the Amazon too, and taking advantage of more Peru travel packages across the various regions. </p>

                <p> Plenty of people visit in the rainy season between November and March, when visitor numbers are fewer and you might find cheaper flights (with Christmastime as the exception). The mornings are generally clear and warm, but the days gradually become cloudy leading to possible rain in the afternoon.</p>
                <h3 class="padding-bottom-10 padding-top-20" id="faq2"><b>Are There Any Tips for Staying Healthy During My Trip?</b></h3>
                <div class="sec-title-div-6 "></div>
                <p class="padding-top-5">It is important to drink plenty of water while in Peru, about 2-3 liters per day. At altitude, the low air pressure has diuretic effects, as does heat and humidity in the Amazon region. Drink treated, bottled, or pre-boiled water—the public water, though relatively safe and chlorinated, may cause mild stomach discomfort. To reduce waste, choose NB treated or boiled water.</p>

                <p>When at altitude, do not underestimate the strength of the sun’s UV rays. Overexposure to the sun can contribute to altitude sickness, especially in its early stages. Wear a sunhat with a broad brim for protection.</p>

                <p>It is best to avoid eating food from street vendors, unless you are sure that it has been freshly prepared and cooked, and has been served on clean dishes.</p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq3"><b>What Are the Effects of Altitude? How Can I Prevent Altitude Sickness?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>When in the tropics, being at altitude feels like a treat as it provides relief from the heat, the air is crisp and clear, and there are less insects. When you arrive at altitude, begin by resting for a few hours, and engaging in minimal activity the first couple days. Even if you feel fine on arrival, avoid the temptation to go straight to your normal level of exertion—oxygen still in your blood, brought up from sea level, might make you think you feel normal.</p>

                <p>Avoid dehydration by drinking plenty of water, as altitude is a diuretic. The local beverage mate de coca, or coca tea, assists in alleviating symptoms. Light, low fat, low protein, and high carbohydrate meals should be eaten. Allow for digestion time before bed by dining early.</p>

                <p>It is best to eliminate, or at least minimize, the consumption of alcohol, cigarettes, and sleeping pills.</p>
                <h3 class="padding-bottom-10 padding-top-20" id="faq4"><b>What Kinds of Food Are Available in Peru?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>Peru has a wonderful variety of fruits and vegetables! Any vegetable or tropical fruit you could name is available here, as are 2,000 varieties of potatoes. Native Peruvians are especially fond of aji, a chili pepper, and ajo, or garlic. The range of local specialty dishes is broad, with each region featuring its own distinct style of cuisine.</p>

                <p>The coast of Peru and Lima are well known for delicious ‘creole’ cuisine—a delicious and sophisticated choice. Such dishes typically incorporate shellfish, prepared with a lemon juice marinade, onions, and red peppers—though a wide spectrum of scrumptious seafood specialties are served! </p>

                <p>Though less diverse and sophisticated, Andean cuisine can also be delicious. Typical dishes of the region include cuy, or guinea pig, and chicharron de chancho, or deep fried pork. Vegetarians will also find a variety of suitable options in Peru. </p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq5"><b>What Should I Do to Stay Safe in Peru?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>If you are acclimating to Peruvian culture, the Miraflores suburb of Lima is a good home base. When it comes to organized tours Cusco, Lima, and other urban areas are often best initially explored in a group. This is known as a safe district, though it is highly recommendable to take the following safety precautions:</p>

                <ul class="no-padding">
                    <li><i class="fa fa-check color-orange-2"></i> Leave your valuables in the caja fuerte, or safe, at your hotel. Only take what you absolutely need for the day with you. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Be sure to carry a copy of your passport, leaving the original in the hotel safe.</li>
                    <li><i class="fa fa-check color-orange-2"></i> Carry your valuables in a money belt hidden from view under clothing. Avoid using a conspicuous ‘fanny pack’ or ‘bum bag.’</li>
                    <li><i class="fa fa-check color-orange-2"></i> Be wary of overly friendly tourists or local men and women—they may be con artists.</li>
                    <li><i class="fa fa-check color-orange-2"></i> It is best to avoid the beaches during the off season, and never leave items unattended on the beach as bag snatchers are prevalent.</li>
                    <li><i class="fa fa-check color-orange-2"></i> It is to recommendable to exchange currency on the street. It is best to go to a casa de cambio, or money exchange office, an ATM machine, or a bank. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Take extra special care in downtown Lima. Only use a backpack if you are on guided Lima tours or with a large group, and carry it on your front. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Avoid downtown Lima when alone at night. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Keep your camera in a bag, and put it back after taking any photographs. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Beware of techniques to distract you and steal your belongings. Take special care in the bus stations and markets in Central Lima, at Arequipa’s San Camilo market, and the San Pedro market in Cusco. Never take valuables, purses, or bags into these areas, which are rife with pickpockets, thieves who slash bags to remove valuables, and jewelry and watch robbers. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Use caution at night—especially when alone. Avoid streets with poor lighting, or quiet streets. Take taxis at night, no matter where in Peru you are. </li>
                    <li><i class="fa fa-check color-orange-2"></i> Always keep your bags with you, never leaving them unattended. This is especially true for bus terminals, hotel lobbies, airports, and other heavy tourist areas.</li>
                </ul>

                <h3 class="padding-bottom-10 padding-top-20" id="faq6">What Currency Do I Need in Peru?</h3>
                <div class="sec-title-div-6"></div>
                <p>If you are acclimating to Peruvian culture, the Miraflores suburb of Lima is a good home base. When it comes to organized tours Cusco, Lima, and other urban areas are often best initially explored in a group. This is known as a safe district, though it is highly recommendable to take the following safety precautions:</p>
                <p>While Peru uses its own monetary unit, the ‘Nuevo Sol,’ it is wise for travelers to carry some US dollars just in case. If you bring US dollars, it is best to bring medium- to high-denomination cash bank notes. If dollar bills are marked or damaged, they might not be accepted in Peru.</p>

                <p>It is best to carry an ATM card, as ‘hole in the wall’ ATM machines are generally available in Peru’s cities and large towns, and widely available in Arequipa, Cusco, Huaraz, Lima, Puno, and the Lima Airport. Travelers’ Checks in US dollars can be changed in most cities and large towns, though there may be a commission fee.</p>

                <p>Major credit cards from international providers are often accepted in shops and restaurants, though you may be charged a fee. </p>

                <p>Never change currency with cambistas, or street money exchangers. It is best to use a casa de cambio, or exchange bureau, or a bank when changing money. Ask the agent to provide you with billetes chicos, or small notes, like 10 or 20 sol notes. It can be difficult to get change for larger bills once outside of Lima. Before you turn over any US currency, count your soles carefully, also checking for forged notes.</p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq7"><b>Do I Tip for Services in Peru</b></h3>
                <div class="sec-title-div-6"></div>
                <p>Tipping is a part of everyday life in Latin America. At restaurants, it is normal to tip about 10%. It is also appropriate to leave a tip for local staff when trekking, when on rafting, biking, and jungle expeditions, when on Machu Picchu tours, and when on organized Peru tours. </p>
                <p>The amount of gratuity you choose should depend on the length of time the staff spent assisting you, and your satisfaction with the level of service provided. Please bear in mind that overly generous tips are counterproductive. When on multi-day Peru travel expeditions, consider giving $5-10 USD per day to the guide, and smaller amounts to staff like cooks, assistants, and drivers. It is best to tip in the local currency, using small bills.</p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq8"><b>Can Yellow Fever or Malaria Affect Me While in Peru?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>If you are travelling to the Amazon basin, a Yellow Fever vaccination is required. Plan ahead, as inoculations are only effective after 10-14 days. Apply this same advice to Malaria.</p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq9"><b>Do Travelers from the UK Need a Visa to Travel to Peru?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>No prior visa is required for UK nationals to enter Peru. A visa valid for six months (183 days) will be issued upon entry.</p>

                <h3 class="padding-bottom-10 padding-top-20" id="faq10"><b>What Is the One Thing I Should Know Before Beginning My Trip?</b></h3>
                <div class="sec-title-div-6"></div>
                <p>The best piece of advice is to take half the clothing you think you will need, and two times the money. In a pinch, there are many markets to buy clothing and ample laundromats. Only bring one formal outfit if you plan to go all out at a fine restaurant. The lighter your pack the better—leave space for souvenirs when you travel Peru!</p>
            </div>
        </div>
    </div>
@stop