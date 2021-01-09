<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $Skills = Skill::get();
            return view('setting.skills', compact('Skills'));
        } else {
            return redirect('/login');
        }
    }

    public function create()
    {
        if (Auth::user()) {
            return view('setting.skillAdd');

        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput();
            else {
                $data = $request->all();
//            dd($data);
                Skill::create($data);
                return redirect('/skills')->with('success', 'Skill created successfully.');
            }
        } else {
            return redirect('/login');
        }
    }
}
