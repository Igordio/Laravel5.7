<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(Request $request)
    {
        $data = User::oldest('id')->get();

        return view('users.index', [
            'title' => 'Users',
            'users' => $data

        ]);
    }
}