<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurMessage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class OurMessageAdminController extends Controller
{
    public function index()
    {
        $our_message = OurMessage::query()->get()->first();
        return view("admin.our_message.our_message", compact("our_message"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = OurMessage::query()->get()->first();
        if (!$data)
            $data = new OurMessage();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'our_message_description' => 'required',
                'our_message_description_en' => 'required',
                'our_message_home_page_text' => 'required',
                'our_message_home_page_text_en' => 'required',
                'our_message_image' => 'required',
            ], [
                'our_message_description.required' => trans("sts.This field is required"),
                'our_message_description_en.required' => trans("sts.This field is required"),
                'our_message_home_page_text.required' => trans("sts.This field is required"),
                'our_message_home_page_text_en.required' => trans("sts.This field is required"),
                'our_message_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $old_image = "uploads/our_message/" . $data->image;
                if (!str_contains($request->our_message_image, base64_encode($old_image))) {
                    if ($data->image)
                        unlink($old_image);
                    $image = uniqid() . '.jpg';
                    $image_path = "uploads/our_message/" . $image;
                    file_put_contents($image_path, base64_decode($request->our_message_image));
                    $data->image = $image;
                }
                //$data->title = ['ar' => $request->our_message_title, 'en' => $request->our_message_title_en];
                $data->description = ['ar' => $request->our_message_description, 'en' => $request->our_message_description_en];
                $data->home_page_text = ['ar' => $request->our_message_home_page_text, 'en' => $request->our_message_home_page_text_en];
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
