<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // The index method to return the "test" view
    public function index()
    {
        return view('test'); // Looks for a "test.blade.php" file in resources/views
    }
}
