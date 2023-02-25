<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(6);

        $search = $request->input('search');

        $query = Product::query();

        if ($search) {
            $spaceConversion = mb_convert_kana($search, 's');

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($wordArraySearched as $value) {
                $query->where('name', 'like', '%' . $value . '%');
            }

            $products = $query->paginate(6);
        }

        return view('product.index')
            ->with([
                'products' => $products,
                'search' => $search
            ]);
    }

    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }
}
