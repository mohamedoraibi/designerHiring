<?php

namespace App\Http\Controllers;

use App\Models\Bidding;
use App\Models\Project;
use Carbon\Carbon;
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
        if (Auth::user()) {
            $Project = Project::find($id);
            $deadline = Carbon::parse($Project->deadline);
            return view('project.project-bid', compact('Project', 'deadline'));
        } else {
            return redirect('/login');
        }

    }

    public function edit($id)
    {
        if (Auth::user()) {
            $Project = Project::find($id);
            return view('project.project-edit', compact('Project'));
        } else {
            return redirect('/login');
        }

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
        if (Auth::user()) {
            $Project = Project::find($id);
            $Project->delete();
            return redirect('/projects')->with('success', 'Project deleted successfully');
        } else {
            return redirect('/login');
        }

    }

    public function bid($id)
    {
        if (Auth::user()) {
            $Project = Project::find($id);
//        $Project->bids(1);
//        dd($Project);
            return view('project.manage-bidders', compact('Project'));
        } else {
            return redirect('/login');
        }

    }

    public function bidding(Request $request)
    {
        if (Auth::user()) {
            $validator = Validator::make($request->all(), [
                'price' => 'required|numeric',
                'days' => 'required|numeric',
                'notes' => 'required|string',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
            else {
                $data = $request->all();
                $data['id_user_designer'] = $request->user()->id;
                $data['id_user_project_owner'] = $request->id_project;
//        dd($data);
                Bidding::create($data);
                return redirect()->back()->with('success', 'Project Published successfully.');
            }

        } else {
            return redirect('/login');
        }
    }

    public function bids(Request $request)
    {

        if (Auth::user()) {
            $Bidding = Bidding::where('id_user_designer', $request->user()->id)->get();
            return view('project.show-bids', compact('Bidding'));


        } else {
            return redirect('/login');
        }
    }

    public function destroyBid($id, Request $request)
    {
        if (Auth::user()) {
            $Bidding = Bidding::find($id);
            $Bidding->delete();
            return redirect('/bids')->with('success', 'Bid deleted successfully');
        } else {
            return redirect('/login');
        }
    }


}
