<?php

namespace App\Http\Controllers\CMS;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories from database
        $categories = Category::all();

        return view('cms.categories.index', [
            'categories' => $categories
        ]);

        // ------------- This return statement can be: (There are many ways to return data to view) Popular ones are:
        // 1. return view('cms.categories.index', compact('categories'));
        // 2. return view('cms.categories.index')->with('categories', $categories);
    }
}
