<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthAdminController extends Controller
{
    public function index()
    {
        return view("admin.auth.sign-in");
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect()->back();
    }

    public function account()
    {
        $user = auth()->guard("admin")->user();
        return view("admin.account.profile", compact("user"));
    }

    public function login(Request $request)
    {
        $validator = null;
        if (is_numeric($request->email)) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:admins,mobile|digits:10',
                'password' => 'required:admins,password|min:8',
            ], [
                'email.digits' => trans('str.The mobile must be 10 digits.'),
                'email.exists' => trans('str.The selected mobile is invalid.'),
                'password.required' => trans('str.The password field is required.'),
                'password.min' => trans('str.The password must be at least 8 characters.'),
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'email' => 'email|required|exists:admins,email',
                'password' => 'required:admins,password|min:8',
            ], [
                'email.required' => trans('str.The selected email is invalid.'),
                'email.email' => trans('str.The selected email is invalid.'),
                'email.exists' => trans('str.The selected email is invalid.'),
                'password.required' => trans('str.The password field is required.'),
                'password.min' => trans('str.The password must be at least 8 characters.'),
            ]);
        }
        if ($validator->passes()) {
            $validator_auth = Auth::guard("admin")->attempt(['email' => $request->email, 'password' => $request->password]);
            if ($validator_auth) {
                return $this->check_auth_type();
            } else {
                $validator_auth = Auth::guard('admin')->attempt(['mobile' => $request->email, 'password' => $request->password]);
                if ($validator_auth)
                    return $this->check_auth_type();
                else
                    return response()->json(['error_sing_in' => trans('str.The password is not correct!')]);
            }
        } else {
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function check_auth_type()
    {
        if (auth("admin")->user()->status == 0) {
            return response()->json(['error_sing_in' => trans("str.Your account has been blocked!")]);
        } else if (auth("admin")->user()->type == 0) {
            return response()->json(['success' => "success sign"]);
        } else {
            return response()->json(['success_not_type' => "success sign"]);
        }
    }

    public
    function check()
    {
        //dd(Auth::guard()->user());
        if (Auth::guard("admin")->user())
            return response()->json(['success' => "success"]);
    }

    public
    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => time(),
            'name' => 'required:admins,name',
            'last_name' => 'required:admins,last_name',
            'email' => 'required|unique:admins,email',
            'mobile' => 'required|unique:admins,mobile|max:8',
            'password' => 'required|min:8|confirmed',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]/*, [
            'name.required' => trans('Req name'),
            'last_name.required' => trans('Req last_name'),
            'email.required' => trans('Req email'),
            'mobile.required' => trans('Req mobile'),
            'password.required' => trans('Req password'),
        ]*/);
        if ($validator->passes()) {
            $user = Admin::query()->create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                $validator_auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
                if ($validator_auth)
                    return response()->json(['success' => "success register"]);
            } else {
                return response()->json(['error' => "failed register"]);
            }
        } else {
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    public
    function update(Request $request)
    {
        if ($request->ajax()) {
            $data = Admin::query()->find(auth()->guard("admin")->user()->id);
            $old_email = $data->email;
            $old_mobile = $data->mobile;
            $old_image = "uploads/users/$data->image";
            $validator = [];
            /*if ($request->password) {*/
                if (($old_email != $request->email) && $request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                        'password' => 'string|confirmed|required',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'password.required' => trans("str.This field is required"),
                        /*                        'password.min' => trans('str.The password must be at least 8 characters.'),*/

                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                } else if (($old_mobile != $request->mobile) && $request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (!$request->mobile && !$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                        'password' => 'required|string|confirmed',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'password.required' => trans("str.This field is required"),
                        /*                        'password.min' => trans('str.The password must be at least 8 characters.'),*/


                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                } else if (!$request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'mobile' => 'required|unique:admins,mobile|digits:8'
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (!$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                    ]);
                } else if ($request->password) {
                    $validator = Validator::make($request->all(), [
                        'password' => 'required|string|regex:/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,10}$/',
                        'password_confirmation' => 'required|same:password'
                    ], [
                        'password.required' => trans("str.This field is required"),
                        'password.regex' => trans('str.regex password'),

                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                } else {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                    ], [
                        'name.required' => trans("str.This field is required"),
                    ]);
                }
            /*} else {
                if (($old_email != $request->email) && $request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (($old_mobile != $request->mobile) && $request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (!$request->mobile && !$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                        'mobile' => 'required|unique:admins,mobile|digits:8'
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (!$request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'mobile' => 'required|unique:admins,mobile|digits:8'
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                    ]);
                } else if (!$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                    ]);
                } else if ($request->password) {
                    $validator = Validator::make($request->all(), [
                        'password' => 'required|string|regex:/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,10}$/',
                        'password_confirmation' => 'required|same:password'
                    ], [
                        'password.required' => trans("str.This field is required"),
                        'password.regex' => trans('str.regex password'),

                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                }else {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                    ], [
                        'name.required' => trans("str.This field is required"),
                    ]);
                }
            }*/
            if ($validator->passes()) {
                $image = uniqid() . '.jpg';
                $image_path = "uploads/users/$image";
                file_put_contents($image_path, base64_decode($request->user_image));
                $data->image = $image;
                $data->name = $request->name;
                $data->last_name = $request->last_name;
                $data->email = $request->email;
                $data->mobile = $request->mobile;
                $data->status = 1;
                $data->updated_at = Carbon::now();
                if ($request->password) {
                    $data->password = Hash::make($request->password);
                }
                $data->save();
                return response()->json(['success' => $data]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
