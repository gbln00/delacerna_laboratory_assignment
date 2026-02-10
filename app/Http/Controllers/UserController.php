<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Get all users from database
        return view('dashboard', [
    'totalUsers' => User::count()
]);
    }
}
