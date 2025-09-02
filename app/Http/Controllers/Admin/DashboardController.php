<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function blogs() :View
    {
        return view('admin.blogs');
    }

    public function addBlog()
    {
        return view('admin.add-blogs');
    }

    public function categories()
    {
        return view('admin.categories');
    }
}
