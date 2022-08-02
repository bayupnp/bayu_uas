<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
