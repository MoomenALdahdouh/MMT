<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\FollowUs;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $data = [];
        $data["categories"] = Category::query()->where("status", 1)->latest()->limit(6)->get();
        $data["products"] = Product::query()->where("status", 1)->latest()->limit(8)->get();
        $data["pin_products"] = Product::query()->where("status", 1)->where("pin_status", 1)->latest()->limit(10)->get();
        $data["about_us"] = AboutUs::query()->get()->first();
        $data["follow_us"] = FollowUs::query()->get()->first();
        $data["services"] = Service::query()->latest()->limit(8)->get();
        return view("index", $data);
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
