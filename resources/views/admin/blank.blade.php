@extends('admin.layout.main')
@section('title','Welcome Page')
@section('description','main')
@section('author','main')
@section('keywords','main')
@section('copyright','main')
@section('css')
@endsection
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__("str.main")}}</h1>
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
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted text-hover-primary">{{__("str.Sub Dashboard")}}</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">{{__("str.main")}}</li>
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
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div id="roles_content" class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                    @php
                        use App\Models\EvaluationInitial;
                        use App\Models\CasePlan;
                        use App\Models\Notification;
                        use Carbon\Carbon;
                        /*$today = Carbon::now();
                        $tomorrow = Carbon::now()->addDay();
                        //$after_tomorrow = $today->diffInDays($today->copy()->addDays(2));
                        $data = EvaluationInitial::query()->whereDate('evaluation_initial_end_date', $tomorrow)->where("notification_status",1)->get();*/
                        //dd($data);
                        //dd(Carbon::createFromFormat('Y-m-d H:i:s', $tomorrow)->format('F-d-Y h:i A'));
                        /*$pluck_data = Notification::query()->pluck('model_fk_id')->all();
                        $data = EvaluationInitial::query()->whereDate('evaluation_initial_end_date', Carbon::now()->addDay())->whereNotIn('evaluation_initial_id', $pluck_data)->get();
                        foreach ($data as $item) {
                            set_notifications(trans("str.Evaluation End Date") . ' ' . $item->evaluation_initial_end_date, "image", trans("str.The due date for the initial evaluation is approaching"), "", "", "0", "99", $item->evaluation_initial_id.'', url("admin/form_five/show/$item->evaluation_initial_id"), $item->case_details->case_manager_name_id_fk,"","",1);
                        }*/
                        $pluck_data = Notification::query()->where('title_ar' ,trans("str.The case plan review time is approaching"))->pluck('model_fk_id')->all();
                        $data = CasePlan::query()->whereDate('starting_review_date', Carbon::now()->addDay())->whereNotIn('case_plan_id', $pluck_data)->get();
                        foreach ($data as $item) {
                            set_notifications(trans("str.Review date") . ' ' . $item->starting_review_date,
                                "", trans("str.The case plan review time is approaching"), "", "",
                                "0", "99", $item->case_plan_id . '', url("admin/form_eight/show/$item->case_plan_id"),
                                $item->case_details->case_manager_name_id_fk,"","",1);
                        }

                    @endphp
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
@section('js')
@endsection
