<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Auth;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch todos for the authenticated user and order them by created_at descending
        $todos = Todo::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        // Pass the todos to the view
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
        return view('todo.index', compact('todos'));
    }


<<<<<<< HEAD
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
=======

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
    }
}
