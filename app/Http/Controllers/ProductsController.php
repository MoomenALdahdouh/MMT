<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $categories = Category::query()->where("status", 1)->latest()->get();
        $products = Product::query()->where("status", 1)->latest()->get();
        return view("gallery", compact("categories", "products"));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $product = Product::query()->find($id);
        $related_product = Product::query()->where("status", 1)->whereNot("id", $id)->limit(10)->get();
        return view("single_product", compact("product", "related_product"));
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
