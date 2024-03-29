<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    function index () {
        $categories = Category::orderBy("name")->get();
        return response()->json($categories);
    }
}
