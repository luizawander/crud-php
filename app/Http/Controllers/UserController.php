<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index ()
    {
        return view('users.index');
    }

    public function create ()
    {
        return view('users.create');
    }

    public function store (UserRequest $request)
    {
        $request->validated();
    }
}
