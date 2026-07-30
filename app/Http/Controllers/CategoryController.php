<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        $totalItems = Category::count();

        return view('category.index', [
                'categories' => $categories,
                'totalItems' => $totalItems
            ]);
    }

    public function create() {
        return view('category.create');
    }

     public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | string | max:30',
            'description' => 'nullable | string',
            'status' => 'nullable | boolean'
        ]);
        
        $categoryName = $request->input('name');
        $to_array = explode(' ', strtolower($categoryName));
        $validated["slug"] = join('_', $to_array);
        
        Category::create($validated);

        return redirect()
        ->route('category.index')
        ->with('success', 'Category created successfully');
    }
}
