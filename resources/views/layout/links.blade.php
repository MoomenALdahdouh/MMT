<link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/all.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/font.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/swiper.min.css")}}">
<!--Font Cairo-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;800&family=Lalezar&family=Poppins:wght@300&display=swap"
    rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">--}}
<!-- My own style -->
@if(app()->getLocale()=='ar')
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    {{--<link href="{{asset("assets/site/css/style-rtl.css")}}" rel="stylesheet"/>--}}
@else
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
@endif
<link rel="shortcut icon" href="{{asset("assets/admin/images/fav3.png")}}" type="image/x-icon">
<!-- Bootstrap CSS -->
{{--@if(app()->getLocale()=='ar')
    <link href="{{asset("assets/site/vendor/bootstrap-5.1.0-dist/css/bootstrap.rtl.min.css")}}" rel="stylesheet"/>
@else
    <link href="{{asset("assets/site/vendor/bootstrap-5.1.0-dist/css/bootstrap.min.css")}}" rel="stylesheet"/>
@endif--}}
@yield('site_css')
{{--TODO:: MOOMEN S. ALDAHDOUH 1/20/2022--}}
