<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsersController;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('users.index', compact('users'));
    }
}
