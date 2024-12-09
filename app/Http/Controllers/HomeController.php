<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Redirect to the posts.index route
        return redirect()->route('posts.index');
    }
}
