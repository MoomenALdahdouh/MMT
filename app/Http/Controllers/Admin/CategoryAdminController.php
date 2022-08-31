<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hall;
use App\Models\MenuNav;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class CategoryAdminController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($categories)
                ->addColumn('id', function ($categories) {
                    return '<a class="text-gray-800 text-hover-primary fw-bolder" ><div>' . $categories->id . '</div></div>';
                })
                ->addColumn('name', function ($categories) {
                    $path_edit = "#";
                    if (auth()->guard("admin")->user()->can('category_edit'))
                        $path_edit = url("/admin/categories/edit/" . $categories->id);
                    $image_path = asset("uploads/categories/" . $categories->image);//url("/") . "/uploads/categories/" . $categories->image;
                    return '<!--begin::Category=-->
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
                                               data-kt-ecommerce-category-filter="category_name">' . $categories->getTranslation('name', config('app.locale')) . '</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7 fw-bolder">
                                            ' . count($categories->product) . ' ' . trans("str.Products") . '
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                    </div>
                                <!--end::Category=-->';
                })
                ->addColumn('status', function ($categories) {
                    switch ($categories->status) {
                        case 0:
                            return '<!--begin::Status=-->
                                <div class="text-center"><div class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">'.trans("str.Inactive").'</div>
                                    <!--end::Badges-->
                                </div></div>
                                <!--end::Status=-->';
                        case 1:
                            return '<div class="text-center"><div class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">'.trans("str.Published").'</div>
                                    <!--end::Badges-->
                                </div></div>';
                    }
                })
                ->addColumn('action', function ($categories) {
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
                    if (auth()->guard("admin")->user()->can('category_edit'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a href="' . url("/admin/categories/edit/" . $categories->id) . '"
                                               class="menu-link px-3">' . trans("str.Edit") . '</a>
                                        </div>';
                    if (auth()->guard("admin")->user()->can('category_delete'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a id="delete" href="#" data-id="' . $categories->id . '" data-name="' . $categories->name . '" class="menu-link px-3">' . trans("str.Delete") . '</a>
                                        </div>';
                    $action = $action . '</div></div></div>';
                    return $action;
                })
                ->rawColumns(['id'], ['name'], ['status'], ['action'])
                ->escapeColumns(['id' => 'id'],['name' => 'name'], ['status' => 'status'], ['action' => 'action'])
                ->make(true);
        }
        return view("admin.categories.categories", compact('categories'));
    }

    public function create()
    {
        return view("admin.categories.add-category");
    }

    public function edit($id)
    {
        $category = Category::query()->find($id);
        return view("admin.categories.edit-category", compact("category"));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'category_name' => 'required:categories',
                'category_name_en' => 'required:categories',
                'category_image' => 'required:categories',
            ], [
                'category_name.required' => trans("sts.This field is required"),
                'category_name_en.required' => trans("sts.This field is required"),
                'category_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $image = time() . '.jpg';
                $image_path = "uploads/categories/" . $image;//"/
                file_put_contents($image_path, base64_decode($request->category_image));
                $data = new Category();
                $data->name = ['ar' => $request->category_name, 'en' => $request->category_name_en];
                $data->image = $image;
                $data->status = $request->status;
                $data->type = 0;
                $data->meta_title = ['ar' => $request->meta_title, 'en' => $request->meta_title_en];
                $data->meta_description = ['ar' => $request->meta_description, 'en' => $request->meta_description_en];
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
        $data = Category::query()->find($id);
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'category_name' => 'required:categories',
                'category_name_en' => 'required:categories',
                'category_image' => 'required:categories',
            ], [
                'category_name.required' => trans("sts.This field is required"),
                'category_name_en.required' => trans("sts.This field is required"),
                'category_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                if ($request->image_updated == 1) {
                    $old_image = "uploads/categories/" . $data->image;
                    if (file_exists($old_image))
                        unlink($old_image);
                    $image = time() . '.jpg';
                    file_put_contents("/uploads/categories/" . $image, base64_decode($request->category_image));
                    $data->image = $image;
                }
                $data->name = ['ar' => $request->category_name, 'en' => $request->category_name_en];
                $data->status = $request->status;
                $data->meta_title = ['ar' => $request->meta_title, 'en' => $request->meta_title_en];
                $data->meta_description = ['ar' => $request->meta_description, 'en' => $request->meta_description_en];
                $data->updated_at = Carbon::now();
                $data->save();
                return response()->json(['success' => $data->id]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function destroy($id)
    {
        $data = Category::query()->find($id);
        $old_image = "uploads/categories/" . $data->image;
        if (file_exists($old_image))
            unlink($old_image);
        $data->delete();
        if ($data)
            return response()->json(['success' => 'success']);
        else
            return response()->json(['error' => 'error']);
    }
}
