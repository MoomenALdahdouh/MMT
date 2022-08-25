<!-- main header -->
@php
    use Illuminate\Support\Facades\Session;
    $language = config('app.locale');
    $url = \Illuminate\Support\Facades\URL::current();
    $previous_url = \Illuminate\Support\Facades\URL::previous();
    Session::put('lang', $language);
    Session::put('c_url', $url);
    Session::put('p_url ', $previous_url);
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
            <div class="col-md-6 {{ $language == "en" ?"":"float-start" }}">
                <div class="cv-head-email {{ $language == "en" ?"":"float-start" }}">
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
                    <a href="{{url("/")}}"><img width="170px" src="{{asset("assets/images/logo-color.png")}}"
                                                alt="image"
                                                class="img-fluid"/></a>
                </div>
            </div>
            <div class="col-lg-9 col-5">
                <div class="cv-nav-bar">
                    <div class="cv-menu {{ $language == "en" ?"":"float-start" }}">
                        <ul>
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li><a href="{{url("/#service")}}">Service</a></li>
                            <li><a href="{{url("/#gallery")}}">Product Gallery</a></li>
                            <li><a href="{{url("/#about_us")}}">About Us</a></li>
                            <li><a href="{{url("/#contact_us")}}">Contact Us</a></li>
                            <li style="{{ config('app.locale') == "en" ? "":"margin-right: 25px" }} "
                                class="cv-children-menu">
                                <a href="javascript:;">
                                    <span class="">
                                        <span
                                            class="">{{ Config::get('language')[App::getLocale()] }}
                                            @if(App::getLocale() == "ar")
                                                <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                     src="{{asset("assets/admin/images/palestine.svg")}}"
                                                     alt="metronic"/>
                                            @else
                                                <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                     src="{{asset("assets/admin/images/united-states.svg")}}"
                                                     alt="metronic"/>
                                            @endif
                                        </span>
                                    </span>
                                </a>
                                <ul class="cv-sub-mmenu">
                                    @foreach (Config::get('language') as $lang => $language)
                                        @if ($lang == App::getLocale())
                                            <li>
                                                <a class="active" href="{{ route('lang.switch', $lang) }}">
                                                    <span class="">
                                                            @if($lang == "ar")
                                                            <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                                 src="{{asset("assets/admin/images/palestine.svg")}}"
                                                                 alt="metronic"/>
                                                        @else
                                                            <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                                 src="{{asset("assets/admin/images/united-states.svg")}}"
                                                                 alt="metronic"/>
                                                        @endif
                                                        </span>
                                                    {{$language}}
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('lang.switch', $lang) }}"
                                                   class="">
                                                        <span class="">
                                                            @if($lang == "ar")
                                                                <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/palestine.svg")}}"
                                                                     alt="metronic"/>
                                                            @else
                                                                <img width="15px" class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/united-states.svg")}}"
                                                                     alt="metronic"/>
                                                            @endif
                                                        </span>
                                                    {{$language}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
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
