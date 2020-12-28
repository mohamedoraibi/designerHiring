<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $projects = Project::take(4)->get();
        $designers = User::where('is_designer', '=', 1)->take(4)->get();
//        return response($designers);
        return view('index', compact('projects', 'designers'));

    }

    public function aboutUs()
    {
        return view('other.about-us');
    }

    public function contactUs()
    {
        return view('other.contact-us');
    }

}
