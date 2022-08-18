@extends('layout.main')
@section('site_title','main')
@section('site_description','main')
@section('site_author','main')
@section('site_keywords','main')
@section('site_copyright','main')
@section('site_css')
@endsection
{{--TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com--}}
@section('site_content')
    <!-- product gallery start -->
    <div id="gallery" class="cv-product-gallery cv-product-three spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>Product gallery</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cv-product-nav cv-product-tab">
                        <ul>
                            <li><a data-filter="*" class="cv-product-active">all product</a></li>
                            <li><a data-filter=".cv-face">Face</a></li>
                            <li><a data-filter=".cv-body">Body</a></li>
                            <li><a data-filter=".cv-hand">Hand</a></li>
                        </ul>
                    </div>
                    <div class="cv-product-all wow fadeIn" data-wow-delay="0.5s">
                        <div class="cv-gallery-grid">
                            <div class="cv-product-box cv-product-item cv-hand">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product8.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product3.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Glass face mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-hand">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Hand sanitizer</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product6.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">N95 face mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product2.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product3.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Glass face mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product4.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product5.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product6.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">N95 face mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product7.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Oxygen mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product3.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Glass face mask</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-hand">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product8.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-face cv-body">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product5.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-hand">
                                <div class="cv-product-img">
                                    <span class="cv-sale">sale</span>
                                    <img src="{{asset("assets/images/product8.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                            <div class="cv-product-box cv-product-item cv-hand">
                                <div class="cv-product-img">
                                    <img src="{{asset("assets/images/product.jpg")}}" alt="image" class="img-fluid"/>
                                    <div class="cv-product-button">
                                        <a href="{{url("product")}}" class="cv-btn">
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
                                            View detail</a>
                                        {{--{{url("product")}}--}}
                                    </div>
                                </div>
                                <div class="cv-product-data">
                                    <a href="javascript:;" class="cv-price-title">Hand sanitizer</a>
                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="far fa-star"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <a href="gallery_more">More >></a>
            </div>
        </div>
    </div>
    <!-- product gallery end -->
@endsection
@section('site_js')
@endsection
