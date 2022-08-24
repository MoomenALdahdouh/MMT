<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FollowUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class FollowUsAdminController extends Controller
{
    public function index()
    {
        $follow_us = FollowUs::query()->get()->first();
        return view("admin.follow_us.follow_us", compact("follow_us"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = FollowUs::query()->get()->first();
        if (!$data)
            $data = new FollowUs();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'follow_us_facebook' => 'required',
                'follow_us_instagram' => 'required',
                'follow_us_twitter' => 'required',
                'follow_us_location' => 'required',
                'follow_us_map_location' => 'required',
                'follow_us_location_en' => 'required',
                'follow_us_mobile' => 'required:mobile|digits:8',
                'follow_us_email' => 'required|email',
            ], [
                'follow_us_facebook.required' => trans("str.Facebook Url is required"),
                'follow_us_instagram.required' => trans("str.Instagram Url is required"),
                'follow_us_twitter.required' => trans("str.Instagram Url is required"),
                'follow_us_location.required' => trans("str.Location address arabic is required"),
                'follow_us_map_location.required' => trans("str.Map Location is required"),
                'follow_us_location_en.required' => trans("str.Location address English is required"),
                'follow_us_mobile.required' => trans("str.Mobile is required"),
                'follow_us_email.required' => trans("str.Email image is required"),
            ]);

            if ($validator->passes()) {
                $data->facebook = $request->follow_us_facebook;
                $data->instagram = $request->follow_us_instagram;
                $data->twitter = $request->follow_us_twitter;
                $data->location = ['ar' => $request->follow_us_location, 'en' => $request->follow_us_location_en];
                $data->map = $request->follow_us_map_location;
                $data->mobile = $request->follow_us_mobile;
                $data->email = $request->follow_us_email;
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
