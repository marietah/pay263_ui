@extends('layouts.base')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a device</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('device.store')}}">
          @csrf

          
          <div class="form-group">
            <label>Merchant Name: {{$agent->firstname}}</label>
            <input type="hidden" class="form-control" name="agent_id" value="{{$agent->id}}"/>
        </div><br>
        
          <div class="form-group">    
              <label for="imei">imei:</label>
              <input type="number" class="form-control" name="imei"/>
          </div>

          <div class="form-group">
              <label for="status">Status:</label>
              <input type="text" class="form-control" name="status"/>
          </div>

          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="pos_sim_number">Pos sim number:</label>
              <input type="number" class="form-control" name="pos_sim_number"/>
          </div>
          {{-- <div class="form-group">
              <label for="agent_id">Merchant id:</label>
              <input type="hidden" class="form-control" name="agent_id"/>
          </div> --}}


          <div class="form-group">
              <label for="terminal_id">Terminal id:</label>
              <input type="number" class="form-control" name="terminal_id"/>
          </div>   
          
          <div class="form-group">
            <label for="serial_number">Serial Number:</label>
            <input type="number" class="form-control" name="serial_number"/>
        </div>  
        
        <div class="form-group">
            <label for="pos_type">Pos type:</label>
            <input type="text" class="form-control" name="pos_type"/>
        </div>                 

          <button type="submit" class="btn btn-primary-outline">Add device</button>
      </form>
  </div>
</div>
</div>
@endsection