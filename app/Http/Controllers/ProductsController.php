<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view("gallery");
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        return view("single_product");
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
