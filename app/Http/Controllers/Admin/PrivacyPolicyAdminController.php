<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PrivacyPolicyAdminController extends Controller
{
    public function index()
    {
        $privacy_policy = PrivacyPolicy::query()->get()->first();
        return view("admin.privacy_policy.privacy_policy", compact("privacy_policy"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = PrivacyPolicy::query()->get()->first();
        if (!$data)
            $data = new PrivacyPolicy();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'privacy_policy_description' => 'required',
                'privacy_policy_description_en' => 'required',
            ], [
                'privacy_policy_description.required' => trans("sts.This field is required"),
                'privacy_policy_description_en.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $data->description = ['ar' => $request->privacy_policy_description, 'en' => $request->privacy_policy_description_en];
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
