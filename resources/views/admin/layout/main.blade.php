<!DOCTYPE html>
{{--<html lang="ar" dir="rtl">--}}
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}}"
      style="direction:{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}};"
      direction="{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}}">
<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;800&family=Lalezar&family=Poppins:wght@300&display=swap" rel="stylesheet">
    @include('admin.layout.links')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<input id="app_url" type="hidden" value="{{env("APP_URL")}}">
<input id="assets_url" type="hidden" value="{{env("asset_url")}}">
<input type="hidden" id="language" value="{{config('app.locale')}}">
<input type="hidden" id="auth_type" value="{{auth("admin")->user()->type}}">
<input type="hidden" id="modal_type" value="0">
@include('admin.layout.master')

<!--begin::Javascript-->
@include('admin.layout.scripts')
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
