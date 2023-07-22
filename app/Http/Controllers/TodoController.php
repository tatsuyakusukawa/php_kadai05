<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use App\Models\TodoDetail;

class TodoController extends Controller
{
    public function index()
    {
        $categories = TodoCategory::all();
        $details = TodoDetail::all();

        return view('todos.index', compact('categories', 'details'));
    }
}
