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
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div class="cd-header">
    {{--    <a href="#0" class="cd-logo"><img src="{{asset('images/cd-logo.svg')}}" alt="Logo"></a>--}}
    <a href="#0" class="cd-3d-nav-trigger">
        Menu
        <span></span>
    </a>
</div> <!-- .cd-header -->
<nav class="cd-3d-nav-container">
    <ul class="cd-3d-nav no-padding">
        {{--<li class="cd-selected">--}}
        <li>
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
            <a href="#0">Travel Blog</a>
        </li>


    </ul> <!-- .cd-3d-nav -->

    <span class="cd-marker color-1"></span>
</nav> <!-- .cd-3d-nav-container -->


@yield('content')

<div class="container-testimonial margin-top-70 hidden-xs">
    <div class="container">
        <div class="row container-testimonial-box">
            <div class="col-md-6">
                {{--<img src="{{asset('images/blog/cusco.jpg')}}" alt="" class="img-responsive">--}}
            </div>
            <div class="col-md-6">
                <div class="color-white">
                    <h3><i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i> Everything about this trip was wonderful and it was because of the service and attention of the great staff at GOTOPERU</h3>
                    <p class="text-right">Jennifer Powers & Family New York - USA</p>
                    <a href="" class="btn btn-lg btn-warning margin-top-20 text-right">View All Testimonials</a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('.layouts.page.form')


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

@include('layouts.page.footer')

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

</script>
</body>
</html>