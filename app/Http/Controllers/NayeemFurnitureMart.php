<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NayeemFurnitureMart extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function shop()
    {
        $items = Product::all();
        return view('website.shop.index',compact('items'));
    }
    public function about()
    {
        return view('website.about.index');
    }

    public function service()
    {
        return view('website.service.index');
    }

    public function blog()
    {
        return view('website.blog.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

}
