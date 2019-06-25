@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Department</div>

                <div class="card-body">
              
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($medicines as $key => $medicine)

                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td> {{$medicine->code}}</td>
                                <td><a href="{{route('medicine.edit' , ['id' => $medicine ->id])}}">edit</a></td>
                                <td><a href="{{route('medicine.delete' , ['id' => $medicine ->id])}}">delete</a></td>

                            </tr>

                        
                          @endforeach

                      
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
