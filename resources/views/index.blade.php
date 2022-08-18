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
    <!-- banner start -->
    <div class="cv-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cv-banner-two-text cv-banner-three-text">
                        <p class="cv-banner-cat">Upto 50% Off On Every Product</p>
                        <h1>Medical personal protective equipment</h1>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                        <button class="cv-btn">Shop now</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="cv-banner-img">
                        <img src="{{asset("assets/images/banner.png")}}" alt="images" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- service start -->
    <div id="service" class="cv-service spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>Best Services</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <ul class="cv-service-ul">
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-38 0 512 512.00142">
                                        <path
                                            d="M 217.996094 158.457031 C 164.203125 158.457031 120.441406 202.21875 120.441406 256.007812 C 120.441406 309.800781 164.203125 353.5625 217.996094 353.5625 C 271.785156 353.5625 315.546875 309.800781 315.546875 256.007812 C 315.546875 202.21875 271.785156 158.457031 217.996094 158.457031 Z M 275.914062 237.636719 L 206.027344 307.523438 C 203.09375 310.457031 199.246094 311.925781 195.402344 311.925781 C 191.558594 311.925781 187.714844 310.460938 184.78125 307.523438 L 158.074219 280.816406 C 152.207031 274.953125 152.207031 265.441406 158.074219 259.574219 C 163.9375 253.707031 173.449219 253.707031 179.316406 259.574219 L 195.402344 275.660156 L 254.671875 216.394531 C 260.535156 210.527344 270.046875 210.527344 275.914062 216.394531 C 281.78125 222.257812 281.78125 231.769531 275.914062 237.636719 Z M 275.914062 237.636719 "></path>
                                        <path
                                            d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 217.996094 383.605469 C 147.636719 383.605469 90.398438 326.367188 90.398438 256.007812 C 90.398438 185.648438 147.636719 128.410156 217.996094 128.410156 C 288.351562 128.410156 345.59375 185.648438 345.59375 256.007812 C 345.59375 326.367188 288.351562 383.605469 217.996094 383.605469 Z M 217.996094 383.605469 "></path>
                                    </svg>
                                </div>
                                <div class="cv-service-text">
                                    <h3>qualified products</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m256 166c-41.353 0-75 33.647-75 75s33.647 75 75 75 75-33.647 75-75-33.647-75-75-75zm-30 118.711-21.211-21.211 21.211-21.211 21.211 21.211zm8.789-81.211 21.211-21.211 21.211 21.211-21.211 21.211zm51.211 81.211-21.211-21.211 21.211-21.211 21.211 21.211z"></path>
                                            <path
                                                d="m121 0v15c0 41.353-33.647 76-75 76h-15v126.592c0 135.264 90.835 256.088 220.884 293.236l4.116 1.172 4.116-1.172c130.049-37.148 220.884-157.973 220.884-293.236v-126.592h-15c-41.353 0-75-34.647-75-76v-15zm272.886 145.536-21.211 21.211-10.605-10.605-22.27 22.269c10.267 13.705 17.117 29.888 19.684 47.589h31.516v-15h30v60h-30v-15h-31.516c-2.567 17.701-9.417 33.884-19.684 47.589l22.269 22.269 10.605-10.605 21.211 21.211-42.422 42.422-21.211-21.211 10.605-10.605-22.268-22.27c-13.705 10.267-29.888 17.117-47.589 19.684v31.516h15v30h-60v-30h15v-31.516c-17.701-2.567-33.884-9.417-47.589-19.684l-22.269 22.269 10.605 10.605-21.211 21.211-42.422-42.422 21.211-21.211 10.605 10.605 22.269-22.269c-10.267-13.705-17.117-29.888-19.684-47.589h-31.515v15h-30v-60h30v15h31.516c2.567-17.701 9.417-33.884 19.684-47.589l-22.269-22.269-10.605 10.605-21.211-21.211 42.422-42.422 21.211 21.211-10.605 10.605 22.269 22.269c13.705-10.267 29.888-17.117 47.589-19.684v-31.514h-15v-30h60v30h-15v31.516c17.701 2.567 33.884 9.417 47.589 19.684l22.269-22.269-10.605-10.605 21.211-21.211z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="cv-service-text">
                                    <h3>tested products</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M384,0H128c-24.431,0-44.308,19.876-44.308,44.308v93.538c0,24.431,19.876,44.308,44.308,44.308h92.344l25.213,25.212
                                            c2.883,2.885,6.663,4.326,10.443,4.326c3.78,0,7.56-1.441,10.443-4.326l25.213-25.212H384c24.431,0,44.308-19.876,44.308-44.308
                                            V44.308C428.308,19.876,408.431,0,384,0z M203.68,95.819l-7.433,7.245l1.755,10.23c0.95,5.54-1.327,11.141-5.875,14.445
                                            c-2.573,1.869-5.62,2.821-8.682,2.821c-2.351,0-4.71-0.56-6.872-1.696l-9.187-4.83l-9.187,4.83
                                            c-4.975,2.616-11.005,2.181-15.554-1.124c-4.548-3.304-6.826-8.904-5.875-14.445l1.755-10.23l-7.433-7.245
                                            c-4.025-3.924-5.474-9.793-3.737-15.139c1.737-5.346,6.359-9.244,11.922-10.052l10.273-1.493l4.593-9.308
                                            c2.488-5.041,7.623-8.233,13.244-8.233s10.756,3.192,13.244,8.233l4.593,9.308l10.272,1.493
                                            c5.563,0.808,10.185,4.706,11.922,10.052C209.154,86.026,207.705,91.895,203.68,95.819z M292.295,95.819l-7.433,7.245l1.755,10.23
                                            c0.95,5.54-1.327,11.141-5.875,14.445c-2.573,1.869-5.62,2.821-8.682,2.821c-2.351,0-4.71-0.56-6.872-1.696l-9.187-4.83
                                            l-9.187,4.83c-4.976,2.616-11.005,2.181-15.554-1.124c-4.548-3.304-6.826-8.904-5.875-14.445l1.755-10.23l-7.433-7.245
                                            c-4.025-3.924-5.474-9.793-3.737-15.139c1.737-5.346,6.359-9.244,11.922-10.052l10.272-1.493l4.593-9.308
                                            c2.488-5.041,7.623-8.233,13.244-8.233c5.621,0,10.756,3.192,13.244,8.233l4.593,9.308l10.273,1.493
                                            c5.563,0.808,10.185,4.706,11.922,10.052C297.769,86.026,296.32,91.895,292.295,95.819z M380.91,95.819l-7.433,7.245l1.755,10.23
                                            c0.95,5.54-1.327,11.141-5.875,14.445c-2.573,1.869-5.62,2.821-8.682,2.821c-2.351,0-4.71-0.56-6.872-1.696l-9.187-4.83
                                            l-9.187,4.83c-4.975,2.616-11.006,2.181-15.554-1.124c-4.548-3.304-6.826-8.904-5.875-14.445l1.755-10.23l-7.433-7.245
                                            c-4.025-3.924-5.474-9.793-3.737-15.139c1.737-5.346,6.359-9.244,11.922-10.052l10.272-1.493l4.593-9.308
                                            c2.488-5.041,7.623-8.233,13.244-8.233s10.756,3.192,13.244,8.233l4.593,9.308l10.272,1.493
                                            c5.563,0.808,10.185,4.706,11.922,10.052C386.385,86.026,384.935,91.895,380.91,95.819z"></path>
                                        <path d="M256,231.385c-40.719,0-73.846,33.127-73.846,73.846c0,40.719,33.127,73.846,73.846,73.846s73.846-33.127,73.846-73.846
                                            C329.846,264.512,296.719,231.385,256,231.385z"></path>
                                        <path d="M300.308,388.923h-88.615c-59.721,0-108.308,48.587-108.308,108.308c0,8.157,6.613,14.769,14.769,14.769h275.692
                                            c8.157,0,14.769-6.613,14.769-14.769C408.615,437.51,360.029,388.923,300.308,388.923z"></path>
                                    </svg>
                                </div>
                                <div class="cv-service-text">
                                    <h3>Top rated</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 512.114 512.114" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m256.057 60.118c15.242 0 30.27 1.419 45.002 4.202v-34.32h30v-30h-150.004v30h30v34.32c14.732-2.783 29.76-4.202 45.002-4.202z"></path>
                                            <path
                                                d="m256.057 90.118c-116.531 0-210.998 94.467-210.998 210.998s94.467 210.998 210.998 210.998 210.998-94.467 210.998-210.998-94.467-210.998-210.998-210.998zm0 346.994c-74.988 0-135.996-61.008-135.996-135.996s61.008-135.996 135.996-135.996 135.996 61.008 135.996 135.996-61.008 135.996-135.996 135.996z"></path>
                                            <path
                                                d="m271.057 286.116h89.93c-6.611-46.466-43.464-83.318-89.93-89.93z"></path>
                                            <path
                                                d="m241.057 316.116v-119.93c-51.368 7.309-90.996 51.575-90.996 104.93 0 58.446 47.55 105.996 105.996 105.996 53.355 0 97.621-39.628 104.93-90.996z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="cv-service-text">
                                    <h3>Fast delivery</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-last">
                    <ul class="cv-service-ul cv-service-ul-right">
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-text">
                                    <h3>Varified products</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m87.161 209.789 168.839 55.967 168.839-55.967-168.839-55.966z"></path>
                                            <path
                                                d="m466.078 227.725-187.182 62.047 45.846 72.825 187.183-62.048z"></path>
                                            <path
                                                d="m241 333.54-40.875 64.927-145.637-48.276v99.984l186.512 61.825z"></path>
                                            <path
                                                d="m311.875 398.467-40.875-64.927v178.46l186.512-61.825v-99.984z"></path>
                                            <path
                                                d="m187.258 362.597 45.846-72.825-187.182-62.047-45.847 72.824z"></path>
                                            <path d="m241 0h30v100.174h-30z"></path>
                                            <path d="m122.957 31.63h30v100.174h-30z"
                                                  transform="matrix(.866 -.5 .5 .866 -22.376 79.926)"></path>
                                            <path d="m323.957 66.717h100.174v30h-100.174z"
                                                  transform="matrix(.5 -.866 .866 .5 116.252 364.788)"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-text">
                                    <h3>easy Payment</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="m0 141.356h422v30h-422z"></path>
                                            <path
                                                d="m422 102.356c0-24.813-20.187-45-45-45h-332c-24.813 0-45 20.187-45 45v9h422z"></path>
                                            <path
                                                d="m421 242.643c.334 0 .666.01 1 .013v-41.299h-422v123c0 24.813 20.187 45 45 45h255.138c-.089-1.894-.139-3.798-.139-5.713.001-66.721 54.281-121.001 121.001-121.001zm-346-11.286h37.5c8.284 0 15 6.716 15 15s-6.716 15-15 15h-37.5c-8.284 0-15-6.716-15-15s6.716-15 15-15zm85 77.999h-85c-8.284 0-15-6.716-15-15s6.716-15 15-15h85c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path>
                                            <path
                                                d="m421 272.643c-50.178 0-91 40.823-91 91 0 50.178 40.823 91 91 91s91-40.823 91-91-40.823-91-91-91zm43.607 83.277-36 36c-2.929 2.929-6.768 4.394-10.606 4.394s-7.678-1.464-10.606-4.394l-18.5-18.5c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l7.894 7.894 25.394-25.394c5.857-5.858 15.355-5.858 21.213 0 5.855 5.858 5.855 15.355-.002 21.213z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-text">
                                    <h3>best support</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m512 346.5c0-63.535156-36.449219-120.238281-91.039062-147.820312-1.695313 121.820312-100.460938 220.585937-222.28125 222.28125 27.582031 54.589843 84.285156 91.039062 147.820312 91.039062 29.789062 0 58.757812-7.933594 84.210938-23.007812l80.566406 22.285156-22.285156-80.566406c15.074218-25.453126 23.007812-54.421876 23.007812-84.210938zm0 0"></path>
                                        <path
                                            d="m391 195.5c0-107.800781-87.699219-195.5-195.5-195.5s-195.5 87.699219-195.5 195.5c0 35.132812 9.351562 69.339844 27.109375 99.371094l-26.390625 95.40625 95.410156-26.386719c30.03125 17.757813 64.238282 27.109375 99.371094 27.109375 107.800781 0 195.5-87.699219 195.5-195.5zm-225.5-45.5h-30c0-33.085938 26.914062-60 60-60s60 26.914062 60 60c0 16.792969-7.109375 32.933594-19.511719 44.277344l-25.488281 23.328125v23.394531h-30v-36.605469l35.234375-32.25c6.296875-5.761719 9.765625-13.625 9.765625-22.144531 0-16.542969-13.457031-30-30-30s-30 13.457031-30 30zm15 121h30v30h-30zm0 0"></path>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="cv-service-box">
                                <div class="cv-service-text">
                                    <h3>return policy</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut commodo consequat.</p>
                                </div>
                                <div class="cv-service-icon">
                                    <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m96 16a80.2 80.2 0 0 1 64 32h-8v16h24a8 8 0 0 0 7.59-5.47l8-24-15.18-5.06-3.175 9.53a95.994 95.994 0 0 0 -173.235 57h16a80.091 80.091 0 0 1 80-80z"></path>
                                        <path
                                            d="m176 96a80 80 0 0 1 -144 48h8v-16h-24a8 8 0 0 0 -7.59 5.47l-8 24 15.18 5.06 3.175-9.53a95.994 95.994 0 0 0 173.235-57z"></path>
                                        <path
                                            d="m40 96a56 56 0 1 0 56-56 56.063 56.063 0 0 0 -56 56zm80-32v16h-28a4 4 0 0 0 0 8h8a20 20 0 0 1 4 39.6v8.4h-16v-8h-16v-16h28a4 4 0 0 0 0-8h-8a20 20 0 0 1 -4-39.6v-8.4h16v8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="cv-service-img">
                        <img src="../assets/images/service-img.png" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->
    <!-- help start -->
    <div class="cv-deal spacer-top spacer-bottom">
        <div class="container">
            <div class="row cv-deal-box">
                <div class="col-md-12">
                    <div class="cv-help-box cv-help-box-two">
                        <div class="cv-help-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256.002,182.774c-12.718,0-21.761,5.37-21.761,13.283V303.73c0,6.782,9.044,13.565,21.761,13.565
                                    c12.152,0,22.043-6.783,22.043-13.565V196.057C278.045,188.144,268.154,182.774,256.002,182.774z"></path>
                                <path d="M256.002,116.361c-13,0-23.174,9.326-23.174,20.065c0,10.739,10.174,20.348,23.174,20.348
                                    c12.718,0,22.892-9.609,22.892-20.348C278.894,125.688,268.719,116.361,256.002,116.361z"></path>
                                <path d="M256,0C134.398,0,36,98.348,36,219.873c0,99.231,65.333,181.626,153.417,209.609l50.032,73.747
                                    C243.171,508.715,249.37,512,256,512s12.829-3.285,16.551-8.771l50.032-73.747C410.706,401.486,476,319.061,476,219.873
                                    C476,98.271,377.523,0,256,0z M304.645,393.099c-4.555,1.274-8.51,4.12-11.165,8.033L256,456.376l-37.479-55.243
                                    c-2.656-3.913-6.611-6.76-11.166-8.033C132.377,372.135,76,303.181,76,219.873C76,120.69,156.748,40,256,40
                                    s180,80.69,180,179.873C436,303.264,379.54,372.158,304.645,393.099z"></path>
                            </svg>
                        </div>
                        <h2 style="color: #242424">We are here to assist you</h2>
                        <span style="color: #3cbcff">Always ready to provide the best solution</span>
                        <p style="color: #242424">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="cv-help-quote">
                        <h2 style="color: #3cbcff">Get a free quote</h2>
                        <a href="#contact_us" class="cv-get-btn2">Get a qoute</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- help end -->
    <!-- feature start -->
    <!-- feature end -->
    <!-- self protection kit start -->
    <!-- self protection kit end -->
    <!-- hot deals start -->
    <!-- hot deals end -->
    <!-- new arrivals start -->
    <!-- new arrivals end -->
    <!-- testimonial start -->
    <!-- testimonial end -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <a href="gallery">See All >></a>
            </div>
        </div>
    </div>
    <!-- product gallery end -->
    <!-- related product start -->
    <div class="cv-arrival cv-product-slider">
        <div class="container">
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
    <!-- about start -->
    <div id="about_us" class="cv-instagram spacer-top-less">
        <div class="container">
            <div class="cv-heading">
                <h1>About Us</h1>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="cv-about-img {{--spacer-top--}}">
                        <img src="../assets/images/about.png" alt="image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cv-about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h2>Our Expertise</h2>
                        <ul>
                            <li>Heart Surgery</li>
                            <li>Eye Surgery</li>
                            <li>Brain Hemorrhage</li>
                            <li>Respiratory problems</li>
                            <li>Internal Injury</li>
                            <li>Cancer disease</li>
                            <li>Neurologist</li>
                            <li>Heart Surgery</li>
                            <li>Eye Surgery</li>
                            <li>Brain Hemorrhage</li>
                            <li>Dental Problem</li>
                            <li>Respiratory problems</li>
                            <li>Internal Injury</li>
                            <li>Cancer disease</li>
                            <li>Neurologist</li>
                            <li>Dental Problem</li>
                        </ul>
                        <div class="cv-dr-box">
                            <div class="cv-dr-name">
                                <h3>Dr. Martin Guptil</h3>
                                <p>Heart Surgeon</p>
                            </div>
                            <div class="cv-dr-signature">
                                <img src="../assets/images/signature.png" alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <!-- conatact start -->
    <div id="contact_us" class="cv-conatact spacer-top spacer-bottom">
        <div class="container">
            <div class="cv-heading">
                <h1>Contact Us</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="cv-contact-detail">
                        <h2 class="cv-sidebar-title">Contact Info</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <ul>
                            <li>
                                <div class="cv-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513.64 513.64">
                                        <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72
                                        c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68
                                        c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44
                                        l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
                                    </svg>
                                </div>
                                <div class="cv-contact-text">
                                    <h3>Contact</h3>
                                    <p>+001 456-789-2591</p>
                                </div>
                            </li>
                            <li>
                                <div class="cv-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M10.688,95.156C80.958,154.667,204.26,259.365,240.5,292.01c4.865,4.406,10.083,6.646,15.5,6.646
                                            c5.406,0,10.615-2.219,15.469-6.604c36.271-32.677,159.573-137.385,229.844-196.896c4.375-3.698,5.042-10.198,1.5-14.719
                                            C494.625,69.99,482.417,64,469.333,64H42.667c-13.083,0-25.292,5.99-33.479,16.438C5.646,84.958,6.313,91.458,10.688,95.156z"></path>
                                        <path d="M505.813,127.406c-3.781-1.76-8.229-1.146-11.375,1.542c-46.021,39.01-106.656,90.552-152.385,129.885
                                            c-2.406,2.063-3.76,5.094-3.708,8.271c0.052,3.167,1.521,6.156,4,8.135c42.49,34.031,106.521,80.844,152.76,114.115
                                            c1.844,1.333,4.031,2.01,6.229,2.01c1.667,0,3.333-0.385,4.865-1.177c3.563-1.823,5.802-5.49,5.802-9.49V137.083
                                            C512,132.927,509.583,129.146,505.813,127.406z"></path>
                                        <path d="M16.896,389.354c46.25-33.271,110.292-80.083,152.771-114.115c2.479-1.979,3.948-4.969,4-8.135
                                            c0.052-3.177-1.302-6.208-3.708-8.271C124.229,219.5,63.583,167.958,17.563,128.948c-3.167-2.688-7.625-3.281-11.375-1.542
                                            C2.417,129.146,0,132.927,0,137.083v243.615c0,4,2.24,7.667,5.802,9.49c1.531,0.792,3.198,1.177,4.865,1.177
                                            C12.865,391.365,15.052,390.688,16.896,389.354z"></path>
                                        <path d="M498.927,418.375c-44.656-31.948-126.917-91.51-176.021-131.365c-4-3.26-9.792-3.156-13.729,0.24
                                            c-9.635,8.406-17.698,15.49-23.417,20.635c-17.563,15.854-41.938,15.854-59.542-0.021c-5.698-5.135-13.76-12.24-23.396-20.615
                                            c-3.906-3.417-9.708-3.521-13.719-0.24c-48.938,39.719-131.292,99.354-176.021,131.365c-2.49,1.792-4.094,4.552-4.406,7.604
                                            c-0.302,3.052,0.708,6.083,2.802,8.333C19.552,443.01,30.927,448,42.667,448h426.667c11.74,0,23.104-4.99,31.198-13.688
                                            c2.083-2.24,3.104-5.271,2.802-8.323C503.021,422.938,501.417,420.167,498.927,418.375z"></path>
                                    </svg>
                                </div>
                                <div class="cv-contact-text">
                                    <h3>Email</h3>
                                    <p>example@medical.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="cv-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                        c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                        C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                        s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"></path>
                                    </svg>
                                </div>
                                <div class="cv-contact-text">
                                    <h3>Location</h3>
                                    <p>025 CAL California, America</p>
                                </div>
                            </li>
                            <li>
                                <div class="cv-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M10.688,95.156C80.958,154.667,204.26,259.365,240.5,292.01c4.865,4.406,10.083,6.646,15.5,6.646
                                            c5.406,0,10.615-2.219,15.469-6.604c36.271-32.677,159.573-137.385,229.844-196.896c4.375-3.698,5.042-10.198,1.5-14.719
                                            C494.625,69.99,482.417,64,469.333,64H42.667c-13.083,0-25.292,5.99-33.479,16.438C5.646,84.958,6.313,91.458,10.688,95.156z"></path>
                                        <path d="M505.813,127.406c-3.781-1.76-8.229-1.146-11.375,1.542c-46.021,39.01-106.656,90.552-152.385,129.885
                                            c-2.406,2.063-3.76,5.094-3.708,8.271c0.052,3.167,1.521,6.156,4,8.135c42.49,34.031,106.521,80.844,152.76,114.115
                                            c1.844,1.333,4.031,2.01,6.229,2.01c1.667,0,3.333-0.385,4.865-1.177c3.563-1.823,5.802-5.49,5.802-9.49V137.083
                                            C512,132.927,509.583,129.146,505.813,127.406z"></path>
                                        <path d="M16.896,389.354c46.25-33.271,110.292-80.083,152.771-114.115c2.479-1.979,3.948-4.969,4-8.135
                                            c0.052-3.177-1.302-6.208-3.708-8.271C124.229,219.5,63.583,167.958,17.563,128.948c-3.167-2.688-7.625-3.281-11.375-1.542
                                            C2.417,129.146,0,132.927,0,137.083v243.615c0,4,2.24,7.667,5.802,9.49c1.531,0.792,3.198,1.177,4.865,1.177
                                            C12.865,391.365,15.052,390.688,16.896,389.354z"></path>
                                        <path d="M498.927,418.375c-44.656-31.948-126.917-91.51-176.021-131.365c-4-3.26-9.792-3.156-13.729,0.24
                                            c-9.635,8.406-17.698,15.49-23.417,20.635c-17.563,15.854-41.938,15.854-59.542-0.021c-5.698-5.135-13.76-12.24-23.396-20.615
                                            c-3.906-3.417-9.708-3.521-13.719-0.24c-48.938,39.719-131.292,99.354-176.021,131.365c-2.49,1.792-4.094,4.552-4.406,7.604
                                            c-0.302,3.052,0.708,6.083,2.802,8.333C19.552,443.01,30.927,448,42.667,448h426.667c11.74,0,23.104-4.99,31.198-13.688
                                            c2.083-2.24,3.104-5.271,2.802-8.323C503.021,422.938,501.417,420.167,498.927,418.375z"></path>
                                    </svg>
                                </div>
                                <div class="cv-contact-text">
                                    <h3>Fax</h3>
                                    <p>+001 456-789-2591</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cv-contact-form">
                        <h2 class="cv-sidebar-title">Get a quote</h2>
                        <form>
                            <input type="text" placeholder="Enater your name" name="full_name" id="full_name" class="require">
                            <input type="text" placeholder="Enter your email" name="email" id="email" class="require" data-valid="email" data-error="Email should be valid.">
                            <input type="text" placeholder="Enter your subject" name="subject" id="subject" class="require">
                            <textarea placeholder="Message here" name="message" id="message" class="require"></textarea>
                            <button type="button" class="cv-btn submitForm">submit</button>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- conatact end -->
    <!-- iframe start -->
    <div class="cv-contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12301.513435483917!2d-96.04069515802735!3d39.57362236131941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87be3e79433f6007%3A0x86baec447b34422!2sAmerica%20City%2C%20KS%2066540%2C%20USA!5e0!3m2!1sen!2sin!4v1588407931927!5m2!1sen!2sin" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- iframe end -->
    <!-- Instagram start -->
    <!-- Instagram end -->
    <!-- partner start -->
@endsection
@section('site_js')
@endsection
