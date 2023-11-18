<?php

namespace App\Http\Controllers;


use App\Models\todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class todocontroller extends Controller
{
    public function index()
    {
        $todos = todo::latest()->get();
        return view("todos.index", compact('todos'));
    }
    public function show(todo $todo)
    {
        return view("todos.show", compact('todo'));
    }
    public function create()
    {
        return view("todos.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:10',
            'description' => 'required',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('باتشکر', '.تسک با موفقیت ایجاد شد');

        return redirect()->route('todos.index');
    }
    public function edit(todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, todo $todo)
    {
        $request->validate([
            'title' => 'required|min:4|max:10',
            'description' => 'required',
        ]);

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('باتشکر', 'تسک با موفقیت ویرایش شد');

        return redirect()->route('todos.index');
    }
    public function delete(todo $todo)
    {
        $todo->delete();
        Alert::error('', 'تسک با موفقیت حذف شد');
        return redirect()->route('todos.index');
    }
    public function complate(todo $todo)
    {
        $todo->update([
            'complated' => 1
        ]);
        Alert::success('باتشکر ', 'تسک با موفقیت تایید شد');
        return redirect()->route('todos.index');
    }
}
