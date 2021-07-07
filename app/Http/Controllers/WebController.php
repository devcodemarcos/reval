<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;
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
        $categories = ProductCategory::where('name', ucfirst($category))->firstOrFail();
        $products = $categories->products()->paginate(6);
        
        return view('web.sections.products', compact('category', 'products'));
    }
}
