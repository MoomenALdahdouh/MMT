<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class ServiceAdminController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::query()->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($services)
                ->addColumn('id', function ($services) {
                    return '<a class="text-gray-800 text-hover-primary fw-bolder" ><div>' . $services->id . '</div></div>';
                })
                ->addColumn('name', function ($services) {
                    $path_edit = "#";
                    if (auth()->guard("admin")->user()->can('services_edit'))
                        $path_edit = url("/admin/services/edit/" . $services->id);
                    $image_path = asset("uploads/services/" . $services->image);//url("/") . "/uploads/services/" . $services->image;
                    return '<!--begin::service=-->
                                    <div class="d-flex">
                                        <!--begin::Thumbnail-->
                                        <a href="' . $path_edit . '"
                                           class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                  style="background-image:url(' . $image_path . ');"></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="' . $path_edit . '"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                               data-kt-ecommerce-services-filter="service_name">' . $services->getTranslation('name', config('app.locale')) . '</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                <!--end::service=-->';
                })
                ->addColumn('status', function ($services) {
                    switch ($services->status) {
                        case 0:
                            return '<!--begin::Status=-->
                                <div class="text-center"><div class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">' . trans("str.Inactive") . '</div>
                                    <!--end::Badges-->
                                </div></div>
                                <!--end::Status=-->';
                        case 1:
                            return '<div class="text-center"><div class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">' . trans("str.Published") . '</div>
                                    <!--end::Badges-->
                                </div></div>';
                    }
                })
                ->addColumn('action', function ($services) {
                    $action = '<div class="text-center">
                            <div class="btn-group dropstart text-center">
                                  <button type="button" class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="svg-icon svg-icon-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                      height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                      fill="black"/>
									</svg>
									</span>' . trans("str.Actions") . '
                                  </button>
                                  <div class="dropdown-menu">';
                    if (auth()->guard("admin")->user()->can('services_edit'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a href="' . url("/admin/services/edit/" . $services->id) . '"
                                               class="menu-link px-3">' . trans("str.Edit") . '</a>
                                        </div>';
                    if (auth()->guard("admin")->user()->can('services_delete'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a id="delete" href="#" data-id="' . $services->id . '" data-name="' . $services->name . '" class="menu-link px-3">' . trans("str.Delete") . '</a>
                                        </div>';
                    $action = $action . '</div></div></div>';
                    return $action;
                })
                ->rawColumns(['id'], ['name'], ['status'], ['action'])
                ->escapeColumns(['id' => 'id'], ['name' => 'name'], ['status' => 'status'], ['action' => 'action'])
                ->make(true);
        }
        return view("admin.services.services", compact('services'));
    }

    public function create()
    {
        return view("admin.services.add-services");
    }

    public function edit($id)
    {
        $service = Service::query()->find($id);
        return view("admin.services.edit-services", compact("service"));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'service_name' => 'required:services',
                'service_name_en' => 'required:services',
                'service_image' => 'required:services',
            ], [
                'service_name.required' => trans("sts.This field is required"),
                'service_name_en.required' => trans("sts.This field is required"),
                'service_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $image = time() . '.jpg';
                $image_path = "uploads/services/" . $image;//"/
                file_put_contents($image_path, base64_decode($request->service_image));
                $data = new service();
                $data->name = ['ar' => $request->service_name, 'en' => $request->service_name_en];
                $data->description = ['ar' => $request->service_description, 'en' => $request->service_description_en];
                $data->image = $image;
                $data->status = $request->status;
                $data->created_at = Carbon::now();
                $data->updated_at = Carbon::now();
                $data->save();
                return response()->json(['success' => $data->id]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = Service::query()->find($id);
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'service_name' => 'required:services',
                'service_name_en' => 'required:services',
                'service_image' => 'required:services',
            ], [
                'service_name.required' => trans("sts.This field is required"),
                'service_name_en.required' => trans("sts.This field is required"),
                'service_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                if ($request->image_updated == 1) {
                    $old_image = "uploads/services/$data->image";
                    if (file_exists($old_image))
                        unlink($old_image);
                    $image = time() . '.jpg';
                    file_put_contents("uploads/services/$image" , base64_decode($request->service_image));
                    $data->image = $image;
                }
                $data->name = ['ar' => $request->service_name, 'en' => $request->service_name_en];
                $data->description = ['ar' => $request->service_description, 'en' => $request->service_description_en];
                $data->status = $request->status;
                $data->updated_at = Carbon::now();
                $data->save();
                return response()->json(['success' => $data->id]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function destroy($id)
    {
        $data = Service::query()->find($id);
        $old_image = "uploads/services/" . $data->image;
        if (file_exists($old_image))
            unlink($old_image);
        $data->delete();
        if ($data)
            return response()->json(['success' => 'success']);
        else
            return response()->json(['error' => 'error']);
    }
}
