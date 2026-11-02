<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil data user beserta relasi access
        $users = User::with('access')->get();

        // Panggil view 'user' (merujuk ke resources/views/user.blade.php)
        return view('user', compact('users'));
    }
}
