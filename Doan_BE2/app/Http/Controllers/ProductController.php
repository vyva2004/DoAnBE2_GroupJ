<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

 
    public function index(Request $request)
{
    $query = Product::query();

    if ($request->filled('search')) {
        $search = $request->input('search');
        logger("Searching for: $search");

        $query->whereRaw('LOWER(product_name) LIKE ?', ['%' . strtolower($search) . '%'])
              ->orWhereRaw('LOWER(product_id) LIKE ?', ['%' . strtolower($search) . '%']);
    }

    $products = $query->paginate(12); 

    return view('index', compact('products'));
}

}

