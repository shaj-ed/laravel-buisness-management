<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Date;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', ['name' => 'shajed']);
    }

    public function create() {
        return view('category.create');
    }

     public function store(Request $request) {
        $categoryName = $request->input('categoryName');
        $slug = "/" . $categoryName;

        Category::create([
            'name' => $categoryName,
            'slug' => $slug,
            'description' => $request->input('description'),
            'status' => true
        ]);

        return redirect()->back();
    }
}
