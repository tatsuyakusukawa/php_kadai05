<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCategoryRequest;
use App\Models\TodoCategory;
use Illuminate\Http\Request;

class TodoCategoryController extends Controller
{
    public function index()
    {
        $categories = TodoCategory::all();
        return $categories;
        //  view('todo_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('todo_categories.create');
    }

    public function store(TodoCategoryRequest $request)
    {
        $category = new TodoCategory();
        $category->CategoryName = $request->CategoryName;
        $category->save();
        // return redirect()->route('todos.index');
    }

    // 他のアクションやメソッドを追加することもできます
}
