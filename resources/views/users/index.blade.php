@extends('layouts.base')
<!DOCTYPE html>
<html>
</head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <title>Users</title>
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
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                      

                </tbody>
                @endforeach
                
                </table>
</div>
</div>

</body>
</html>
@endsection