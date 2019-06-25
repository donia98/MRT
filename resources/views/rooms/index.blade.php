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
                                @foreach($rooms as $key => $room)

                                <tr>
                                    <th scope="row">{{$room->id}}</th>
                                    <td> 
                                      @if ($room->status == 1)
                                          
                                      booket

                                      @elseif($room->status == 3)

                                      closed

                                      @else
                                      unbooket
                                      @endif
                                      
                                    
                                    </td>
                                    <td> {{$room->R_type}}</td>

                                    <td><a href="{{route('room.edit' , ['id' => $room ->id])}}">edit</a></td>
                                    <td><a href="{{route('room.delete' , ['id' => $room ->id])}}">delete</a></td>

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
