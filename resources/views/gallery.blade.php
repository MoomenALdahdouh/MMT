@extends('layout.main')
@section('site_title',trans("sts.Product gallery"))
@section('site_description',trans("sts.Product gallery"))
@section('site_author',trans("sts.Product gallery"))
@section('site_keywords',trans("sts.Product gallery"))
@section('site_copyright',trans("sts.Product gallery"))
@section('site_css')
@endsection
{{--TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com--}}
@section('site_content')
    <!-- product gallery start -->
    <div id="gallery" class="cv-product-gallery cv-product-three spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>@lang("sts.Product gallery")</h1>
                <p></p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cv-product-nav cv-product-tab">
                        <ul>
                            <li><a data-filter="*" class="cv-product-active">@lang("sts.All products")</a></li>
                            @foreach($categories as $category)
                                <li><a data-filter=".{{ str_replace(' ','',lang($category))}}">{{lang($category)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="cv-product-all wow fadeIn" data-wow-delay="0.5s">
                        <div class="cv-gallery-grid">
                            @foreach($products as $product)
                                <div
                                    class="cv-product-box cv-product-item @foreach($product->categories as $category){{str_replace(' ','',lang($category->category))}}@endforeach">
                                    <div class="cv-product-img">
                                        <img src="{{asset("uploads/products/$product->image")}}" alt="image"
                                             class="img-fluid"/>
                                        <div class="cv-product-button">
                                            <a href="{{url("products/view/$product->id")}}" class="cv-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"></path>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"></path>
                                                    </g>
                                                </svg>
                                                @lang("sts.View detail")</a>
                                            {{--{{url("products/view/$pin_product->id")}}--}}
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">{{lang($product)}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row mt-5 text-center">
                <a href="gallery_more">More >></a>
            </div>--}}
        </div>
    </div>
    <!-- product gallery end -->
@endsection
@section('site_js')
@endsection
