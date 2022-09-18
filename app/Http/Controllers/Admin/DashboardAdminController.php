<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminPermissions;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $data["products"] = Product::query()->where("status", 1)->get()->count();
        $data["categories"] = Category::query()->where("status", 1)->get()->count();
        $data["services"] = Service::query()->where("status", 1)->get()->count();
        $data["users"] = User::query()->where("status", 1)->get()->count();
        return view("admin.index",$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
