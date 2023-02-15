<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Agent;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();

        return view('devices.index', compact('devices'));
    }

    
    public function create($id){
        $agent=Agent::where('id','=',$id)->first();
        return view('devices.create',compact('agent'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'imei'=>'required',
            'status'=>'required',
            'name'=>'required',
            'pos_sim_number'=>'required',
            'agent_id'=>'required',
            'terminal_id'=>'required',
            'serial_number'=>'required',
            'pos_type'=>'required'
            

        ]);

        $device = new Device([
            'ime' => $request->get('ime'),
            'status' => $request->get('status'),
            'name' => $request->get('name'),
            'pos_sim_number'=>$request->get('pos_sim_number'),
            'agent_id' => $request->get('agent_id'),
            'terminal_id' => $request->get('terminal_id'),
            'serial_number' => $request->get('serial_number'),
            'pos_type' => $request->get('pos_type')
        ]);
        $device->save();
        return redirect('/devices')->with('success', 'Device saved!');
    }
}
