<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(4)->get();
        $projectsCount = Project::count();
        $designers = User::orderBy('id', 'desc')->where('is_designer', '=', 1)->take(6)->get();
        $designersCount = User::where('is_designer', '=', 1)->count();

//        return response($designers);
        return view('homepage.index', compact('projects', 'designers', 'projectsCount', 'designersCount'));
    }

    public function aboutUs()
    {
        return view('other.about-us');
    }

    public function contactUs()
    {
        return view('other.contact-us');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function tag(Request $request)
    {
//        dd($request->tag);
//        $skills = explode(',', $request->input('tag'));
//        -----THIS IS CODE---------------------------------------
//        $skillsArray = [1, 2];
//        -----THIS IS CODE---------------------------------------
//        $User = User::find(Auth::user()->id);

//        foreach ($skills as $skillID) {
//            array_push($skillsArray, $skillID);
//        }
//        -----THIS IS CODE---------------------------------------
//        $User->skills()->attach($skillsArray);
    }

    public function profile($id)
    {
        $User = User::find($id);
        return view('profile.designer-profile', compact('User'));
    }


}
