<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', ['users' => User::all()]);
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        User::newUser($request);
        return back()->with('message', 'User info create successfully.');
    }
}
