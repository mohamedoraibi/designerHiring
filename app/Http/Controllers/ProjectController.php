<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $Projects = Project::orderby('created_at', 'DESC')->paginate(5);
//            $ProjectsCount = Project::count();

//        $posts = User::find(1)->project()->get();
//        return response($posts);
            return view('project.manage-projects', compact('Projects'));

        } else {
            return redirect('/login');
        }
    }

    public function create()
    {
        if (Auth::user()) {
//        $posts = User::find(1)->project()->get();
//        return response($posts);
            return view('project.project-add');
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'budget' => 'required|numeric',
                'deadline' => 'required|date',
                'details' => 'required|string',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
            else {
                $data = $request->all();
                $data['user_id'] = $request->user()->id;
                $data['device'] = $request->user()->id;
                $data['visitor'] = $request->ip();
//        dd($data);
                Project::create($data);
                return redirect('/projects')->with('success', 'Project Published successfully.');
            }
        } else {
            return redirect('/login');
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $Project = Project::find($id);
        return view('project.project-edit', compact('Project'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'budget' => 'required|numeric',
                'deadline' => 'required|date',
                'details' => 'required|string',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
            else {
                $data = $request->all();
                $data['user_id'] = $request->user()->id;
                $data['device'] = $request->user()->id;
                $data['visitor'] = $request->ip();
//        dd($data);
                Project::find($id)->update($data);
                return redirect('/projects')->with('success', 'Project Updated successfully.');
            }
        } else {
            return redirect('/login');
        }
    }

    public function destroy($id, Request $request)
    {
        $Project = Project::find($id);
        $Project->delete();
        return redirect('/projects')->with('success', 'Project deleted successfully');
    }

}
