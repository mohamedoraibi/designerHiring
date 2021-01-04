<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
//        $posts = User::find(1)->project()->get();
//        return response($posts);
        return view('project.project-add');
    }

    public function store(Request $request)
    {
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
            $data['device'] = $request->user()->name;
            $data['visitor'] = $request->ip();
//        dd($data);
            Project::create($data);
            return redirect('/')->with('success', 'Project Published successfully.');
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

}
