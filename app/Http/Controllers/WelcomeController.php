<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about-us');
    }

    public function category(){
        $categories = DB::table('categories')->orderBy('name', 'asc')->get(); // Assuming you have a 'categories' table
        return view('categories', compact('categories'));
    }
}
