<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $offers = Offer::where('id_user_designer', Auth::user()->id)->orderby('created_at', 'DESC')->get();
            $offersCount = $offers->count();

            return view('designer.manage-hiring', compact('offers', 'offersCount'));
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'days' => 'required',
                'desc' => 'required|string',
            ]);
            if ($validator->fails())
                return redirect()->back()->WithErrors($validator->errors()->all())->withInput($request->except('password'));
            else {
                $data = $request->all();
                $data['id_user_project_owner'] = $request->user()->id;
                $data['id_user_designer'] = $request->user()->id;
                $data['device'] = $request->user()->id;
                $data['visitor'] = $request->ip();
//        dd($data);
                Offer::create($data);
                return redirect()->back()->with('success', 'Offer Sent successfully.');
            }
        } else {
            return redirect('/login');
        }
    }
}
