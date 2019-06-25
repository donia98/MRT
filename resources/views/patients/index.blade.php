@extends('layouts.app')

@section('content')

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
              <h4 class="text-themecolor">Patients</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item active">Datatable</li>
                  </ol>
                  <a href="{{route('patient.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                          class="fa fa-plus-circle"></i> Create New</a>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-12">
             
              <div class="card">
                  <div class="card-body">
                      
                      <div class="table-responsive m-t-40">
                          <table id="example" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($patients as $key => $patient)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td> <a href="{{route('patient.view' , ['id' => $patient ->id])}}">{{$patient->P_name}}</a></td>
                                    <td><a href="{{route('patient.edit' , ['id' => $patient ->id])}}"><i class="fas fa-edit    "></i></a></td>
                                    <td><a href="{{route('patient.delete' , ['id' => $patient ->id])}}"><i class="fas fa-trash-alt"></i></a></td>

                                </tr>

                            
                              @endforeach

                                 
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          
              
          </div>
      </div>
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
