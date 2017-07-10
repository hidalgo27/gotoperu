<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Travel Packages to Peru | Peru Vacations | Machu Picchu Travel</title>

    {{--estilos--}}
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    {{--fonts--}}
    <link rel="stylesheet" href="{{mix("css/font-awesome.css")}}">

</head>
<body>

<div class="cd-header">
    {{--    <a href="#0" class="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
    <a href="#0" class="cd-3d-nav-trigger">
        Menu
        <span></span>
    </a>
</div> <!-- .cd-header -->
<nav class="cd-3d-nav-container">
    <ul class="cd-3d-nav no-padding">
        <li class="cd-selected">
            <a href="{{route('packages_path')}}">Tour Packages</a>
        </li>

        <li>
            <a href="{{route('destinations_path')}}">Destinations</a>
        </li>

        <li>
            <a href="https://gotoperu.com/getting-to-peru/" target="_blank">Getting To Peru</a>
        </li>

        <li>
            <a href="https://gotoperu.com/faq/" target="_blank">FAQ</a>
        </li>

        <li>
            <a href="#">Travel Blog</a>
        </li>
    </ul> <!-- .cd-3d-nav -->

    <span class="cd-marker color-1"></span>
</nav> <!-- .cd-3d-nav-container -->

<div id="cd-intro">
    <div class="banner-header color-white hidden-xs">
        <div class="banner-header-top font-montserrat">
            @foreach($paquete_h as $paquetes)
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="text-18 color-goto-orange no-margin"><span class="display-block text-30"><b class="color-white">{{$paquetes->duracion}} days</b></span> {{ucfirst(strtolower($paquetes->titulo))}}</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="{{route('home_show_path', str_replace(' ','-',strtolower($paquetes->titulo)))}}" class="btn btn-warning btn-lg color-white margin-top-20">View Trip</a>
                    </div>
                    <div class="col-md-12 text-center margin-top-10">
                        <b class="text-21">ALL FLIGHTS INCLUDED</b>
                    </div>
                </div>
            <div class="row margin-top-10">
                <div class="col-md-12">
                    <div class="list-services text-center">
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
                    <p class="text-20 margin-top-5">
                        <b class="text-25 color-goto-orange"><sup class="color-goto-light">from $ </sup>
                            @foreach($paquetes->precio_paquetes as $precio)
                                @if($precio->estrellas == 2)
                                    {{$precio->precio_d}}
                                @endif
                            @endforeach
                        </b>
                        All Included
                    </p>
                </div>
            @endforeach
            </div>
        </div>

    </div>
    <div class="container-fluid">

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
    </div>
    <div id="cd-intro-tagline" class="font-montserrat clearfix">
        {{--<h1>Secondary Fixed Navigation</h1>--}}

        <div class="col-md-7 col-md-offset-5  margin-top-50">
            <div class="">
                <div class="col-md-12 margin-bottom-20">
                    <p class="text-23 no-margin">WE WILL CUSTOMIZE <b class="color-goto-orange">TOGETHER</b> A DREAM VACATION!</p>
                </div>
                <div class="col-md-7 no-padding hidden-sm">
                    <div class="text-right">
                        <p class="text-16 no-margin">$150 average saving</p>
                        <p class="text-16 no-margin">24/7 local assistance</p>
                        <p class="text-16 no-margin">100s of testimonials</p>
                    </div>
                    {{--<div class="padding-10">--}}
                        {{--<p class="text-16 no-margin">Book Today</p>--}}
                        {{--<a href="" class="cd-btn-header bg-goto-green">View Offers</a>--}}
                    {{--</div>--}}
                </div>
                <div class="col-md-2 hidden-sm">
                    {{--<a href="#cd-inquire" class="cd-btn">Inquire Now</a>--}}
                    <a href="#cd-inquire" class="cd-btn"><span class="hide">Inquire Now</span><img src="{{asset('images/icons/item/inquire.png')}}" alt="" class="img-responsive pull-right"></a>
                </div>
            </div>
            {{--<a href="" class="cd-btn">Inquire Now</a>--}}
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
                <a href="{{route('packages_path')}}">
                    <b>TRAVEL PACKAGES</b>
                    {{--<span></span><!-- icon -->--}}
                </a>
            </li>
            <li>
                <a href="{{route('packages_path')}}">
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
                <a href="https://gotoperu.com/about-us/" target="_blank">
                    <b>ABOUT US</b>
                    {{--<span></span><!-- icon -->--}}
                </a>
            </li>
            <li>
                <a href="#tour-packages" target="_blank">
                    <b>FLIGHTS</b>
                    {{--<span></span><!-- icon -->--}}
                </a>
            </li>
            <li>
                <a href="https://gotoperu.com/faq/" target="_blank">
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

<div class="container-category hidden-xs">
    <div class="row padding-top-10 padding-bottom-10"><!--.row -->
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/apavit.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/apotur.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/asta.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/expedia.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/facebook.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/meetup.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="{{asset('images/logos/new.png')}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="http://gotoperu.travel/img/logos/peru.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="http://gotoperu.travel/img/logos/prom-peru.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="http://gotoperu.travel/img/logos/tripadvisor.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="http://gotoperu.travel/img/logos/yelp.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-1 col-sm-1">
            <img src="http://gotoperu.travel/img/logos/youtube.png" alt="" class="img-responsive">
        </div>
    </div>
</div>

@yield('content')

<div class="container-testimonial margin-top-70 hidden-xs hidden-sm" id="reviews">
    <div class="container">
        <div class="row container-testimonial-box">
            <div class="col-md-6">
                {{--<img src="{{asset('images/blog/cusco.jpg')}}" alt="" class="img-responsive">--}}
            </div>
            <div class="col-md-6">
                <div class="color-white">
                    <h3><i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i> Everything about this trip was wonderful and it was because of the service and attention of the great staff at GOTOPERU</h3>
                    <p class="text-right">Jennifer Powers & Family New York - USA</p>
                    <a href="https://gotoperu.com/testimonials/" target="_blank" class="btn btn-lg btn-warning margin-top-20 text-right">View All Testimonials</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('.layouts.page.form')


<div class="banner-middle margin-top-85">
    <div class="fullscreen background parallax" style="background-image:url('images/destinations/home/cusco.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
        <div class="content-a color-white">
            <div class="content-b font-montserrat">
                <h2>LOCAL PERUVIAN TRAVEL OPERATOR HIGHLY RECOMENDED IN TRIPADVISOR</h2>
                <h3 class="hidden-xs">Tours starting Daily with our passionate guides, best hotels and smooth local operations.</h3>
                {{--<a href="https://gotoperu.com/testimonials/" target="_blank" class="btn btn-lg btn-danger margin-top-20">Why us</a>--}}
            </div>
        </div>
    </div>
</div>

<div class="container hidden-xs hidden-sm">
    <div class="row margin-top-100">
        <div class="col-md-6">
            <h2 class="font-montserrat color-goto-green">WE ARE ONE PERU´S LEADING GROUP TRAVEL PROVIDERS : GOTOPERU</h2>
            <p>A local company with local knowledge, expertise and resources, specializing in the design of unforgettable vacations. Our unique activities, Peru tours & excursions, Peru hotel deals, transportation and program logistics make us Peru leading travel experts. GOTOPERU offer you every kind of travel services you need; ranging from all inclusive Peru travel packages, accommodations, and entertainment and leisure activities. In addition offering different types of travel products like "Online-Booking" and personal "Custom-made Trips"</p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-video-1 margin-bottom-10">
                        <img src="https://gotoperu.com/img/video/prom-peru.jpg" alt="video" class="img-responsive">

                        <div class="content-video-btn-1">
                            <a href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=11b1c2&amp;wmode=opaque"  class="html5lightbox content-vbtn-color-blue" data-width="570" data-height="320" title="title here "><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-12">--}}
                {{--<div class="content-video-1">--}}
                {{--<img src="https://gotoperu.com/img/video/gotoperu-group.jpg" alt="video" class="img-responsive">--}}

                {{--<div class="content-video-btn-1">--}}
                {{--<a href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=11b1c2&amp;wmode=opaque"  class="html5lightbox content-vbtn-color-blue" data-width="570" data-height="320" title="title here "><i class="fa fa-play-circle"></i></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row margin-top-60 margin-bottom-20">
        <div class="col-md-12">
            <div class="text-center font-montserrat">
                <h2 class="color-goto-orange">Outstanding work by our Chief Explorer Kim MacQuarrie</h2>
                {{--<h3>We have it all. Just ask!</h3>--}}
                {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
            </div>
        </div>
    </div>

    <div class="row margin-top-20 font-montserrat">
        <div class="col-md-6 col-sm-6 margin-bottom-30">
            <a href="" class="color-goto-grey">
                <h4>Peru travel useful information</h4>
                <img src="{{asset('images/blog/currency.jpg')}}" alt="" class="img-responsive">
            </a>
        </div>
        <div class="col-md-6 col-sm-6 margin-bottom-30">
            <a href="" class="color-goto-grey">
                <h4>Andes travel guide</h4>
                <img src="{{asset('images/blog/cusco.jpg')}}" alt="" class="img-responsive">
            </a>
        </div>
    </div>

    <div class="row margin-top-60 margin-bottom-20">
        <div class="col-md-12">
            <div class="text-center font-montserrat">
                <a href="" class="btn btn-lg btn-warning">View our bloc</a>
            </div>
        </div>
    </div>


</div>

<div class="container">
    <div class="row margin-top-85 margin-bottom-10"><!--.row -->
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img src="{{asset('images/logos/logo-facebook.png')}}" title="gotoperu facebook 30k like" alt="gotoperu facebook 30k like" class="img-responsive"></a></div>

        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="http://www.asta.org/MemberServices/MemberDirectoryIndivdualDisplayASTA.cfm?navItemNumber=11304&amp;id=900235751" target="_blank"><img src="{{asset('images/logos/logo-asta-grey.png')}}" title="asta" alt="logo asta" class="img-responsive"></a></div>

        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="http://investors.nytco.com/press/press-releases/press-release-details/2014/The-New-York-Times-Travel-Show-Announces-Special-Travel-Discounts-for-Show-Attendees/default.aspx" target="_blank"><img src="{{asset('images/logos/logo-newyorktimes.png')}}" title="the new york times" alt="the new york times" class="img-responsive"></a></div>

        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="http://apoturperu.org/" target="_blank"><img src="{{asset('images/logos/logo-apotur.png')}}" title="apotur" alt="logo apotur" class="img-responsive"></a></div>

        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="http://www.peru.travel/en-us/Search-Travel-Services/pageindex/0/categoryid/5/subcategoryidl1/-1/subcategoryidl2/-1.aspx?keyword=go+to+peru&amp;destid=,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25" target="_blank"><img src="{{asset('images/logos/logo-promperu.png')}}" title="promperu" alt="logo promperu" class="img-responsive"></a></div>

        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"><a href="#" target="_blank"><img src="{{asset('images/logos/logo-meetup.png')}}" title="meetup" alt="logo meetup" class="img-responsive"></a></div>
    </div>
</div>

<footer class="margin-top-60">
    <img src="{{asset('images/footer-1.jpg')}}" alt="" class="img-responsive">
</footer>
{{--scripts--}}
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
</script>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/admin/plugins.js")}}"></script>
<script>
    function sendDesign(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#f_send").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;

        var s_category = document.getElementsByName('category[]');
        var $category = "";
        for (var i = 0, l = s_category.length; i < l; i++) {
            if (s_category[i].checked) {
                $category += s_category[i].value+' , ';
            }
        }
        s_category = $category.substring(0,$category.length-3);

        var s_number = document.getElementsByName('number[]');
        var $number = "";
        for (var i = 0, l = s_number.length; i < l; i++) {
            if (s_number[i].checked) {
                $number += s_number[i].value+' , ';
            }
        }

        s_number = $number.substring(0,$number.length-3);


        var s_days = document.getElementsByName('days[]');
        var $days = "";
        for (var i = 0, l = s_days.length; i < l; i++) {
            if (s_days[i].checked) {
                $days += s_days[i].value+' , ';
            }
        }

        s_days = $days.substring(0,$days.length-3);


        var s_date = $('#f_date').val();
        var s_description = $('#f_description').val();
        var s_name = $('#f_name').val();
        var s_package = $('#f_package').val();
        var s_email = $('#f_email').val();
        var s_phone = $('#f_phone').val();


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#f_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#f_name').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }
        if (s_date.length == 0 ){
            $('#f_date').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {

                "txt_category" : s_category,
                "txt_number" : s_number,
                "txt_days" : s_days,
                "txt_date" : s_date,
                "txt_description" : s_description,

                "txt_name" : s_name,
                "txt_package" : s_package,
                "txt_email" : s_email,
                "txt_phone" : s_phone,

            };
            $.ajax({
                data:  datos,
                url:   "{{route('mail_path')}}",
                type:  'post',

                beforeSend: function () {
                    $('#f_send').removeClass('show');
                    $("#f_send").addClass('hide');
                    $("#loader").removeClass('hide');
                    $("#loader").addClass('show');
                },
                success:  function (response) {
                    $('#f_form')[0].reset();
                    $('#f_send').removeClass('show');
                    $('#f_send').addClass('hide');
                    $("#loader").removeClass('show');
                    $("#loader").addClass('hide');
                    $('#f_check').removeClass('hidden');
                    $("#f_check").addClass('show');
                    $("#f_congratulation b").html(response);
                    $("#f_congratulation").fadeIn('slow');
                    $("#f_send").removeAttr("disabled");
                }
            });
        } else{
            $("#f_send").removeAttr("disabled");
        }
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>
</html>