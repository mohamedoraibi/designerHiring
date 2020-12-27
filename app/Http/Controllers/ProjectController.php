<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

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

        $request->validate([
            'name' => 'required|string|max:255',
            'budget' => 'required|numeric|max:255',
            'deadline' => 'required|date',
            'details' => 'required|string',
        ]);
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
//        $data['device'] = $request->user()->name;
        $data['visitor'] = $request->ip();

//        dd($data);
        Project::create($data);

        return redirect('/')->with('success', 'Project Published successfully.');
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
