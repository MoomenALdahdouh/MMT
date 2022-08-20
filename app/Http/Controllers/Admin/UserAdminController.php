<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddressTypes;
use App\Models\Admin;
use App\Models\AdminPermissions;
use App\Models\AdminRoles;
use App\Models\Location;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class UserAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('xc')->only("create");
    }

    public function index(Request $request)
    {
        $users = Admin::query()->where("type", "!=", 2)->latest();
        $roles = Role::query()->get();
        if ($request->ajax()) {
            return DataTables::of($users)
                ->addColumn('id', function ($users) {
                    $path_edit = "#";
                    if (auth()->guard("admin")->user()->can('user_edit'))
                        $path_edit = url("/admin/users/edit/" . $users->id);
                    return '<a href="' . $path_edit . '" class="text-gray-600 text-hover-primary mb-1 "><div>ID-' . $users->id . '</div></div>';
                })
                ->addColumn('name', function ($users) {
                    $path_edit = "#";
                    if (auth()->guard("admin")->user()->can('user_edit'))
                        $path_edit = url("/admin/users/edit/" . $users->id);
                    return '<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="' . $path_edit . '">
													<div class="symbol-label">
														<img src="' . asset("uploads/users/" . $users->image) . '" alt="' . $users->name . '" class="w-100">
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<!--begin::User details-->
											<div class="d-flex flex-column">
												<a href="' . $path_edit . '" class="text-gray-800 text-hover-primary mb-1">' . $users->name . $users->last_name . '</a>
												<span>' . $users->email . '</span>
											</div>
											<!--begin::User details-->
										</div>';
                })
                ->addColumn('created_at', function ($users) {
                    return '<div class="text-center"><div>' . Carbon::createFromFormat('Y-m-d H:i:s', $users->created_at)->format('F-d-Y h:i A') . '</div></div>';
                })
                ->addColumn('roles', function ($users) {
                    if (count($users->role) > 0)
                        foreach ($users->role as $role) {
                            return '<div class="text-center"><div class="text-center badge badge-light-primary">' . $role->role->name . '</div></div>';
                        }
                    else
                        return '<div class="text-center"><div class="text-center text-gray-600"><div>' . trans("str.no roles") . '</div></div></div>';
                })
                ->addColumn('status', function ($users) {
                    switch ($users->status) {
                        case 0:
                            return '<!--begin::Status=-->
                                   <div class=""><div class=" pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="text-center d-block form-check form-check-custom form-check-solid form-switch ">
                                        <input id="message_status" class=" form-check-input" data-id="' . $users->id . '"
                                        data-status="' . $users->status . '" type="checkbox" value="' . $users->status . '">
                                        <!--end::Add customer-->
                                        </div>
                                    <!--end::Badges-->
                                </div></div>
                                <!--end::Status=-->';
                        case 1:
                            return '<div class=""><div class=" pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                   <div class="text-center d-block form-check form-check-custom form-check-solid form-switch ">
                                        <input id="message_status" checked="checked" class=" form-check-input" data-id="' . $users->id . '"
                                        data-status="' . $users->status . '" type="checkbox" value="' . $users->status . '">
                                        <!--end::Add customer-->
                                        </div>
                                    <!--end::Badges-->
                                </div></div>';
                    }
                })
                ->addColumn('action', function ($users) {
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
                    if (auth()->guard("admin")->user()->can('user_edit'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a href="' . url("/admin/users/edit/" . $users->id) . '" id="edit" data-id="' . $users->id . '"
                                             data-name="' . $users->name . '" class="menu-link px-3">' . trans("str.Edit") . '</a>
                                        </div>';
                    if (auth()->guard("admin")->user()->can('user_delete') && $users->type > 0)
                        $action = $action . '<div class="menu-item px-3">
                                            <a id="delete" href="#" data-id="' . $users->id . '" data-name="' . $users->name . '" class="menu-link px-3">' . trans("str.Delete") . '</a>
                                        </div>';
                    $action = $action . '</div></div></div>';
                    return $action;
                })
                ->rawColumns(['id'], ['name'], ['created_at'], ['roles'], ['status'], ['action'])
                ->escapeColumns(['id' => 'id'], ['name' => 'name'], ['created_at' => 'created_at'], ['roles' => 'roles'], ['status' => 'status'], ['action' => 'action'])
                ->make(true);
        }
        return view("admin.users.users.list", compact("users", "roles"));
    }

    public function edit($id)
    {
        $user = Admin::query()->find($id);
        $roles = Role::query()->get();
        //dd($user);
        //return view("admin.users.users.user_item", compact("user", "roles"))->render();
        return view("admin.users.users.view", compact("user", "roles"));
    }

    public function roles()
    {
        return view("admin.users.roles.list");
    }

    public function roles_view()
    {
        return view("admin.users.roles.view");
    }

    public function permissions()
    {
        return view("admin.users.permissions");
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required:admins,name',
                'email' => 'required|email|string|unique:admins,email',
                'mobile' => 'required|unique:admins,mobile|digits:10',
                'roles_id' => 'required',
/*                'password' => 'required|min:8',*/
                'password' => 'required|string|regex:/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,10}$/',

                'password_confirmation' => 'required|same:password'
            ], [
                'name.required' => trans("str.This field is required"),
                'email.required' => trans("str.This field is required"),
                'email.email' => trans('str.The selected email is invalid.'),
                'email.unique' => trans("str.This field must be unique"),
                'mobile.required' => trans("str.This field is required"),
                'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                'mobile.unique' => trans("str.This field must be unique"),
                'roles_id.required' => trans("str.This field is required"),
                'password.required' => trans("str.This field is required"),
                'password.regex' => trans('str.regex password'),

                'password_confirmation.required' => trans("str.This field is required"),
                'password_confirmation.same' => trans("str.password does not match"),

            ]);
            if ($validator->passes()) {
                $data = new Admin();
                $image = uniqid() . '.jpg';
                $image_path = "uploads/users/$image";
                file_put_contents($image_path, base64_decode($request->customer_image));
                $data->image = $image;
                $data->id = time();
                $data->name = $request->name;
                $data->email = $request->email;
                $data->mobile = $request->mobile;
                $data->password = Hash::make($request->password);
                $type = 0;
                switch ($request->roles_id) {
                    case 67: //Admin
                        $type = 0;
                        break;
                    case 68: //Case Manager
                        $type = 1;
                        break;
                    case 69: //Specialists
                        $type = 2;
                        break;
                    case 70: //Facilitators
                        $type = 3;
                        break;
                    case 71: //Supervisors
                        $type = 4;
                        break;
                    case 72: //Case Managers Supervisors
                        $type = 5;
                        break;
                    case 73: //Specialist Supervisors
                        $type = 6;
                        break;
                }
                $data->type = $type;
                $data->status = 1;
                $data->roles_id = $request->roles_id;
                $data->roles_name = $request->roles_name;
                $data->created_at = Carbon::now();
                $data->updated_at = Carbon::now();
                $data->save();
                $data->assignRole($request->roles_id);
                $role = Role::query()->find($request->roles_id);
                foreach ($role->role_permissions as $permission) {
                    $user_permi = new AdminPermissions();
                    $user_permi->permission_id = $permission->permission_id;
                    $user_permi->model_type = "App\Models\Admin";
                    $user_permi->model_id = $data->id;
                    $user_permi->save();
                }
                /*$admin_role = new AdminRoles();
                $admin_role->role_id = $request->roles_id;
                $admin_role->model_id = $data->id;
                $admin_role->model_type = "App\Models\Admin";
                $admin_role->save();*/
                return response()->json(['success' => $data]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function show($id)
    {
        $customer = Admin::query()->find($id);
        return $customer;
    }

    public function view($id)
    {
        $user = Admin::query()->find($id);
        $roles = Role::query()->get();
        return view("admin.users.users.vieww", compact("user", "roles"));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        if ($request->ajax()) {
            $data = Admin::query()->find($id);
            $old_email = $data->email;
            $old_mobile = $data->mobile;
            $validator = [];
            if ($request->password) {
                if (($old_email != $request->email) && $request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'email' => 'required|unique:admins,email',
                        'roles_id' => 'required',
                        'password' => 'string|confirmed|required|regex:/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,10}$/',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                        'password.required' => trans("str.This field is required"),
/*                        'password.min' => trans('str.The password must be at least 8 characters.'),*/
                        'password.regex' => trans('str.regex password'),
                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                } else if (($old_mobile != $request->mobile) && $request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                        'roles_id' => 'required',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (!$request->mobile && !$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'email' => 'required|unique:admins,email',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                        'password' => 'required|string|confirmed||regex:/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,10}$/',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                        'password.required' => trans("str.This field is required"),
/*                        'password.min' => trans('str.The password must be at least 8 characters.'),*/
                        'password.regex' => trans('str.regex password'),

                        'password_confirmation.required' => trans("str.This field is required"),
                        'password_confirmation.same' => trans("str.password does not match"),
                    ]);
                } else if (!$request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'mobile' => 'required|unique:admins,mobile|digits:8'
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (!$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                }else if ($request->password) {
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
                        'roles_id' => 'required',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                }
            } else {
                if (($old_email != $request->email) && $request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (($old_mobile != $request->mobile) && $request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'mobile' => 'required|unique:admins,mobile|digits:8',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (!$request->mobile && !$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
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
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (!$request->mobile) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'mobile' => 'required|unique:admins,mobile|digits:8'
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'mobile.required' => trans("str.This field is required"),
                        'mobile.digits' => trans("str.The mobile must be 10 digits!"),
                        'mobile.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else if (!$request->email) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                        'email' => 'required|unique:admins,email',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'email.required' => trans("str.This field is required"),
                        'email.email' => trans('str.The selected email is invalid.'),
                        'email.unique' => trans("str.This field must be unique"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                } else {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required:admins,name',
                        'roles_id' => 'required',
                    ], [
                        'name.required' => trans("str.This field is required"),
                        'user_role.required' => trans("str.This field is required"),
                    ]);
                }
            }
            if ($validator->passes()) {
                $image = uniqid() . '.jpg';
                $image_path = "uploads/users/$image";
                file_put_contents($image_path, base64_decode($request->user_image));
                $data->image = $request->user_image;
                if ($request->image_updated == 1)
                    $data->image = $image;
                $data->name = $request->name;
                $data->last_name = $request->last_name;
                $data->email = $request->email;
                $data->mobile = $request->mobile;
                $type = 0;
                switch ($request->roles_id) {
                    case 67: //Admin
                        $type = 0;
                        break;
                    case 68: //Case Manager
                        $type = 1;
                        break;
                    case 69: //Specialists
                        $type = 2;
                        break;
                    case 70: //Facilitators
                        $type = 3;
                        break;
                    case 71: //Supervisors
                        $type = 4;
                        break;
                    case 72: //Case Managers Supervisors
                        $type = 5;
                        break;
                    case 73: //Specialist Supervisors
                        $type = 6;
                        break;
                }
                $data->type = $type;
                $data->status = 1;
                $data->updated_at = Carbon::now();
                if ($request->password) {
                    $data->password = Hash::make($request->password);
                }
                $data->save();
                $old_roles = AdminRoles::query()->where("model_id", $id)->delete();
                $old_permissions = AdminPermissions::query()->where("model_id", $id)->delete();
                $role = Role::query()->find($request->roles_id);
                $data->assignRole($request->roles_id);
                foreach ($role->role_permissions as $permission) {
                    $user_permi = new AdminPermissions();
                    $user_permi->permission_id = $permission->permission_id;
                    $user_permi->model_type = "App\Models\Admin";
                    $user_permi->model_id = $id;
                    $user_permi->save();
                }
                return response()->json(['success' => $data]);
            }
            return response()->json(['error' => $validator->errors()->toArray()]);
        }
    }

    public function destroy($id)
    {
        $data = Admin::query()->find($id)->delete();
        if ($data)
            return response()->json(['success' => 'success']);
        else
            return response()->json(['error' => 'error']);
    }

    public function status($id)
    {
        $data = Admin::query()->find($id);
        foreach ($data->role as $role) {
            $user_role = AdminRoles::query()->where("model_id", $id)->where("role_id", $role->id)->delete();
        }
        $data->status = !$data->status;
        $data->save();
        if ($data)
            return response()->json(['success' => 'success']);
        return response()->json(['error' => 'error']);
    }
}
