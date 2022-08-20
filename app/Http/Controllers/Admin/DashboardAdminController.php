<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminPermissions;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
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
