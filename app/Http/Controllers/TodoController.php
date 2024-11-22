<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = TodoList::paginate(10);
        return view('todo_list.todo.index', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo_list.todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'todo' => 'required',
        ]);
        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }
        $todo = new TodoList();
        $todo->todo = $request->todo;
        $todo->tanggal = $request->tanggal;
        $todo->jam = $request->jam;
        $todo->status = $request->status;
        $todo->save();
        return redirect()->route('todo.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = TodoList::find($id);
        if (!$todo) {
            return redirect()->back()->with('error', 'Data Tidak Ditemukan');
        }
        return view('todo_list.todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = TodoList::find($id);
        $todo->todo = $request->todo;
        $todo->tanggal = $request->tanggal;
        $todo->jam = $request->jam;
        $todo->status = $request->status;
        $todo->save();
        return redirect()->route('todo.index')->with('success', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = TodoList::find($id);
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
