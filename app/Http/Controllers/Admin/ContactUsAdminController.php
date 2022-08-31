<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\ContactUs;
use App\Models\GuestAddress;
use App\Models\Location;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class ContactUsAdminController extends Controller
{
    public function index(Request $request)
    {
        $contacts = ContactUs::query()->latest()->get();
        if ($request->ajax()) {
            return DataTables::of($contacts)
                ->addColumn('id', function ($contacts) {
                    if (auth()->guard("admin")->user()->can('contact us_view'))
                        return '<!--begin::Location name=-->
                                    <div class="d-flex">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                           <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-bs-toggle="modal" id="edit" href="#" data-id="' . $contacts->id . '"
                                        data-message="' . $contacts->message . '" data-status="' . $contacts->status . '"
                                                data-bs-target="#kt_modal_contact">' . $contacts->id . '
                                           </a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                <!--end::Location=-->';
                    else
                        return '<!--begin::Location name=-->
                                    <div class="d-flex">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                           <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-id="' . $contacts->id . '"
                                                data-message="' . $contacts->message . '" data-status="' . $contacts->status . '"
                                               data-kt-ecommerce-category-filter="category_name">' . $contacts->id . '
                                           </a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                <!--end::Location=-->';
                })
                ->addColumn('name', function ($contacts) {
                    return '<!--begin::Location name=-->
                                    <div class="d-flex">
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                             <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" id="edit" href="#" data-id="' . $contacts->id . '"
                                                data-message="' . $contacts->message . '" data-status="' . $contacts->status . '"
                                               data-kt-ecommerce-category-filter="category_name">' . $contacts->name . '
                                        </a>
                                        </div>
                                    </div>
                                <!--end::Location=-->';
                })
                ->addColumn('email', function ($contacts) {
                    return '<!--begin::Price=-->
                               <div class=""> <div class="pe-0" data-order="' . $contacts->email . '">
                                    <span class="fw-bolder text-dark">' . $contacts->email . '</span>
                                </div></div>
                                <!--end::Price=-->';
                })
                ->addColumn('mobile', function ($contacts) {
                    return '<!--begin::Price=-->
                               <div class=""> <div class=" pe-0" data-order="' . $contacts->mobile . '">
                                    <span class="fw-bolder text-dark">' . $contacts->mobile . '</span>
                                </div></div>
                                <!--end::Price=-->';
                })
                ->addColumn('created_at', function ($contacts) {
                    return '<!--begin::Price=-->
                               <div class="text-center"> <div class="text-end pe-0" data-order="' . $contacts->created_at . '">
                                    <span class="fw-bolder text-dark">' . Carbon::createFromFormat('Y-m-d H:i:s', $contacts->created_at)->format('F-d-Y h:i A') . '</span>
                                </div></div>
                                <!--end::Price=-->';
                })
                ->addColumn('status', function ($contacts) {
                    $status = "";
                    switch ($contacts->status) {
                        case 0:
                            $status = '<!--begin::Status=-->
                                <div class="text-center"><div class="text-center pe-0" data-order="Inactive">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger pt-1">'.trans("str.Not Seen").'</div>';
                            if (auth()->guard("admin")->user()->can('contact us_edit'))
                                $status = $status . '<div class="float-end text-center form-check form-check-custom form-check-solid form-switch">
                                        <input id="message_status" class="form-check-input" data-id="' . $contacts->id . '"
                                        data-message="' . $contacts->message . '" data-status="' . $contacts->status . '" type="checkbox" value="' . $contacts->status . '">
                                        <!--end::Add customer-->
                                        </div>';
                            break;
                        case 1:
                            $status = '<!--begin::Status=-->
                                <div class="text-center"><div class="text-center pe-0" data-order="Published">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success pt-2">'.trans("str.Seen").'</div>';
                            if (auth()->guard("admin")->user()->can('contact us_edit'))
                                $status = $status . '<span class="float-end form-check form-check-custom form-check-solid form-switch">
                                        <input id="message_status" checked="checked" class="form-check-input" data-id="' . $contacts->id . '"
                                        data-message="' . $contacts->message . '" data-status="' . $contacts->status . '" type="checkbox" value="' . $contacts->status . '">
                                        <!--end::Add customer-->
                                        </span>';
                            break;
                    }
                    $status = $status . '</div></div>';
                    return $status;
                })
                ->addColumn('action', function ($contacts) {
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
                    if (auth()->guard("admin")->user()->can('contact us_view'))
                        $action = $action . '<div class="menu-item px-3">
                                            <!--begin::Add customer-->
                                        <a class="menu-link px-3" data-bs-toggle="modal" id="edit" href="#" data-id="' . $contacts->id . '"
                                        data-message="' . $contacts->message . '"  data-subject="' . $contacts->subject . '" data-status="' . $contacts->status . '"
                                                data-bs-target="#kt_modal_contact">' . trans("str.View") . '
                                        </a>
                                        <!--end::Add customer-->
                                        </div>';
                    if (auth()->guard("admin")->user()->can('contact us_delete'))
                        $action = $action . '<div class="menu-item px-3">
                                            <a id="delete" href="#" data-id="' . $contacts->id . '" class="menu-link px-3">' . trans("str.Delete") . '</a>
                                        </div>';
                    $action = $action . '</div></div></div>';
                    return $action;
                })
                ->rawColumns(['id'], ['name'], ['email'], ['mobile'], ['created_at'], ['status'], ['action'])
                ->escapeColumns(['id' => 'id'], ['name' => 'name'], ['email' => 'email'], ['mobile' => 'mobile'], ['created_at' => 'created_at'], ['status' => 'status'], ['action' => 'action'])
                ->make(true);
        }
        return view("admin.contact_us.contacts");
    }

    public function reply()
    {
        return view("admin.contact_us.reply");
    }


    public function compose()
    {
        return view("admin.contact_us.compose");
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
                'email' => 'required',
                'mobile' => 'required:mobile|digits:8',
                'message' => 'required',
            ], [
                'full_name.required' => trans("str.Full Name is required"),
                'email.required' => trans("str.Email is required"),
                'mobile.required' => trans("str.Mobile is required"),
                'message.required' => trans("str.Message is required"),
            ]);

            if ($validator->passes()) {
                $data = new ContactUs();
                $data->name = $request->full_name;
                $data->email = $request->email;
                $data->mobile = $request->mobile;
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
        $contact = ContactUs::query()->find($id);
        $contact->status = !$contact->status;
        $contact->save();
        if ($contact)
            return response()->json(['success' => 'success']);
        return response()->json(['error' => 'error']);
    }

    public function destroy($id)
    {
        $contact = ContactUs::query()->find($id)->delete();
        if ($contact)
            return response()->json(['success' => 'success']);
        return response()->json(['error' => 'error']);
    }
}
