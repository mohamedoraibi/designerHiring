<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $User = User::get();
//        dd($User);
        return response($User);
        return view('authNew.register', compact('User'));
    }

    public function create()
    {
        return view('authNew.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'birth' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $data = $request->all();

        $data['password'] = Hash::make($request->password);
//        $data['device'] = $request->user()->name;
        $data['visitor'] = $request->ip();

        if ($request->is_designer == "1")
            $data['is_designer'] = 1;
        else
            $data['is_designer'] = 0;

        if ($request->is_project_owner == "1")
            $data['is_project_owner'] = 1;
        else
            $data['is_project_owner'] = 0;
//        dd($data);

        User::create($data);

        return view('index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id, Request $request)
    {

    }
}
