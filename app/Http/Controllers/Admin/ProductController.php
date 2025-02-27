<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::join('categories', 'products.category_id', 'categories.id')->where('products.active', 1)
                                        ->select('products.*', 'categories.name as cname')
                                        ->paginate(10);
        $products->getCollection()->transform(function ($item, $index) use ($products) {
            // Calculate the auto number based on the current page
            $item->auto_number = $index + 1 + ($products->currentPage() - 1) * $products->perPage();
            return $item;
        });
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $data['cats'] = Category::where('active', 1)->get();
        return view('admin.products.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/products', 'custom');
        }

        $i = Product::insert($data);

        if ($i) {
            return redirect()->route('product.index')->with('success', 'Product has been created successfully!');
        } else {
            return redirect()->route('product.create')
                ->with('error', 'Failed to created Product. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        $cats = Category::where('active', 1)->get();
        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('cats', 'product'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $data = $request->except('_token', 'image', '_method');
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/products', 'custom');

            if ($product->image && Storage::disk('custom')->exists($product->image)) {
                Storage::disk('custom')->delete($product->image);
            }
        }

        $i = $product->update($data);

        if ($i) {
            return redirect()->route('product.index')->with('success', 'Product has been Updated!');
        } else {
            return redirect()->route('product.edit')
                ->with('error', 'Failed to updated Product. Please try again.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $product = Product::find($id);
        $i = Product::where('id', $id)->delete();

        if($product->image){
            @unlink($product->image);
        }

        if($i){
            return redirect()->route('product.index');
        } else{
            return redirect()->back();
        }
    }
}
