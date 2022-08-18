<!-- main header -->
@php
    $language = config('app.locale');
    $url = \Illuminate\Support\Facades\URL::current();
    $previous_url = \Illuminate\Support\Facades\URL::previous();
@endphp
<!-- top header start -->
<div class="cv-top-header-two">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cv-head-contact">
                    <h3>Phone: <a style="color: #FFF; font-weight: bold" href="tel:+001 456-789-2591">+001
                            456-789-2591</a></h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cv-head-email">
                    <h3>Email : <a style="color: #FFF; font-weight: bold" href="mailto:support@domian.com">example@medical.com</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top header end -->
<!-- main header start -->
<div class="cv-header-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-7">
                <div class="cv-logo">
                    <a href="{{url("/")}}"><img width="170px" src="{{asset("assets/images/logo-color.png")}}" alt="image"
                                               class="img-fluid"/></a>
                </div>
            </div>
            <div class="col-lg-9 col-5">
                <div class="cv-nav-bar">
                    <div class="cv-menu">
                        <ul>
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li><a href="{{url("/#service")}}">Service</a></li>
                            <li><a href="{{url("/#gallery")}}">Product Gallery</a></li>
                            <li><a href="{{url("/#about_us")}}">About Us</a></li>
                            <li><a href="{{url("/#contact_us")}}">Contact Us</a></li>
                            <li class="cv-children-menu"><a href="javascript:;">Language</a>
                                <ul class="cv-sub-mmenu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Arabic</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="cv-head-icon">
                        <div class="cv-toggle-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main header end -->
<!-- main header -->
<script>
    $("langhref").attr("href", "{{url("/")}}");
</script>
