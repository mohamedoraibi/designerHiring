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
            $Skills = Skill::paginate(10);
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

    public function edit($id)
    {
        if (Auth::user()) {
            $Skill = Skill::find($id);
            return view('setting.skillEdit', compact('Skill'));
        } else {
            return redirect('/login');
        }

    }

    public function update(Request $request, $id)
    {
        if (Auth::user()) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
            else {
                $data = $request->all();
                Skill::find($id)->update($data);
                return redirect('/skills')->with('success', 'Skill Updated successfully.');
            }
        } else {
            return redirect('/login');
        }
    }

    public function destroy($id, Request $request)
    {
        if (Auth::user()) {
            $Skill = Skill::find($id);
            $Skill->delete();
            return redirect('/skills')->with('success', 'Skill deleted successfully');
        } else {
            return redirect('/login');
        }

    }
}
