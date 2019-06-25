@extends('layouts.app')

@section('content')
{{-- <div class="container">
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
                                @foreach($doctors as $key => $doctor)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td> {{$doctor->D_name}}</td>
                                    <td><a href="{{route('doctor.edit' , ['id' => $doctor ->id])}}">edit</a></td>
                                    <td><a href="{{route('doctor.delete' , ['id' => $doctor ->id])}}">delete</a></td>

                                </tr>

                            
                              @endforeach

                      
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Doctors</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Doctors</li>
                    </ol>
                <a href="{{route('doctor.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <!-- .col -->
            @foreach($doctors as $key => $doctor)

            {{-- <tr>
                <th scope="row">{{$key+1}}</th>
                <td> {{$doctor->D_name}}</td>
                <td><a href="{{route('doctor.edit' , ['id' => $doctor ->id])}}">edit</a></td>
                <td><a href="{{route('doctor.delete' , ['id' => $doctor ->id])}}">delete</a></td>

            </tr> --}}

        

            <div class="col-md-4 col-sm-4">
                <div class="card" >
                    <div class="card-body"  >
                        <div class="row">
                            <div class="col-md-11 ">
                                <button data-toggle="modal" data-target="#myModal{{$doctor->id}}" class="btn text-left">
                                    <div class="row">
                                            <div class="col-md-3 col-sm-3 text-center">
                                                <a href="contact-detail.html"><img src="{{ asset('images/avatar.png') }}" alt="user" class="img-circle img-fluid"></a>
                                            </div>
                                            <div class="col-md-9 col-sm-7">
                                                <h5 class="card-title m-b-0">{{$doctor->D_name}}
                                                <p>
                                                    <address>
                                                            @foreach ($departments as $department)
                                                            @if ($doctor->department_id  == $department->id)
                                  
                                                            {{$department->Dep_name}}
                                                            @endif
                                                            @endforeach
                                                        <br/>
                                                        <br/>
                                                        <abbr title="Phone">P:</abbr> {{$doctor->contact_num}}
                                                    </address>
                                                </p>
                                            </div>
                                         
                                              
                                            
                                        </div>
                                    </button>
                            </div>
                            <div class="col-md-1">
                                    <div class="row">
                      
                                            <div class="col-md-12 col-sm-12 p-1">
                                                    <a style="width: 35px" class="mb-5 btn btn-info waves-effect waves-light m-r-10" href="{{route('doctor.edit' , ['id' => $doctor ->id])}}"><i class="fas fa-edit    "></i></a>
                                                    <a style="width: 35px" class="btn btn-danger waves-effect waves-light m-r-10" href="{{route('doctor.delete' , ['id' => $doctor ->id])}}"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                              
                                            
                                        </div>
                            </div>
                        </div>
                      
                    </div>
                    <div id="myModal{{$doctor->id}}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Doctor {{$doctor->D_name}} </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="card">
                                                <div class="user-bg">
                                                    <img style="height: 100px; width: 100%;object-fit: contain;margin-bottom: 40px"  alt="user" src="{{ asset('images/avatar.png') }}"></div> 
                                                    <div class="card-body"><div class="user-btm-box">
                                                        <div class="row text-center m-t-10">
                                                            <div class="col-md-6 b-r">
                                                                <strong>Name</strong> 
                                                                <p>{{$doctor->D_name}}</p>
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <strong>Gender</strong> 
                                                                <p>{{$doctor->gender}}</p>
                                                            </div>
                                                        </div> 
                                                        <hr> 
                                                        <div class="row text-center m-t-10">
                                                            <div class="col-md-6 b-r">
                                                                <strong>birthday</strong> 
                                                                <p>{{$doctor->B_date}}</p>
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <strong>Phone</strong> 
                                                                <p>{{$doctor->contact_num}}</p>
                                                            </div>
                                                        </div> 
                                                        <hr>
                                                        <div class="row text-center m-t-10">
                                                                <div class="col-md-6 b-r">
                                                                    <strong>Salary</strong> 
                                                                    <p>{{$doctor->salary}}</p>
                                                                </div> 
                                                                <div class="col-md-6">
                                                                    <strong>Department</strong> 
                                                                    <p>
                                                                            @foreach ($departments as $department)
                                                                            @if ($doctor->department_id  == $department->id)
                                                  
                                                                            {{$department->Dep_name}}
                                                                            @endif
                                                                            @endforeach</span>
                                                                        
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <hr> 
                                                        <div class="row text-center m-t-10">
                                                            <div class="col-md-12">
                                                                <strong>Address</strong> 
                                                                <p>{{$doctor->adress}}</p>
                                                            </div>
                                                        </div> 
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                </div>
            </div>
            @endforeach

            <!-- /.col -->
            <!-- .col -->
       
        </div>
        <!-- /.row -->
     
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
     
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection
