@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add room</div>

                <div class="card-body">
              
                <form  method="POST" action="{{route('treatment.store')}}" >
                  @if (count($errors) > 0)
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Errors</h4>
                    <ul class="list-unstyled">
                        @foreach ($errors -> all() as $error)
                          <li>  {{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                  
                      
                  @endif
                  {{csrf_field()}}

                  <div class="form-group">
                      <label>dads name</label>
                    <input type="text" class="form-control" name="T_date">
                    </div>
                    
                        <div class="form-group">
                          <label>patient name</label>
                          <select name="patient_id" id="" class="form-control">
                            @foreach ($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->P_name}}</option>

                            @endforeach
                          </select>
                        </div>
                        <?php 
                        $user = Auth::user();
                        ?>
                        <div class="form-group">
                            <label>doctor name</label>
                            <input type="text" class="form-control" disabled value="{{$user->name}}">
                          </div>
                          <div class="form-group">
                              <label>midcine code</label>
                              <select name="medicine_id" id="" class="form-control">

                              @foreach ($medicines as $medicine)
                              <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                              @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">disease</label>
                              <input type="text" name="disease" id="" class="form-control" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label for="">disease</label>
                                <input type="text" name="treatment_details" id="" class="form-control" placeholder="" >
                              </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
