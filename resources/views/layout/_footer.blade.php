<!-- main-footer -->
<!-- footer start -->
<div class="cv-footer cv-footer-two spacer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="cv-foot-box cv-foot-logo">
                    <a href="{{url("/")}}"><img width="220" src="{{asset("assets/admin/images/logo.png")}}" alt="image"
                                                class="img-fluid"/></a>
                    <p>@lang("sts.describe_title")</p>
                    {{--<div class="cv-foot-payment">
                        <a href="javascript:;"><img src="{{asset("assets/images/pay1.png")}}" alt="image"
                                                    class="img-fluid"/></a>
                        <a href="javascript:;"><img src="{{asset("assets/images/pay2.png")}}" alt="image"
                                                    class="img-fluid"/></a>
                        <a href="javascript:;"><img src="{{asset("assets/images/pay3.png")}}" alt="image"
                                                    class="img-fluid"/></a>
                        <a href="javascript:;"><img src="{{asset("assets/images/pay4.png")}}" alt="image"
                                                    class="img-fluid"/></a>
                    </div>--}}
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="cv-foot-box cv-foot-links">
                    <h2>@lang("sts.Quick links")</h2>
                    <ul>
                        <li><a href="{{url("/#service")}}">@lang("sts.Services")</a></li>
                        <li><a href="{{url("/#gallery")}}">@lang("sts.Product Gallery")</a></li>
                        <li><a href="{{url("/#about_us")}}">@lang("sts.About Us")</a></li>
                        <li><a href="{{url("/#contact_us")}}">@lang("sts.Contact Us")</a></li>
                        {{--<li><a href="javascript">@lang("sts.Privacy Policy")</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="cv-foot-box cv-foot-links">
                    <h2>@lang("sts.Follow Us")</h2>
                    <div class="cv-foot-box cv-foot-contact">
                        <p><a target="_blank" href="{{@$follow_us->facebook}}" class="nav-link p-0"><i
                                    style="color:#3cbcff;" class="fab fa-facebook-f fa-fw"></i> @lang("sts.Facebook")
                            </a></p>
                        <p><a target="_blank" href="{{@$follow_us->instagram}}" class="nav-link p-0"><i
                                    style="color:#3cbcff;" class="fab fa-instagram fa-fw"></i> @lang("sts.Instagram")
                            </a></p>
                        <p><a target="_blank" href="{{@$follow_us->twitter}}" class="nav-link p-0"><i
                                    style="color:#3cbcff;" class="fab fa-twitter fa-fw"></i> @lang("sts.Twitter")
                            </a></p>
                    </div>
                    {{--<ul class="list-unstyled">
                        <li><a target="_blank" href="https://www.google.com/" class="nav-link p-0"><i
                                    style="color:#3cbcff;"   class="fab fa-facebook-f fa-fw"></i> Facebook </a></li>
                        <li><a target="_blank" href="https://www.google.com/" class="nav-link p-0"><i
                                    style="color:#3cbcff;"   class="fab fa-instagram fa-fw"></i> Instagram </a></li>
                        <li><a target="_blank" href="https://www.google.com/" class="nav-link p-0"><i
                                    style="color:#3cbcff;"  class="fab fa-twitter fa-fw"></i> Twitter
                            </a></li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cv-foot-box cv-foot-contact">
                    <h2>@lang("sts.Contact")</h2>
                    <p><a href="tel:+55 456-789-9651"><i class="fa fa-map-marker-alt fa-fw"
                                                         style="color:#3cbcff;"></i> {{@$follow_us->mobile}}</a></p>
                    <p><a href="mailto:support@domian.com"><i class="fa fa-phone-alt fa-fw" style="color:#3cbcff;"></i>
                            {{@$follow_us->email}}</a></p>
                    <p><a href="http://maps.google.com/?q=785 LNCT block street, USA"><i class="fa fa-envelope fa-fw"
                                                                                         style="color:#3cbcff;"></i> {{@custom_lang(@$follow_us,"location")}}
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!-- copyright start -->
<div class="cv-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; @lang("sts.copy_right")<a target="_blank" class="link-light fw-bolder"
                                                    href="https://moomena.com">@lang("sts.dev_by")</a></p>
            </div>
        </div>
    </div>
</div>
<!-- copyright end -->
<!-- main-footer -->
<style>
    @if(language() == "ar")
        .cv-foot-links ul li:after {
        position: absolute;
        content: '';
        right: 0;
        left: auto;
        top: 0;
        bottom: 0;
        width: 6px;
        height: 6px;
        border-top: 2px solid #3cbcff;
        border-right: 2px solid #3cbcff;
        transform: rotate(225deg);
        margin: auto;
    }

    .cv-foot-links ul li {
        position: relative;
        padding-left: 0;
        padding-right: 15px;
    }
    @endif
</style>
