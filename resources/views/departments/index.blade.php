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
                                @foreach($departments as $key => $department)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td> {{$department->Dep_name}}</td>
                                    <td><a href="{{route('department.edit' , ['id' => $department ->id])}}">edit</a></td>
                                    <td><a href="{{route('department.delete' , ['id' => $department ->id])}}">delete</a></td>

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
