<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(6);
        return view('product.index', compact('data'))
            ->with('products', Product::get());
    }

    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }
}
