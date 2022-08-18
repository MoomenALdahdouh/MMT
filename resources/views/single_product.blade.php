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
    <!-- shop start -->
    <div class="cv-product-single spacer-top spacer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="cv-pro-thumb-img">
                                <img src="../assets/images/product2.jpg" alt="image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="cv-prod-content">
                                <h2 class="cv-price-title">Plastic face shield</h2>
                                <p class="cv-pdoduct-price"><del>$170</del> $165</p>
                                <div class="cv-prod-category">
                                    <span>Category :</span>
                                    <a href="#" class="cv-prod-category"> Face Mask</a>,
                                    <a href="#" class="cv-prod-category"> Body Cover</a>
                                </div>
                                <p class="cv-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </p>
                            </div>
                            <div class="cv-prod-count">
                                <div class="cv-cart-quantity">
                                    <button class="cv-sub"></button>
                                    <input type="number" value="1" min="1">
                                    <button class="cv-add"></button>
                                </div>
                                <button class="cv-btn">add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cv-prod-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cv-shop-tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" data-bs-toggle="tab" href="#cv-pro-description" role="tab" aria-selected="true">description</a>
                            <a class="nav-link" data-bs-toggle="tab" href="#cv-pro-review" role="tab" aria-selected="false">Review</a>
                        </div>
                        <div class="tab-content cv-tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="cv-pro-description">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                            </div>
                            <div class="tab-pane fade" id="cv-pro-review">
                                <div class="cv-blog-comment">
                                    <ul>
                                        <li>
                                            <div class="cv-comment-box">
                                                <div class="cv-comment-img">
                                                    <img src="../assets/images/insta-wid1.jpg" alt="image" class="img-fluid">
                                                </div>
                                                <div class="cv-comment-text">
                                                    <h3>John Michel</h3>
                                                    <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                    <a href="javascript:;" class="cv-cmnt-reply">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                            <g>
                                                                <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                    c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                    l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                    v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                    c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                    c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                    c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                    C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                    c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                    l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                    v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                            </g>
                                                        </svg>
                                                        Reply</a>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="cv-comment-box">
                                                        <div class="cv-comment-img">
                                                            <img src="../assets/images/insta-wid2.jpg" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="cv-comment-text">
                                                            <h3>Michel John</h3>
                                                            <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                            <a href="javascript:;" class="cv-cmnt-reply">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                                    <g>
                                                                        <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                            c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                            l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                            v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                            c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                            c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                            c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                            C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                        <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                            c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                            l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                            v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                                    </g>
                                                                </svg>
                                                                Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="cv-comment-box">
                                                <div class="cv-comment-img">
                                                    <img src="../assets/images/insta-wid6.jpg" alt="image" class="img-fluid">
                                                </div>
                                                <div class="cv-comment-text">
                                                    <h3>Nikki Bela</h3>
                                                    <a href="javascript:;" class="cv-cmnt-date">1 June, 2020</a>
                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.</p>
                                                    <a href="javascript:;" class="cv-cmnt-reply">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.633 511.633">
                                                            <g>
                                                                <path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846
                                                                    c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847
                                                                    l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845
                                                                    v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549
                                                                    c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284
                                                                    c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692
                                                                    c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116
                                                                    C511.63,265.094,495.546,216.657,463.375,183.726z"></path>
                                                                <path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846
                                                                    c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847
                                                                    l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845
                                                                    v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z"></path>
                                                            </g>
                                                        </svg>
                                                        Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cv-blog-cmnt-reply">
                                    <h2 class="cv-sidebar-title">leave a reply</h2>
                                    <form>
                                        <input type="text" placeholder="Enter Your Name">
                                        <input type="text" placeholder="Enter Your Email">
                                        <input type="text" placeholder="Enter Your Subject">
                                        <textarea placeholder="Message Here"></textarea>
                                        <button class="cv-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cv-shop-sidebar">
                        <div class="cv-widget cv-search">
                            <h2 class="cv-sidebar-title">Product Search</h2>
                            <form>
                                <input type="text" placeholder="Product Search">
                                <button class="cv-btn">search</button>
                            </form>
                        </div>
                        <div class="cv-widget cv-range-slider">
                            <h2 class="cv-sidebar-title">Filter by price</h2>
                            <div class="range-slider">
                                <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">$ 0</span><span class="irs-max" style="visibility: visible;">$ 10.000</span><span class="irs-from" style="visibility: visible; left: 0%;">$ 0</span><span class="irs-to" style="visibility: visible; left: 42.2906%;">$ 5.000</span><span class="irs-single" style="visibility: hidden; left: 17.0328%;">$ 0 - $ 5.000</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 2.52809%; width: 47.4719%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to type_last" style="left: 47.4719%;"></span></span><input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                            </div>
                        </div>
                        <div class="cv-widget cv-product-category">
                            <h2 class="cv-sidebar-title">Categories</h2>
                            <ul>
                                <li><a href="javascript:;">Consectetur adipiscing elit</a></li>
                                <li><a href="javascript:;">Quis nostrud exercitation</a></li>
                                <li><a href="javascript:;">Duis aute irure dolor in repreh</a></li>
                                <li><a href="javascript:;">Sunt in culpa officia deserunt</a></li>
                                <li><a href="javascript:;">Ut enim ad minim veniam</a></li>
                            </ul>
                        </div>
                        <div class="cv-widget cv-product-instagram">
                            <h2 class="cv-sidebar-title">Instagram</h2>
                            <ul>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid1.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid2.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid3.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid4.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid5.jpg" alt="image" class="img-fluid"></a></li>
                                <li><a href="javscript:;"><img src="../assets/images/insta-wid6.jpg" alt="image" class="img-fluid"></a></li>
                            </ul>
                        </div>
                        <div class="cv-widget cv-tag">
                            <h2 class="cv-sidebar-title">Tag Cloud</h2>
                            <ul>
                                <li><a href="javscript:;">Face</a></li>
                                <li><a href="javscript:;">Mask</a></li>
                                <li><a href="javscript:;">Body</a></li>
                                <li><a href="javscript:;">Hand</a></li>
                                <li><a href="javscript:;">Eye</a></li>
                                <li><a href="javscript:;">Doctor</a></li>
                                <li><a href="javscript:;">Sanitizer</a></li>
                                <li><a href="javscript:;">Price</a></li>
                                <li><a href="javscript:;">Corona</a></li>
                                <li><a href="javscript:;">Virus</a></li>
                                <li><a href="javscript:;">Drugs</a></li>
                                <li><a href="javscript:;">Medicine</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop end -->
    <!-- related product start -->
    <div class="cv-arrival cv-related-product cv-product-slider spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>Related products</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(-2292px, 0px, 0px); transition-duration: 1500ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="../assets/images/product8.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="../assets/images/product4.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="../assets/images/product7.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Oxygen mask</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="../assets/images/product2.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="../assets/images/product8.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="../assets/images/product4.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="../assets/images/product7.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Oxygen mask</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="../assets/images/product2.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Plastic face shield</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <span class="cv-sale">sale</span>
                                        <img src="../assets/images/product8.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Hand gloves</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 352px; margin-right: 30px;">
                                <div class="cv-product-box">
                                    <div class="cv-product-img">
                                        <img src="../assets/images/product4.jpg" alt="image" class="img-fluid">
                                        <div class="cv-product-button">
                                            <a href="{{url("product")}}" class="cv-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
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
                                                </svg> View detail</a>
                                        </div>
                                    </div>
                                    <div class="cv-product-data">
                                        <a href="javascript:;" class="cv-price-title">Saftey mask</a>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                                    </div>
                                </div>
                            </div></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end -->
@endsection
@section('site_js')
@endsection
