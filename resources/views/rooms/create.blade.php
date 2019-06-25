@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add room</div>

                <div class="card-body">
              
                <form  method="POST" action="{{route('room.store')}}" >
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
                          <div class="d-flex">
                            <div class="mr-1 ml-1">
                                <label for="input-1">booket</label>
                                <input id="input-1" type="radio" value="1"  name="status" >
                            </div>
                            <div class="mr-1 ml-1">
                                <label  for="input-2">unbooket</label>
                                <input id="input-2" type="radio" value="2" name="status" >
                            </div>
                            <div class="mr-1 ml-1">
                                <label  for="input-3">closed</label>
                                <input id="input-3" type="radio" value="3" name="status" >
                            </div>
                          </div>
                       
                        </div>
                        <div class="form-group">
                          <label>R_type</label>
                          <select name="R_type" id="" class="form-control">
                              {{-- <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option> --}}
                              
                            @foreach ($aaas as   $aa)
                            
                                <option value="{{$aa}}">{{$aa}}</option>
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
