@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit  Doctor {{$doctor->D_name}}</div>

                <div class="card-body">
              
                <form  method="POST" action="{{route('doctor.update' , ['id' => $doctor ->id])}}" >
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
\                      <label>username Name</label>
                      <input type="text" class="form-control" disabled name="username" value="{{$doctor->username}}" >
                    </div>
                        <div class="form-group">

                          <label>Doctor Name</label>
                        <input type="text" class="form-control" name="D_name" value="{{$doctor->D_name}}" >
                        </div>
                        <div class="form-group">
                            <label>gender</label>
                            <input type="text" name="gender" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label>salary</label>
                            <input type="text" name="salary" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label>birthday</label>
                            <input type="text" class="form-control" name="B_date" >
                          </div>
                          <div class="form-group">
                            <label>adress</label>
                            <input type="text" name="adress" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label>contact num</label>
                            <input type="text" name="contact_num" class="form-control" >
                          </div>
                      
                          <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="Dep_ID">
                              @foreach ($departments as $department)
                              @if ($department->id == $doctor ->Dep_ID )
                              <option selected value="{{$department->id}}">{{$department->Dep_name}}</option>
                              @else 
                              <option value="{{$department->id}}">{{$department->Dep_name}}</option>

                              @endif
                              @endforeach
                              
                        
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
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
                <h4 class="text-themecolor">Edit Doctor {{$doctor->D_name}}</h4>
            </div>
          
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Information</h5>
                        <form class="form-material form-horizontal" method="POST" action="{{route('doctor.update' , ['id' => $doctor ->id])}}">
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
                                <label class="col-md-12" for="example-text">Name</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="D_name" class="form-control" value="{{$doctor->D_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Date of Birth</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="bdate" name="B_date" class="form-control mydatepicker" value="{{$doctor->B_date}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Gender</label>
                                <div class="col-sm-12">
                                        <select class="form-control" name="gender">

                                                @foreach ($gender as $gende)
                                              @if ($gende == $doctor->gender )
                                             <option selected value="{{$gende}}">{{$gende}}</option>
                                             @else  
                                             <option value="{{$gende}}">{{$gende}}</option>
               
                                              @endif 
                                             @endforeach
                                         </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-phone">Phone</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-phone" name="contact_num" class="form-control" value="{{$doctor->contact_num}}" data-mask="(999) 999-9999">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-Salary">Salary</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-Salary" name="salary" class="form-control" value="{{$doctor->salary}}" data-mask="(999) 999-9999">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-Address">Address</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-Address" name="adress" class="form-control" value="{{$doctor->adress}}" data-mask="(999) 999-9999">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Department</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="department_id">
                                        @foreach ($departments as $department)
                                        @if ($department->id == $doctor ->Dep_ID )
                                        <option selected value="{{$department->id}}">{{$department->Dep_name}}</option>
                                        @else 
                                        <option value="{{$department->id}}">{{$department->Dep_name}}</option>
          
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Description</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            {{-- <h5 class="card-title mb-4">Doctor's Account Information</h5>
                            <div class="form-group">
                                <label class="col-md-12" for="example-username">Username</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-username" name="username" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">
                                </div>
                            </div>
                            <div class="form-group">

                            <label class="col-md-12" for="example-email">Email</span>
                            </label>
                            <div class="col-md-12">
                                <input type="email" id="example-email" name="email" class="form-control" placeholder="enter your email">
                            </div>
                        </div>
                   --}}
                        {{-- <div class="form-group">
                            <label class="col-md-12" for="pwd">Password</span>
                            </label>
                            <div class="col-md-12">
                                <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                            </div>
                        </div> --}}
                    


                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
     
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
@endsection
