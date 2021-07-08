<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class WebController extends Controller
{
    public function inicio()
    {
        return view('web.layout');
    }

    public function story()
    {
        return view('web.sections.story');
    }

    public function clients()
    {
        return view('web.sections.clients');
    }

    public function services()
    {
        return view('web.sections.services');
    }

    public function contact()
    {
        return view('web.sections.contact');
    }

    public function products($category)
    {
        $category = ProductCategory::where('slug', $category)->firstOrFail();
        $products = $category->products()->paginate(3);
        
        return view('web.sections.products', compact('category', 'products'));
    }

    public function product($category, $product)
    {
        $product = Product::where('slug', $product)->firstOrFail();
        $category = ProductCategory::where('slug', $category)->firstOrFail();
        $products = Product::all()->random(3);
        return view('web.sections.product', compact('category', 'product', 'products'));
    }
}
