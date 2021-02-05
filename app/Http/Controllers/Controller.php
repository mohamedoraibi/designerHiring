<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(4)->get();
        $projectsCount = Project::count();
        $designers = User::orderBy('id', 'desc')->where('is_designer', '=', 1)->take(6)->get();
        $designersCount = User::where('is_designer', '=', 1)->count();

        return view('homepage.index', compact('projects', 'designers', 'projectsCount', 'designersCount'));
    }

    public function aboutUs()
    {
        if (Auth::user()) {
            return view('other.about-us');

        } else {
            return redirect('/login');
        }
    }

    public function contactUs()
    {
        if (Auth::user()) {
            return view('other.contact-us');

        } else {
            return redirect('/login');
        }
    }

    public function dashboard()
    {
        if (Auth::user()) {
            return view('dashboard.dashboard');
        } else {
            return redirect('/login');
        }

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
        if (Auth::user()) {
            $User = User::find($id);
            return view('profile.designer-profile', compact('User'));
        } else {
            return redirect('/login');
        }

    }

    public function messages()
    {
        if (Auth::user()) {
            return view('messages.messages');
        } else {
            return redirect('/login');
        }
    }

    public function reviews()
    {
        if (Auth::user()) {
            return view('reviews.reviews');
        } else {
            return redirect('/login');
        }
    }

    public function favorite()
    {
        if (Auth::user()) {
            return view('favorite.favorite');
        } else {
            return redirect('/login');
        }
    }

}
