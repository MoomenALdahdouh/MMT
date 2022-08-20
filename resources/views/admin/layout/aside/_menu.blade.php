<!--begin::Aside Menu-->
@php
    $language = config('app.locale');
    $url = \Illuminate\Support\Facades\URL::current();
    $previous_url = \Illuminate\Support\Facades\URL::previous();
@endphp
<input id="previous_url" type="hidden" value="{{$previous_url}}">
<input id="current_url" type="hidden" value="{{$url}}">
<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
     data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
     data-kt-scroll-offset="0">
    <!--begin::Menu-->
    <div
        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <div class="menu-content pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('str.Dashboard')}}</span>
            </div>
        </div>
        @can("dashboard")
            <div class="menu-item">
                <a class="menu-link {{$url == url("admin")? "active":""}}" href="{{url("admin")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                    <span class="menu-title">{{__('str.Dashboard')}}</span>
                </a>
            </div>
        @endcan
        @can("logs")
            <div class="menu-item">
                <a class="menu-link {{$url == url("admin/logs") || str_contains($url,"logs")? "active":""}}"
                   href="{{url("admin/logs")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                    <span class="menu-title">{{__('str.Logs')}}</span>
                </a>
            </div>
        @endcan
        {{--@can("notifications")
            <div class="menu-item">
                <a class="menu-link {{$url == url("admin/notifications") || str_contains($url,"notifications")? "active":""}}"
                   href="{{url("admin/notifications")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
                                                      d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                                                      fill="currentColor"></path>
												<path
                                                    d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                                                    fill="currentColor"></path>
											</svg>
										</span>
                                            <!--end::Svg Icon-->
										</span>
                    <span class="menu-title">{{__('str.Notifications')}}</span>
                </a>
            </div>
        @endcan--}}
        @can("user")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{(str_contains($url,"users") || str_contains($url,"specialists")) && (!str_contains($url,"psychologist_speech")) && (!str_contains($url,"supervisors"))  ? "hover show":""}} ">
									<span
                                        class="menu-link {{(str_contains($url,"users") || str_contains($url,"specialists")) && (!str_contains($url,"psychologist_speech")) && (!str_contains($url,"supervisors"))   ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.User Management')}}</span>
										<span class="menu-arrow"></span>
									</span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @can("user")
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("admin/users") ? "active":""}}"
                               href="{{url("admin/users")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Users')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("specialists")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"specialists") && (!str_contains($url,"psychologist_speech"))&& (!str_contains($url,"supervisors")) ? "active":""}}"
                               href="{{url("admin/specialists")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Specialists')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("role")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"users-roles") ? "active":""}}"
                               href="{{url("admin/users-roles")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Roles')}}</span>
                            </a>
                        </div>
                    @endcan
                    {{--@can("permission")--}}
                    {{--<div class="menu-item">
                        <a class="menu-link {{str_contains($url,"users-permissions") ? "active":""}}"
                           href="{{url("admin/users-permissions")}}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                            <span class="menu-title">{{__('str.Permissions')}}</span>
                        </a>
                    </div>--}}
                    {{--@endcan--}}
                </div>
            </div>
        @endcan
        {{--@dd(auth("admin")->user()->can("supform one"))--}}
        @canany(["supervisors","supform one","supform two"])
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"supervisors") ? "hover show":""}} ">
									<span class="menu-link {{str_contains($url,"supervisors") ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Supervisors')}}</span>
										<span class="menu-arrow"></span>
									</span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @can("supervisors")
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("admin/supervisors/approvals/5") || str_contains($url,"approvals/managers")|| str_contains($url,"approvals/managers/cases") ? "active":""}}"
                               href="{{url("admin/supervisors/approvals/5")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Cases Managers Supervisors')}}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("admin/supervisors/approvals/6") || str_contains($url,"approvals/specialists") || str_contains($url,"approvals/specialists/cases") ? "active":""}}"
                               href="{{url("admin/supervisors/approvals/6")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Specialists Supervisors')}}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("admin/supervisors/approvals/ma/cases")? "active":""}}"
                               href="{{url("admin/supervisors/approvals/ma/cases")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Managers Cases')}}</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("admin/supervisors/approvals/sp/cases")? "active":""}}"
                               href="{{url("admin/supervisors/approvals/sp/cases")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Specialists Cases')}}</span>
                            </a>
                        </div>
                    @endcan
                    @if(auth("admin")->user()->type != 0)
                        @can("supform one")
                            <div class="menu-item">
                                <a class="menu-link {{ $url == url("admin/supervisors/approvals_one/cases/0") ? "active":""}}"
                                   href="{{url("admin/supervisors/approvals_one/cases/0")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Cases Supervisor')}}</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ $url == url("admin/supervisors/approvals_one") || $url == url("admin/supervisors/approvals_one/cases") || $url == url("admin/supervisors/approvals_one/spcases") ? "active":""}}"
                                   href="{{url("admin/supervisors/approvals_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Cases Managers')}}</span>
                                </a>
                            </div>
                        @endcan
                        @can("supform two")
                            <div class="menu-item">
                                <a class="menu-link {{ $url == url("admin/supervisors/approvals_two/cases/0") ? "active":""}}"
                                   href="{{url("admin/supervisors/approvals_two/cases/0")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Cases Supervisor')}}</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{$url == url("admin/supervisors/approvals_two") ? "active":""}}"
                                   href="{{url("admin/supervisors/approvals_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Specialists')}}</span>
                                </a>
                            </div>
                        @endcan
                    @endif
                </div>
            </div>
        @endcanany
        @can("facilitators")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"facilitators") ? "hover show":""}} ">
									<span
                                        class="menu-link {{str_contains($url,"facilitators")  ? "active":""}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Facilitators')}}</span>
										<span class="menu-arrow"></span>
									</span>
                @can("form one")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_fa_one") ? "active":""}}"
                               href="{{url("admin/facilitators/form_fa_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form One')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("faform two")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_fa_two") ? "active":""}}"
                               href="{{url("admin/facilitators/form_fa_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Fa Form Two')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
            </div>
        @endcan
        @can("forms")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"form") && !str_contains($url,"form_sp")  && !str_contains($url,"form_sup_two") && !str_contains($url,"facilitators") ? "hover show":""}} ">
									<span
                                        class="menu-link {{str_contains($url,"form") && !str_contains($url,"form_sp") && !str_contains($url,"facilitators") ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Forms')}}</span>
										<span class="menu-arrow"></span>
									</span>
                @can("form one")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_one") && !str_contains($url,"facilitators")? "active":""}}"
                               href="{{url("admin/form_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form One')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form cases")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_cases") ? "active":""}}"
                               href="{{url("admin/form_cases")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Cases')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("risk matrix")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{$url == url("risk-matrix")? "active":""}}"
                               href="{{url("admin/risk-matrix")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Risk Matrix')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                {{--@can("form two")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_two") ? "active":""}}"
                               href="{{url("admin/form_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Two')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can('form fourteen')
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_fourteen") ? "active":""}}"
                               href="{{url("admin/form_fourteen")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.Form fourteen')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form five")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_five") ? "active":""}}"
                               href="{{url("admin/form_five")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Five')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form six")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_six") ? "active":""}}"
                               href="{{url("admin/form_six")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Six')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form seven")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_seven") ? "active":""}}"
                               href="{{url("admin/form_seven")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Seven')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form nine")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_nine") ? "active":""}}"
                               href="{{url("admin/form_nine")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Nine')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form eight")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_eight") ? "active":""}}"
                               href="{{url("admin/form_eight")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Eight')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form three")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_three") ? "active":""}}"
                               href="{{url("admin/form_three")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.aside Form three')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form four")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_four") && !str_contains($url,"form_fourteen") ? "active":""}}"
                               href="{{url("admin/form_four")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.Form Four')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form ten")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_ten") ? "active":""}}"
                               href="{{url("admin/form_ten")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Ten')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can('form eleven')
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_eleven") ? "active":""}}"
                               href="{{url("admin/form_eleven")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.Form eleven')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form thirteen")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_thirteen") ? "active":""}}"
                               href="{{url("admin/form_thirteen")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Form Thirteen')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan--}}
            </div>
        @endcan
        @can("spforms")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"form_s") || str_contains($url,"evaluations") || str_contains($url,"psychologist_speech") ? "hover show":""}}">
									<span
                                        class="menu-link {{str_contains($url,"form_s")  || str_contains($url,"evaluations") || str_contains($url,"psychologist_speech")  ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path
                                                        d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                                        fill="currentColor"></path>
													<path
                                                        d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                                        fill="currentColor"></path>
													<path opacity="0.3"
                                                          d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                                          fill="currentColor"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Specialist Forms')}}</span>
										<span class="menu-arrow"></span>
									</span>
                @if(auth("admin")->user()->specialist || auth("admin")->user()->type == 0)
                    @if(auth("admin")->user()->type != 0)
                        @can("form one")
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link {{str_contains($url,"form_one") && !str_contains($url,"facilitators")? "active":""}}"
                                       href="{{url("admin/form_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                        <span class="menu-title">{{__('str.Form One')}}</span>
                                    </a>
                                </div>
                            </div>
                        @endcan
                    @endif
                    @if(auth("admin")->user()->type == 0 || auth("admin")->user()->specialist->specialty_cd == 341)
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div data-kt-menu-trigger="click"
                                 class="menu-item menu-accordion {{str_contains($url,"form_sp_one") || str_contains($url,"form_sp_eleven") || str_contains($url,"form_sp_two") ? "hover show":""}}">
											<span
                                                class="menu-link {{str_contains($url,"psychologist_speech/341") ||str_contains($url,"form_sp_one") || str_contains($url,"form_sp_eleven") || str_contains($url,"form_sp_two") ? "active":""}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('str.Specialists psychologist')}}</span>
												<span class="menu-arrow"></span>
											</span>
                                <div
                                    class="menu-sub menu-sub-accordion menu-active-bg {{str_contains($url,"psychologist_speech/341") ||str_contains($url,"form_sp_one") || str_contains($url,"form_sp_eleven") || str_contains($url,"form_sp_two") ? "show":""}}"
                                    style="">
                                    @can("specialists")
                                        <div class="menu-item">
                                            <a class="menu-link {{str_contains($url,"psychologist_speech/341") ? "active":""}}"
                                               href="{{url("admin/specialists/psychologist_speech/341")}}">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                <span class="menu-title">{{__('str.Specialists')}}</span>
                                            </a>
                                        </div>
                                    @endcan
                                    @if(auth("admin")->user()->type == 2)
                                        @can("form spone")
                                            <div class="menu-item">
                                                <a class="menu-link {{str_contains($url,"form_sp_one") ? "active":""}}"
                                                   href="{{url("admin/form_sp_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                    <span class="menu-title">{{__('str.Sp Form One')}}</span>
                                                </a>
                                            </div>
                                        @endcan
                                    @endif
                                    @can("form sptwo")
                                        <div class="menu-item">
                                            <a class="menu-link {{str_contains($url,"form_sp_two") ? "active":""}}"
                                               href="{{url("admin/form_sp_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">{{__('str.Sp Form Two')}}</span>
                                            </a>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(auth("admin")->user()->type == 0 || auth("admin")->user()->specialist->specialty_cd == 342)
                        <div class="menu-sub menu-sub-accordion menu-active-bg ">
                            <div data-kt-menu-trigger="click"
                                 class="menu-item menu-accordion {{str_contains($url,"form_sp_eight") || str_contains($url,"form_sp_nine") || str_contains($url,"form_sp_ten") ||str_contains($url,"form_sp_one") || str_contains($url,"psychologist_speech/342") ? "hover show":""}}">
											<span
                                                class="menu-link {{str_contains($url,"form_sp_eight") || str_contains($url,"form_sp_nine") || str_contains($url,"form_sp_ten") ||str_contains($url,"form_sp_one") || str_contains($url,"psychologist_speech/342") ? "active":""}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">{{__('str.Specialists speech')}}</span>
												<span class="menu-arrow"></span>
											</span>
                                <div
                                    class="menu-sub menu-sub-accordion menu-active-bg {{str_contains($url,"form_sp_eight") || str_contains($url,"form_sp_nine") || str_contains($url,"form_sp_ten") ||str_contains($url,"form_sp_one") || str_contains($url,"psychologist_speech/342") ? "show":""}}">
                                    @can("specialists")
                                        <div class="menu-item">
                                            <a class="menu-link {{str_contains($url,"psychologist_speech/342") ? "active":""}}"
                                               href="{{url("admin/specialists/psychologist_speech/342")}}">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                <span class="menu-title">{{__('str.Specialists')}}</span>
                                            </a>
                                        </div>
                                    @endcan
                                    @if(auth("admin")->user()->type == 2)
                                        @can("form spone")
                                            <div class="menu-item">
                                                <a class="menu-link {{str_contains($url,"form_sp_one") ? "active":""}}"
                                                   href="{{url("admin/form_sp_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                    <span class="menu-title">{{__('str.Sp Form One')}}</span>
                                                </a>
                                            </div>
                                        @endcan
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                @can("evaluations")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"evaluations") ? "active":""}}"
                               href="{{url("admin/evaluations")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.interview paragraphs')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
            </div>
            {{--<div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"form_s") || str_contains($url,"specialists") || str_contains($url,"evaluations") ? "hover show":""}} ">
									<span
                                        class="menu-link {{str_contains($url,"form_s") || str_contains($url,"specialists") || str_contains($url,"evaluations")  ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Specialist Forms')}}</span>
										<span class="menu-arrow"></span>
									</span>
                @can("specialists")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"specialists") ? "active":""}}"
                               href="{{url("admin/specialists")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Specialists')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spone")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_one") ? "active":""}}"
                               href="{{url("admin/form_sp_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form One')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("evaluations")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"evaluations") ? "active":""}}"
                               href="{{url("admin/evaluations")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.interview paragraphs')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @if((auth("admin")->user()->type == 2) && auth("admin")->user()->specialist->specialty_cd == 341)
                    @can("form sptwo")
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link {{str_contains($url,"form_sp_two") ? "active":""}}"
                                   href="{{url("admin/form_sp_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Sp Form Two')}}</span>
                                </a>
                            </div>
                        </div>
                    @endcan
                @elseif((auth("admin")->user()->type == 0))
                    @can("form sptwo")
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link {{str_contains($url,"form_sp_two") ? "active":""}}"
                                   href="{{url("admin/form_sp_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                    <span class="menu-title">{{__('str.Sp Form Two')}}</span>
                                </a>
                            </div>
                        </div>
                    @endcan
                @endif
                @can("form speight")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_eight") ? "active":""}}"
                               href="{{url("admin/form_sp_eight")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form eight')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spnine")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_nine") ? "active":""}}"
                               href="{{url("admin/form_sp_nine")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form Nine')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spten")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_ten") ? "active":""}}"
                               href="{{url("admin/form_sp_ten")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form ten')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form speleven")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_eleven") ? "active":""}}"
                               href="{{url("admin/form_sp_eleven")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form eleven')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                --}}{{--@can("form spthree")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_three") ? "active":""}}"
                               href="{{url("admin/form_sp_three")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.Sp Form Three')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spfour")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_four") && !str_contains($url,"form_fourteen") ? "active":""}}"
                               href="{{url("admin/form_sp_four")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">@lang('str.Sp Form Four')</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spfive")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_five") ? "active":""}}"
                               href="{{url("admin/form_sp_five")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form Five')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spsix")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_six") ? "active":""}}"
                               href="{{url("admin/form_sp_six")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form Six')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan
                @can("form spseven")
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"form_sp_seven") ? "active":""}}"
                               href="{{url("admin/form_sp_seven")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Sp Form Seven')}}</span>
                            </a>
                        </div>
                    </div>
                @endcan--}}{{--
            </div>--}}
        @endcan
        @can("reports")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"report") ? "hover show":""}} ">
									<span class="menu-link {{str_contains($url,"report") ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.Reports')}}</span>
										<span class="menu-arrow"></span>
									</span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @can("report one")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"report_one") ? "active":""}}"
                               href="{{url("admin/reports/report_one")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Report One')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("report two")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"report_two") ? "active":""}}"
                               href="{{url("admin/reports/report_two")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Report Two')}}</span>
                            </a>
                        </div>
                    @endcan
                    {{--@can("report three")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"report_three") ? "active":""}}"
                               href="{{url("admin/reports/report_three")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Report Three')}}</span>
                            </a>
                        </div>
                    @endcan--}}
                </div>
            </div>
        @endcan
        {{--@can("risk matrix")
            <div class="menu-item">
                <a class="menu-link {{$url == url("risk-matrix")? "active":""}}" href="{{url("admin/risk-matrix")}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                    <span class="menu-title">{{__('str.Risk Matrix')}}</span>
                </a>
            </div>
        @endcan--}}
        @can("settings")
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{str_contains($url,"settings") ? "hover show":""}} ">
									<span class="menu-link {{str_contains($url,"settings") ? "active":""}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"></path>
													<path
                                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">{{__('str.General Settings')}}</span>
										<span class="menu-arrow"></span>
									</span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @can("lookups")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"settings-lookups") ? "active":""}}"
                               href="{{url("admin/settings-lookups")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Menu management')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("governorates")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"settings-project-management") ? "active":""}}"
                               href="{{url("admin/settings-project-management")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Project management')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("governorates")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"settings-governorates") ? "active":""}}"
                               href="{{url("admin/settings-governorates")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Governorates')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("cities")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"settings-cities") ? "active":""}}"
                               href="{{url("admin/settings-cities")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Cities')}}</span>
                            </a>
                        </div>
                    @endcan
                    @can("cities")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"setting") && !str_contains($url,"settings") ? "active":""}}"
                               href="{{url("admin/setting")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Setting')}}</span>
                            </a>
                        </div>
                    @endcan
                    {{--@can("areas")
                        <div class="menu-item">
                            <a class="menu-link {{str_contains($url,"settings-areas") ? "active":""}}"
                               href="{{url("admin/settings-areas")}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                <span class="menu-title">{{__('str.Areas')}}</span>
                            </a>
                        </div>
                    @endcan--}}
                </div>
            </div>
        @endcan
    </div>
</div>
<!--end::Aside Menu-->
