<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AboutUsAdminController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::query()->get()->first();
        return view("admin.about_us.about_us", compact("about_us"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = AboutUs::query()->get()->first();
        if (!$data)
            $data = new AboutUs();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'about_us_description' => 'required',
                'about_us_description_en' => 'required',
                'about_us_image' => 'required',
            ], [
                'about_us_description.required' => trans("sts.This field is required"),
                'about_us_description_en.required' => trans("sts.This field is required"),
                'about_us_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $old_image = "uploads/about_us/" . $data->image;
                if (!str_contains($request->about_us_image, base64_encode($old_image))) {
                    if ($data->image)
                        if (file_exists($old_image))
                            unlink($old_image);
                    $image = uniqid() . '.jpg';
                    $image_path = "uploads/about_us/" . $image;
                    file_put_contents($image_path, base64_decode($request->about_us_image));
                    $data->image = $image;
                }
                /*$image = uniqid() . '.jpg';
                $image_path = "uploads/about_us/" . $image;
                $image_re = str_replace('data:image/png;base64,', '', $request->about_us_image);
                file_put_contents($image_path, base64_decode($image_re));
                $data->image = $image;*/
                //$data->title = ['ar' => $request->about_us_title, 'en' => $request->about_us_title_en];
                $data->description = ['ar' => $request->about_us_description, 'en' => $request->about_us_description_en];
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
