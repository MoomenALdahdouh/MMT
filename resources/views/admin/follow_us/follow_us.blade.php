@extends('admin.layout.main')
@section('title',__("str.Follow Us"))
@section('description',__("str.Follow Us"))
@section('author',__("str.Follow Us"))
@section('keywords',__("str.Follow Us"))
@section('copyright',__("str.Follow Us"))
@section('css')
@endsection
{{--TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com--}}
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__("str.Follow Us")}}</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{url("/admin")}}"
                               class="text-muted text-hover-primary">{{__("str.Dashboard")}}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">{{__("str.Follow Us")}}</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div id="kt_ecommerce_edit_follow_us_form" class="form d-flex flex-column flex-lg-row"
                     data-kt-redirect="">
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__("str.General")}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Facebook URL")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_facebook" type="text" name="follow_us_facebook"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Facebook URL")}}"
                                           value="{{@$follow_us->facebook}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_facebook_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Facebook URL is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Instagram URL")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_instagram" type="text" name="follow_us_instagram"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Instagram URL")}}"
                                           value="{{@$follow_us->instagram}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_instagram_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Instagram URL is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Twitter URL")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_twitter" type="text" name="follow_us_twitter"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Twitter URL")}}"
                                           placeholder="{{__("str.Twitter URL")}}"
                                           value="{{@$follow_us->twitter}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_twitter_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Twitter URL is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Location address (Arabic)")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_location" type="text" name="follow_us_location"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Location")}}"
                                           value="{{$follow_us?$follow_us->getTranslation('location', "ar"):""}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_location_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Location address is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Location address (English)")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_location_en" type="text" name="follow_us_location_en"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Location")}}"
                                           value="{{$follow_us? $follow_us->getTranslation('location', "en"):""}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_location_en_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Location address is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{__("str.Map Location")}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea rows="10" id="map_location" type="text"
                                                      name="map_location"
                                                      class="form-control mb-2"
                                                      placeholder="{{__("str.Map Location")}}">{!! @$follow_us->map !!}</textarea>
                                            <!--end::Input-->
                                            <!--begin::Error-->
                                            <strong id="follow_us_map_location_error"
                                                    class="errors text-danger fs-7"></strong>
                                            <!--end::Error-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">{{__("str.Map Location is required and recommended.")}}</div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--begin::Label-->
                                            <label class="form-label">{{__("str.Mapping View")}}</label>
                                            <!--end::Label-->
                                            <div id="mapping_view" class="form-control mb-2"
                                                 style="height: 83%;width: 100%;">

                                            </div>
                                            <style>
                                                iframe {
                                                    border: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                }
                                            </style>
                                            <!--begin::Error-->
                                            <strong id="" class="text-danger fs-7"></strong>
                                            <!--end::Error-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">

                                            </div>
                                            <!--end::Description-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Mobile number")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_mobile" type="text" name="follow_us_mobile"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Mobile number")}}"
                                           value="{{@$follow_us->mobile}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_mobile_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Mobile number is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Email")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="follow_us_email" type="email" name="follow_us_email"
                                           class="text-start form-control mb-2"
                                           placeholder="{{__("str.Email")}}"
                                           value="{{@$follow_us->email}}"/>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="follow_us_email_error" class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Follow Us Email is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        @can("follow us_edit")
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ url("/admin")}}"
                                   id="kt_ecommerce_edit_product_cancel"
                                   class="btn btn-light me-5">{{__("str.Cancel")}}</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button id="kt_ecommerce_edit_follow_us_submit" class="btn btn-primary">
                                    <span class="indicator-label">{{__("str.Save Changes")}}</span>
                                    <span class="indicator-progress">{{__("str.Please wait...")}}
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        @endcan
                    </div>
                    <!--end::Main column-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('js')
    <script src="{{ asset('assets/admin/js/follow_us/follow_us.js') }}" defer></script>
@endsection
