<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class MerchantController extends Controller
{
    public function create()
    {
        return view('merchant.create');

    }

    public function store(Request $request)
    {
        $agent = new Agent();
                $agent->firstname=$request->firstname;
                $agent->lastname=$request->lastname;
                $agent->email=$request->email;
                $agent->city=$request->city;
             $agent->save();
        return redirect('/merchant')->with('success', 'Merchant saved!');


    }


    public function index()
    {
        $agents = Agent::all();

        return view('merchant.index', compact('agents'));
    }

}
