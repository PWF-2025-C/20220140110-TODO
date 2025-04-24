<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\User;
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88

class UserController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
<<<<<<< HEAD
=======
            // $users = User::where('id', '!=', 1)->orderBy('name')->paginate(10);
            // return view('user.index', compact('users'));
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
            $users = User::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->orderBy('name')
<<<<<<< HEAD
                ->where('id', '!=', 1)
                ->paginate(20)
                ->withQueryString();
        } else {
            $users = User::where('id', '!=', 1)
                ->orderBy('name')
                ->paginate(10);
        }

=======
                ->where('id', '!=', '1')
                ->paginate(20)
                ->withQueryString();
        } else {
            $users = User::where('id', '!=', '1')
                ->orderBy('name')
                ->paginate(10);
        }
>>>>>>> d5616eb11ec06e9e3822d6008a972b0fa7adda88
        return view('user.index', compact('users'));
    }
}
