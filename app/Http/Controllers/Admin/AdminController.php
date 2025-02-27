<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(){

        $categoryCount = Category::where('active', 1)->count();
        $productCount = Product::where('active', 1)->count();


        return view('admin.dashboard', compact('productCount', 'categoryCount'));
    }
}
