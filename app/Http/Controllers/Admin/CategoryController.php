<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function categories(){
        //$categories = Category::orderBy('name', 'desc')->get();
        //$categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::latest()->get();
        //$categories = Category::first();
        //$categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::all();
        //$categories = Category::where('name', 'Artwork')->get();
         $categories = Category::where('status','active')->latest()->get();
        return view('admin.categories', compact('categories'));
    }

     public function submitCategory(Request $request){
        $data = $request->validate([
            'name' => 'required|string|unique:categories,name|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);

        $categories = Category::create($data);
        return redirect()->back()->with('success', 'Category added successfully.');
    }
}
