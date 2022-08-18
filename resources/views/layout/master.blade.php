<!--loader container -->
@include("layout._loader")
<!-- main header -->
@include("layout._header")
<!-- main header -->
<!-- main content -->
<!-- main wrapper start -->
<div class="cv-main-wrapper">
    @yield('site_content')
</div>
<!-- main wrapper end -->
<!-- main content -->
<!-- main-footer -->
@include("layout._footer")
<!-- main-footer -->
<!--scripts-->
