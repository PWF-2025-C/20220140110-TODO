<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos for the authenticated user, ordered by creation date descending
        $todos = Todo::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        // Pass the todos data to the view
        return view('todo.index', compact('todos'));
    }


    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Membuat todo baru dengan data yang diterima
        $todo = Todo::create([
            'title' => ucfirst($request->title),  // Mengubah huruf pertama menjadi kapital
            'user_id' => Auth::id(),              // Mengambil ID pengguna yang sedang login
        ]);

        // Redirect ke halaman todo.index dan menambahkan pesan sukses
        return redirect()->route('todo.index')->with('success', 'Todo created successfully.');
    }

    public function edit()
    {
        return view('todo.edit');
    }
}
