<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where('active', 1)->get();

        return view('admin.categories.index', $data);
    }
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // Validate the 'name' field
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Get the name and generate the slug
        $slug = $this->generateSlug($request->name);

        // Prepare the data to insert, including the generated slug
        $data = $request->except('_token');
        $data['slug'] = $slug;

        $i = Category::insert($data);

        if ($i) {
            return redirect()->route('category.index')->with('success', 'Our Category has been saved successfully!');
        } else {
            return redirect()->route('category.create')
                ->with('error', 'Failed to save our Category. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Generate the slug based on the name
        $slug = $this->generateSlug($request->name);

        // Prepare the data to update, including the slug
        $data = $request->except(['_method', '_token']);
        $data['slug'] = $slug;  // Add the generated slug to the data

        $category = Category::findOrFail($id);
        $i = $category->update($data);

        if ($i) {
            return redirect()->route('category.index')->with('success', 'Category has been updated!');
        } else {
            return redirect()->route('category.edit', $id)->with('error', 'Failed to update Category.');
        }
    }

    private function generateSlug($name)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    }


    public function delete(string $id)
    {
        $i = Category::where('id', $id)->update(['active' => 0]);

        if ($i) {
            return redirect()->route('category.index');
        } else {
            return redirect()->back();
        }
    }
}
