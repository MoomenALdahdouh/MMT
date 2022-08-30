<!doctype html>
{{--<html lang="ar" dir="rtl">--}}
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}}">
{{--<html lang="en">--}}
<head>
    <base href="./"/>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="theme-color" content="#000000"/>
    <title>{{__("str.project_name")}} @yield("site_title")</title>
    <meta name="description" content="@yield("site_description")"/>
    <meta name="author" content="@yield("site_author")"/>
    <meta name="keywords" content="@yield("site_keywords")"/>
    <meta name="copyright" content="@yield("site_copyright")"/>
    {{--TODO:: MOOMEN S. ALDAHDOUH 1/20/2022--}}
    @php
        use App\Models\AboutUs;
        use App\Models\FollowUs;
        $about_us = AboutUs::query()->get()->first();
        $follow_us = FollowUs::query()->get()->first();
    @endphp
    @include('layout.links')
</head>
<body>
<input id="app_url" type="hidden" value="{{env("APP_URL")}}">
<input id="assets_url" type="hidden" value="{{env("asset_url")}}">
<input type="hidden" id="language" value="{{config('app.locale')}}">
@include('layout.master')
<!-- Optional JavaScript; choose one of the two! -->
@include('layout.scripts')
</body>
</html>
{{--TODO:: MOOMEN S. ALDAHDOUH 1/20/2022--}}
