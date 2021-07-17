<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Services\PriceToStringService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function index (PriceToStringService $priceToStringService)
    {
        $categories = Category::all();
        $products = Product::with(['images' => function ($query) {
            $query->limit(2);
        }])->get();
        $products = $priceToStringService->turnUp($products);

        return view('index', [
           'categories' => $categories,
           'products' => $products,
        ]);
    }
}
