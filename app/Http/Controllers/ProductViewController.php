<?php

namespace App\Http\Controllers;

use App\Product;

class ProductViewController extends Controller
{
    protected $folderView = 'products';

    public function index()
    {
        $products = Product::all();

        return view("{$this->folderView}.index")->with(['products'=>$products]);
    }

    public function add()
    {
        return view("{$this->folderView}.addProduct");
    }
}
