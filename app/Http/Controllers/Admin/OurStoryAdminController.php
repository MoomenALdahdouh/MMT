<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurStory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class OurStoryAdminController extends Controller
{
    public function index()
    {
        $our_story = OurStory::query()->get()->first();
        return view("admin.our_story.our_story", compact("our_story"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = OurStory::query()->get()->first();
        if (!$data)
            $data = new OurStory();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'our_story_description' => 'required',
                'our_story_description_en' => 'required',
                'our_story_home_page_text' => 'required',
                'our_story_home_page_text_en' => 'required',
                'our_story_image' => 'required',
            ], [
                'our_story_description.required' => trans("sts.This field is required"),
                'our_story_description_en.required' => trans("sts.This field is required"),
                'our_story_home_page_text.required' => trans("sts.This field is required"),
                'our_story_home_page_text_en.required' => trans("sts.This field is required"),
                'our_story_image.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $old_image = "uploads/our_story/" . $data->image;
                if (!str_contains($request->our_story_image, base64_encode($old_image))) {
                    if ($data->image)
                        unlink($old_image);
                    $image = uniqid() . '.jpg';
                    $image_path = "uploads/our_story/" . $image;
                    file_put_contents($image_path, base64_decode($request->our_story_image));
                    $data->image = $image;
                }
                //$data->title = ['ar' => $request->our_story_title, 'en' => $request->our_story_title_en];
                $data->description = ['ar' => $request->our_story_description, 'en' => $request->our_story_description_en];
                $data->home_page_text = ['ar' => $request->our_story_home_page_text, 'en' => $request->our_story_home_page_text_en];
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
