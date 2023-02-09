@extends('layouts.base') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a User</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('users.update', $user->id)}}">
            @method('PUT') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}"/>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role">
                  <option value="admin">Admin</option>
                  <option value="merchant">Merchant</option>
                </select>
              </div>

            {{-- <div class="form-group  dropdown">
                <label for="role">role:</label>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">ADMIN</button>
                    <button class="dropdown-item" type="button">MERCHANT</button>
                    <button class="dropdown-item" type="button">NONE</button>
                  </div>
                <input type="text" class="form-control" name="role" value="{{$user->role}}"/>
            </div> --}}
{{-- 
            <div class="form-group">
                <label for="role">role:</label>
                <input type="text" class="form-control" name="role"/>
                <select name = "dropdown">
                   <option value = "admin" >ADMIN</option>
                   <option value = "merchant">MERCHANT</option>
                   
                </select>
            </div> --}}
            
            {{-- div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false ">
              role
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">ADMIN</button>
              <button class="dropdown-item" type="button">MERCHANT</button>
              <button class="dropdown-item" type="button">NONE</button>
            </div>
          </div> --}}

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" name="status" value="{{$user->status}}"/>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection