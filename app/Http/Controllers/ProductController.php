<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function productDetails()
  {
    $allData = Product::all();
    // $someData = Product::select('name', 'description')->where('product-category', 'Video-Based Safety');
    $category = Product::select('product-category')->distinct()->get();

    return view('products', [
      'productDetails' => $allData,
      'distinctCategory' => $category
    ]);
  }

}
