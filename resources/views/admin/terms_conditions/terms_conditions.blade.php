@extends('admin.layout.main')
@section('title',__("str.Term & Conditions"))
@section('description',__("str.Term & Conditions"))
@section('author',__("str.Term & Conditions"))
@section('keywords',__("str.Term & Conditions"))
@section('copyright',__("str.Term & Conditions"))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__("str.Terms & Conditions")}}</h1>
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
                        <li class="breadcrumb-item text-dark">{{__("str.Terms & Conditions")}}</li>
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
                <div id="kt_ecommerce_edit_terms_conditions_form" class="form d-flex flex-column flex-lg-row"
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
                                    <label class="required form-label">{{__("str.Terms & Conditions Description (Arabic)")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea rows="10" id="terms_conditions_description" type="text"
                                              name="terms_conditions_description"
                                              class="form-control mb-2"
                                              placeholder="{{__("str.Description")}}">{{$terms_conditions? $terms_conditions->getTranslation('description', "ar"):""}}</textarea>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="terms_conditions_description_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Terms & Conditions Description is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__("str.Terms & Conditions Description (English)")}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea rows="10" id="terms_conditions_description_en" type="text"
                                              name="terms_conditions_description_en"
                                              class="form-control mb-2"
                                              placeholder="{{__("str.Description")}}"
                                              value="">{{$terms_conditions?$terms_conditions->getTranslation('description', "en"):""}}</textarea>
                                    <!--end::Input-->
                                    <!--begin::Error-->
                                    <strong id="terms_conditions_description_en_error"
                                            class="errors text-danger fs-7"></strong>
                                    <!--end::Error-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__("str.Terms & Conditions Description is required and recommended to be unique.")}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        @can("terms_edit")
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ url("/admin")}}"
                                   id="kt_ecommerce_edit_product_cancel"
                                   class="btn btn-light me-5">{{__("str.Cancel")}}</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button id="kt_ecommerce_edit_terms_conditions_submit" class="btn btn-primary">
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
    <script src="{{ asset('assets/admin/js/terms_conditions/terms_conditions.js') }}" defer></script>
@endsection
