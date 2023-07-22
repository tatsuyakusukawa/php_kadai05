<?php

namespace App\Http\Controllers;

use App\Models\TodoDetail;
use Illuminate\Http\Request;
use App\Models\TodoCategory;

class TodoDetailController extends Controller
{
    public function index()
    {
        $details = TodoDetail::all();
        return view('todo_details.index', compact('details'));
    }

    public function create()
    {
        $categories = TodoCategory::all();
        return view('todo_details.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $detail = new TodoDetail();
        $detail->CategoryID = $request->CategoryID;
        $detail->Title = $request->Title;
        $detail->Content = $request->Content;
        $detail->DueDate = $request->DueDate;
        $detail->save();
        return redirect()->route('todos.index');
    }




    // 他のアクションやメソッドを追加することもできます
}
