<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MetaTag;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Models\ProductDiscount;
use App\Models\ProductMedia;
use App\Models\ProductOptions;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class ProductAdminController extends Controller
{
    public function index(Request $request)
    {
        //dd(auth('admin')->user()->hasRole('Tred'));
        //dd(auth()->guard("admin")->user()->canany('Areas'));
        $products = Product::query()->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($products)
                ->addColumn('id', function ($categories) {
                    return '<a class="text-gray-800 text-hover-primary fw-bolder" ><div>#HK' . $categories->id . '</div></div>';
                })
                ->addColumn('name', function ($products) {
                    $path_edit = "#";
                    if (auth()->guard("admin")->user()->can('product_edit'))
                        $path_edit = url("/admin/products/edit/" . $products->id);
                    $image_path = asset("uploads/products/" . $products->image);
                    return '<!--begin::Product=-->
                                <td style="width: 35%" data-order="' . $products->quantity . '">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a  href="' . $path_edit . '"
                                        class="symbol symbol-50px"> <span class="symbol-label"
											 style="background-image:url(' . $image_path . ')"></span>
										</a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="' . $path_edit . '"
                                               class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                               data-kt-ecommerce-product-filter="product_name">' . $products->getTranslation('name', config('app.locale')) . '</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Product=-->';
                })
                ->addColumn('type', function ($products) {
                    switch ($products->type) {
                        case 0:
                            return '<div class="text-center"><td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-info">No Options</div>
                                    <!--end::Badges-->
                                </td></div>';
                        case 1:
                            return '<div class="text-center"><td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Options</div>
                                    <!--end::Badges-->
                                </td></div>';
                    }
                })
                ->addColumn('quantity', function ($products) {
                    return $products->quantity < 10 ?
                        '<div class="text-center"><td class="text-end pe-0" data-order="' . $products->quantity . '">
                                <span class="badge badge-light-warning">Low stock</span>
                                    <span class="text-end fw-bolder ms-3">' . $products->quantity . '</span>
                                </td></div>'
                        : '<div class="text-center"><td class="text-end pe-0" data-order="' . $products->quantity . '">
                                    <span class="text-end fw-bolder ms-3">' . $products->quantity . '</span>
                                </td></div>';
                })
                ->addColumn('price', function ($products) {
                    return '<!--begin::Price=-->
                               <div class="text-center"> <td class="text-end pe-0" data-order="' . $products->price . '">
                                    <span class="fw-bolder text-dark">' . $products->price . ' KD</span>
                                </td></div>
                                <!--end::Price=-->';
                })
                ->addColumn('category', function ($products) {
                    $categories = '';

                    if (count($products->categories) > 0)
                        foreach ($products->categories as $category) {
                            if ($category->category)
                                $categories = $categories . '<div class="text-center"> <div class="pe-0" >
                                    <span class="badge badge-light-info">' . $category->category->getTranslation('name', config('app.locale')) . '</span>
                                </div></div>';
                            else
                                $categories = '<div class="text-center"> <div class="pe-0" >
                                    <span class="badge badge-light-dark">empty</span>
                                </div></div>';
                        }
                    else {
                        $categories = '<div class="text-center"> <div class="pe-0" >
                                    <span class="badge badge-light-dark">empty</span>
                                </div></div>';
                    }
                    return $categories;
                })
                ->addColumn('status', function ($products) {
                    switch ($products->status) {
                        case 0:
                            return '<!--begin::Status=-->
                                <div class="text-center"><td class="text-end pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">'.trans("str.Inactive").'</div>
                                    <!--end::Badges-->
                                </td></div>
                                <!--end::Status=-->';
                        case 1:
                            return '<div class="text-center"><td class="text-end pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">'.trans("str.Published").'</div>
                                    <!--end::Badges-->
                                </td></div>';
                        case 2:
                            return '<!--begin::Status=-->
                                <div class="text-center"><td class="text-end pe-0" data-order="Scheduled">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">Scheduled</div>
                                    <!--end::Badges-->
                                </td></div>
                                <!--end::Status=-->';
                    }
                })
                ->addColumn('pin_status', function ($products) {
                    switch ($products->pin_status) {
                        case 0:
                            return '<!--begin::Status=-->
                                   <div class=""><div class=" pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="text-center d-block form-check form-check-custom form-check-solid form-switch ">
                                        <input id="pin_status" class=" form-check-input" data-id="' . $products->id . '"
                                        data-status="' . $products->pin_status . '" type="checkbox" value="' . $products->pin_status . '">
                                        <!--end::Add customer-->
                                        </div>
                                    <!--end::Badges-->
                                </div></div>
                                <!--end::Status=-->';
                        case 1:
                            return '<div class=""><div class=" pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                   <div class="text-center d-block form-check form-check-custom form-check-solid form-switch ">
                                        <input id="pin_status" checked="checked" class=" form-check-input" data-id="' . $products->id . '"
                                        data-status="' . $products->pin_status . '" type="checkbox" value="' . $products->pin_status . '">
                                        <!--end::Add customer-->
                                        </div>
                                    <!--end::Badges-->
                                </div></div>';
                    }
                })
                ->addColumn('action', function ($products) {
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
                    if (auth()->guard("admin")->user()->can('product_view'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a target="_blank" href="' . url("/products/show/" . $products->id) . '"
                                               class="menu-link px-3">' . trans("str.View") . '</a>
                                        </div>';
                    if (auth()->guard("admin")->user()->can('product_edit'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a href="' . url("/admin/products/edit/" . $products->id) . '"
                                               class="menu-link px-3">' . trans("str.Edit") . '</a>
                                        </div>';
                    if (auth()->guard("admin")->user()->can('product_delete'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a id="delete" href="#" data-id="' . $products->id . '" data-name="' . $products->name . '"
                                            class="menu-link px-3">' . trans("str.Delete") . '</a>
                                        </div>';
                    $action = $action . '</div></div></div>';
                    return $action;
                })
                ->rawColumns(['id'],['name'], ['type'], ['quantity'], ['price'], ['category'], ['status'], ['pin_status'], ['action'])
                ->escapeColumns(['id' => 'id'],['name' => 'name'], ['type' => 'type'], ['quantity' => 'quantity'], ['price' => 'price']
                    , ['category' => 'category'], ['status' => 'status'], ['pin_status' => 'pin_status'], ['action' => 'action'])
                ->make(true);
        }
        return view("admin.products.products", compact("products"));
    }

    public function create()
    {
        $categories = Category::query()->latest()->get();
        return view("admin.products.add-product", compact("categories"));
    }

    public function edit($id)
    {
        $product = Product::query()->find($id);
        $categories = Category::query()->latest()->get();
        return view("admin.products.edit-product", compact("product", "categories"));
    }

    public function store(Request $request)
    {
        //dd($request);
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'product_name' => 'required:products',
                'product_name_en' => 'required:products',
                'product_image' => 'required:products',
            ], [
                'product_name.required' => trans("sts.This field is required"),
                'product_name_en.required' => trans("sts.This field is required"),
                'product_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $image = time() . '.jpg';
                $image_path = "uploads/products/" . $image;
                //dd($request->product_image);
                file_put_contents($image_path, base64_decode($request->product_image));
                $data = new Product();
                $data->name = ['ar' => $request->product_name, 'en' => $request->product_name_en];
                $data->description = ['ar' => $request->product_description, 'en' => $request->product_description_en];
                $data->image = $image;
                $data->price = $request->product_price;
                $data->quantity = $request->product_quantity;
                $data->status = $request->status;
                $data->type = $request->product_type;
                $data->created_at = Carbon::now();
                $data->updated_at = Carbon::now();
                $data->save();
                if ($data) {
                    $this->save_mata_tags($request, $data->id);
                    $this->save_product_categories($request, $data->id);
                    $this->save_product_discount($request, $data->id);
                    $this->save_product_media($request, $data->id);
                    $this->save_product_options($request, $data->id);
                }
                return response()->json(['success' => $data->id]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function update(Request $request, $id)
    {
        $data = Product::query()->find($id);
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'product_name' => 'required:products',
                'product_name_en' => 'required:products',
                'product_image' => 'required:products',
            ], [
                'product_name.required' => trans("sts.This field is required"),
                'product_name_en.required' => trans("sts.This field is required"),
                'product_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                if ($request->image_updated == 1) {
                    $old_image = "uploads/products/" . $data->image;
                    if (file_exists($old_image))
                        unlink($old_image);
                    $image = time() . '.jpg';
                    $image_path = "uploads/products/" . $image;
                    file_put_contents($image_path, base64_decode($request->product_image));
                    $data->image = $image;
                }
                $data->name = ['ar' => $request->product_name, 'en' => $request->product_name_en];
                $data->description = ['ar' => $request->product_description, 'en' => $request->product_description_en];
                $data->price = $request->product_price;
                $data->quantity = $request->product_quantity;
                $data->status = $request->status;
                $data->type = $request->product_type;
                $data->updated_at = Carbon::now();
                $data->save();

                if ($data) {
                    $meat = MetaTag::query()->where("item_fk_id", $id)->delete();
                    $discount = ProductDiscount::query()->where("product_fk_id", $id)->delete();
                    $categories = ProductCategories::query()->where("product_fk_id", $id)->delete();
                    $options = ProductOptions::query()->where("product_fk_id", $id)->delete();
                    $media = ProductMedia::query()->where("product_fk_id", $id);
                    foreach ($media as $item_media) {
                        $old_media = "uploads/products/" . $item_media->media;
                        unlink($old_media);
                    }
                    $media->delete();

                    $this->save_mata_tags($request, $data->id);
                    $this->save_product_categories($request, $data->id);
                    $this->save_product_options($request, $data->id);
                    $this->save_product_discount($request, $data->id);
                    $this->save_product_media($request, $data->id);
                }
                return response()->json(['success' => $data->id]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function save_mata_tags($request, $item_id)
    {
        if ($request->meta_title || $request->meta_title_en) {
            $data = new MetaTag;
            $data->item_fk_id = $item_id;
            $data->meta_title = ['ar' => $request->meta_title, 'en' => $request->meta_title_en];
            $data->meta_description = ['ar' => $request->meta_description, 'en' => $request->meta_description_en];
            $data->save();
        }
    }

    public function save_product_categories($request, $item_id)
    {
        $product_categories = $request->product_categories;
        if (is_array($product_categories) || is_object($product_categories))
            if (count($product_categories) > 0) {
                foreach ($product_categories as $category_id) {
                    $data = new ProductCategories();
                    $data->product_fk_id = $item_id;
                    $data->category_fk_id = $category_id;
                    $data->save();
                }
            }
    }

    public function save_product_discount($request, $item_id)
    {
        if ($request->discount_type != 0)
            if ($request->discount_value) {
                $data = new ProductDiscount();
                $data->product_fk_id = $item_id;
                $data->value = $request->discount_value;
                $data->type = $request->discount_type;
                $data->save();
            }
    }

    public function save_product_media($request, $item_id)
    {
        $product_media = $request->product_media;
        if (is_array($product_media) || is_object($product_media))
            if (count($product_media) > 0) {
                foreach ($product_media as $media_item) {
                    $media = uniqid() . '.jpg';
                    $media_path = "uploads/products/" . $media;
                    $image = str_replace('data:image/png;base64,', '', $media_item);
                    //dd($image);
                    file_put_contents($media_path, base64_decode($image));
                    $data = new ProductMedia();
                    $data->product_fk_id = $item_id;
                    $data->media = $media;
                    $data->save();
                }
            }
    }

    public function save_product_options($request, $item_id)
    {
        $product_variation = $request->product_variation;
        if (is_array($product_variation) || is_object($product_variation))
            if (count($product_variation) > 0) {
                foreach ($product_variation as $variation) {
                    $data = new ProductOptions();
                    if ($variation["id"])
                        $data->id = $variation["id"];
                    $data->product_fk_id = $item_id;
                    $data->name = ['ar' => $variation["name"], 'en' => $variation["name_en"]];
                    $data->price = $variation["price"];
                    $data->save();
                }
            }
    }


    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $meat = MetaTag::query()->where("item_fk_id", $id)->delete();
        $discount = ProductDiscount::query()->where("product_fk_id", $id)->delete();
        $categories = ProductCategories::query()->where("product_fk_id", $id)->delete();
        $options = ProductOptions::query()->where("product_fk_id", $id)->delete();
        $media = ProductMedia::query()->where("product_fk_id", $id);
        foreach ($media as $item_media) {
            $old_media = "uploads/products/" . $item_media->media;
            unlink($old_media);
        }
        $media->delete();
        $data = Product::query()->find($id);
        /* $old_image = "uploads/products/" . $data->image;
         unlink($old_image);*/
        $data->delete();
        if ($data)
            return response()->json(['success' => 'success']);
        else
            return response()->json(['error' => 'error']);
    }

    public function pin_status($id)
    {
        $data = Product::query()->find($id);
        $data->pin_status = !$data->pin_status;
        $data->save();
        if ($data)
            return response()->json(['success' => 'success']);
        return response()->json(['error' => 'error']);
    }
}
