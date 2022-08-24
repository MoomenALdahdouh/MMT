<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TermsConditions;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class TermsConditionsAdminController extends Controller
{
    public function index()
    {
        $terms_conditions = TermsConditions::query()->get()->first();
        return view("admin.terms_conditions.terms_conditions", compact("terms_conditions"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = TermsConditions::query()->get()->first();
        if (!$data)
            $data = new TermsConditions();
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'terms_conditions_description' => 'required',
                'terms_conditions_description_en' => 'required',
            ], [
                'terms_conditions_description.required' => trans("sts.This field is required"),
                'terms_conditions_description_en.required' => trans("sts.This field is required"),
            ]);

            if ($validator->passes()) {
                $data->description = ['ar' => $request->terms_conditions_description, 'en' => $request->terms_conditions_description_en];
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
