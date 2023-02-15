@extends('layouts.base')
<!DOCTYPE html>
<html>
</head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <title>View Devicess</title>
    <head>
    <body>
    @section('content')
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-12">
                          @if(session()->get('success'))
                              <div class="alert alert-success">
                                {{ session()->get('success') }}  
                              </div>
                            @endif
                          </div>
        <table class="table"  table id="example" class="display">
            <thead>
            <tr>
        
                <th>Imei</th>
                <th>status</th>
                {{-- <th>name</th> --}}
                <th>pos sim number</th>
                <th>Merchant id</th>
                <th>terminal id</th>
                <th>Serial number</th>
                <th>pos type</th>
                {{-- <th>Action</th> --}}
            </tr>
            </thead>
                <tbody>
                    @foreach($devices as $device)
                    <tr>
                        <td>{{$device->imei}}</td>
                        <td>{{$device->status}}</td>
                        <td>{{$device->pos_sim_number}}</td>
                        <td>{{$device->merchant_id}}</td>
                        <td>{{$device->terminal_id}}</td>
                        <td>{{$device->serial_number}}</td>
                        <td>{{$device->pos_type}}</td>
                        {{-- <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td> --}}
{{--                       
                        <td>
                            <a href="{{ route('device.create',$user->id)}}" class="btn btn-primary">Add device</a>
                        </td> --}}

                </tbody>
                @endforeach
                
                </table>
</div>
</div>

</body>
</html>
@endsection