<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\FollowUs;
use App\Rules\Captcha;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ], [
                'full_name.required' => trans("sts.This field is required"),
                'email.required' => trans("sts.This field is required"),
                'email.email' => trans('sts.The selected email is invalid.'),
                'email.unique' => trans('sts.This field must be unique'),
                'subject.required' => trans("sts.This field is required"),
                'message.required' => trans("sts.This field is required"),
             ]);

            if ($validator->passes()) {
                $data = new ContactUs();
                $data->id = time();
                $data->name = $request->full_name;
                $data->email = $request->email;
                $data->subject = $request->subject;
                $data->message = $request->message;
                $data->status = 0;
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
