<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function index()
    {
        $User = User::get();
//        dd($User);
//        return response($User);
        return view('authNew.register', compact('User'));
    }

    public function create()
    {
        return view('authNew.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'birth' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if ($validator->fails())
            return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
        else {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
//        $data['device'] = $request->user()->id;
            $data['visitor'] = $request->ip();
            if ($request->is_designer == "1")
                $data['is_designer'] = 1;
            else
                $data['is_designer'] = 0;
            if ($request->is_project_owner == "1")
                $data['is_project_owner'] = 1;
            else
                $data['is_project_owner'] = 0;
            if ($request->is_designer == 0 && $request->is_project_owner == 0) {
                $errors = new MessageBag(['account-type' => ['You Should Chose the Account Type']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
                return redirect('/register')->WithErrors($errors)->withInput($request->except('password'));
            }

//            dd($data);
            $newUser = User::create($data);
            auth()->login($newUser);
            return redirect('/')->with('success', 'User created successfully.');
        }

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

    public function loginView()
    {
        return view('authNew.login');
    }

    public function authenticate(Request $request)
    {
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login

            return redirect('/');

            //return redirect()->intended('/details');
        }
        // if failed login
        $errors = new MessageBag(['password' => ['Incorrect Email or Password']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

//        return Redirect::back()->withErrors($errors)->withInput(Input::except('password')); // redirect back to the login page, using ->withErrors($errors) you send the error created above
//        return redirect('/login');
        return Redirect::back()->withErrors($errors)->withInput($request->except('password'));

    }

    public function profileView()
    {
        if (Auth::user()) {
            $User = User::find(Auth::user()->id);
            return view('profile.designer-profile', compact('User'));
        } else {
            return redirect('/login');
        }

    }

    public function settingView()
    {
        if (Auth::user()) {
            $User = User::find(Auth::user()->id);
            return view('profile.settings', compact('User'));
        } else {
            return redirect('/login');
        }

    }

    public function settingUpdate(Request $request, $id)
    {
        if (Auth::user()) {
//            $request->validate([
//                'name' => 'required|string|max:255',
//                'username' => 'required|string|max:255|unique:users',
//                'birth' => 'required',
//                'email' => 'required|email|unique:users',
//            ]);
//            $data = $request->all();
//
//            $data['device'] = $request->user()->id;
//            $data['visitor'] = $request->ip();
//
//
//            User::find($id)->update($data);
//            return view('profile.designer-profile', compact('User'))
//                ->with('success', 'Profile updated successfully');
        } else {
            return redirect('/login');
        }
    }

    public function exploreDesigners()
    {
        if (Auth::user()) {
            $users = User::orderBy('id', 'desc')->where('is_designer', '=', 1)->paginate(10);

            return view('designer.explore', compact('users'));
        } else {
            return redirect('/login');
        }

    }

}
