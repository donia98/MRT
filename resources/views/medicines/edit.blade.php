@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">edit Department {{$medicine->code}}</div> 

                <div class="card-body">
              
                        <form  method="POST" action="{{route('medicine.update' , ['id' => $medicine ->id])}}" >
                    
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
                          <label>Department Name</label>
                          <input type="text" class="form-control" name="code" >
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
