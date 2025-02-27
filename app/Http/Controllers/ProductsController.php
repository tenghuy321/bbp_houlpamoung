<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch the categories to show in the filter
        $data['categories'] = Category::where('active', 1)->get();

        // Get the category filter (default to 'all' if no category is selected)
        $category = $request->query('category', 'all');

        $query = Product::join('categories', 'products.category_id', '=', 'categories.id')
                        ->where('products.active', 1);

        // If a category is selected, filter by category
        if ($category !== 'all') {
            $query->where('categories.slug', $category);
        }

        $data['products'] = $query->select('products.*', 'categories.slug')
                                   ->paginate(8);

        return view('products', $data);
    }

}
