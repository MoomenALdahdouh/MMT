<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FollowUs;
use App\Models\Settings;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class SettingsAdminController extends Controller
{
    public function index()
    {
        $settings = Settings::query()->get()->first();
        return view("admin.settings.settings", compact("settings"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = Settings::query()->get()->first();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'payment_token' => 'required',
                'recaptcha_site_key' => 'required',
                'recaptcha_secret_key' => 'required',
                'gtag_id' => 'required',
                'smtp_username' => 'required',
                'smtp_password' => 'required',
            ], [
                'payment_token.required' => trans("sts.This field is required"),
                'recaptcha_site_key.required' => trans("sts.This field is required"),
                'recaptcha_secret_key.required' => trans("sts.This field is required"),
                'gtag_id.required' => trans("sts.This field is required"),
                'smtp_username.required' => trans("sts.This field is required"),
                'smtp_password.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                if (!$data)
                    $data = Settings::query()->create($request->all());
                else
                    $data = Settings::query()->get()->first()->update($request->all());
                return response()->json(['success' => "success"]);
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
