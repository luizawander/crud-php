<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index () //
    {
        return view('users.index');
    }

    public function create ()
    {
        return view('users.create'); // exibew o formulário.
    }

    public function store (UserRequest $request)
    {
        $request->validated(); // processa os dados do formulário.

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }
}
