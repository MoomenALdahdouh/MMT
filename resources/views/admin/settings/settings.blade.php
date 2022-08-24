@extends('admin.layout.main')
@section('title',__("str.Settings"))
@section('description',__("str.Settings"))
@section('author',__("str.Settings"))
@section('keywords',__("str.Settings"))
@section('copyright',__("str.Settings"))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__("str.Settings")}}</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{url("admin")}}"
                               class="text-muted text-hover-primary">{{__("str.Dashboard")}}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">{{__("str.Settings")}}</li>
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
                <div id="kt_ecommerce_edit_settings_form" class="form d-flex flex-column flex-lg-row"
                     data-kt-redirect="">
                    <!--begin::Main column-->
                    <form id="my_form" method="POST" action="{{url("admin/settings/store")}}"
                          class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        @csrf
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__("str.Payment Gateway")}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.Token")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea rows="3" id="payment_token" type="text"
                                              name="payment_token"
                                              class="form-control mb-2"
                                              placeholder="{{__("str.Enter Here")}}">{{$settings? $settings->payment_token:""}}</textarea>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="payment_token_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <label
                                        class="form-label">{{__("str.Status")}}</label>
                                    <!--begin::Label-->
                                    <input type="hidden" name="payment_status" id="payment_status_val"
                                           value="{{$settings? $settings->payment_status:0}}">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input  class="form-check-input"
                                               type="checkbox"
                                               {{$settings? $settings->payment_status == 1 ? "checked":"":""}}
                                               value="{{$settings? $settings->payment_status:0}}"
                                               id="payment_status"/>
                                        <label id="payment_status_name" class="form-check-label" for="payment_status">
                                            {{__("str.Test")}}
                                        </label>
                                    </div>
                                    <!--begin::Error-->
                                    <strong id="payment_status_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__("str.reCaptcha")}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.reCaptcha site key")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="recaptcha_site_key" type="text"
                                           name="recaptcha_site_key"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->recaptcha_site_key:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="recaptcha_site_key_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.reCaptcha secret key")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="recaptcha_secret_key" type="text"
                                           name="recaptcha_secret_key"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->recaptcha_secret_key:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="recaptcha_secret_key_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__("str.Google Analytics")}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.gtag")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="gtag_id" type="text"
                                           name="gtag_id"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->gtag_id:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="gtag_id_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__("str.SMTP")}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row d-none">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.mail_host")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="mail_host" type="text"
                                           name="mail_host"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->mail_host:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="mail_host_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--begin::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.mail_from_email")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="mail_from_email" type="text"
                                           name="mail_from_email"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->mail_from_email:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="mail_from_email_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--begin::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.mail_from_name")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="mail_from_name" type="text"
                                           name="mail_from_name"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->mail_from_name:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="mail_from_name_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row d-none">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.smtp_username")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="smtp_username" type="text"
                                           name="smtp_username"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->smtp_username:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="smtp_username_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row d-none">
                                    <!--begin::Label-->
                                    <label
                                        class="required form-label">{{__("str.smtp_password")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="smtp_password" type="password"
                                           name="smtp_password"
                                           class="form-control mb-2"
                                           placeholder="{{__("str.Enter Here")}}"
                                           value="{{$settings? $settings->smtp_password:""}}">
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="smtp_password_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        @can("settings_edit")
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ url("/admin")}}"
                                   id="kt_ecommerce_edit_product_cancel"
                                   class="btn btn-light me-5">{{__("str.Cancel")}}</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <!--                                <button type="submit" class="save_form btn btn-primary">
                                    <i class="fa fa-save"></i> {{__("str.Save Changes")}}
                                </button>-->
                                <button id="kt_ecommerce_edit_settings_submit" type="submit" class="btn btn-primary">
                                    <span class="indicator-label">{{__("str.Save Changes")}}</span>
                                    <span class="indicator-progress">{{__("str.Please wait...")}}
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        @endcan
                    </form>
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
    <script src="{{ asset('assets/admin/js/settings/settings.js') }}" defer></script>
@endsection
