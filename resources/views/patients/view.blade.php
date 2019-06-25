@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$patient->P_name}}</div>

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Doctor Name</th>
                      <th scope="col">Medicine name</th>
                      <th scope="col">T_date</th>
                      <th scope="col">disease</th>
                      <th scope="col">treatment_details</th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($treatments as $treatment)
                      @if ($treatment->patient_id == $patient->id)

                      <tr>

                      <td>
                        {{$treatment->patient_id}}
                      </td>
                  
                      <td>
                          @foreach ($doctors as $doctor)
                          @if ($doctor->id  == $treatment->doctor_id)

                          {{$doctor->D_name}}
                          @endif
                          @endforeach
                        </td>
                        <td>

                            @foreach ($medicines as $medicine)
                            @if ($medicine->id  == $treatment->medicine_id)
  
                            {{$medicine->name}}
                            @endif
                            @endforeach
                          </td>
                          <td>
                              {{$treatment->T_date}}
                            </td>
                            <td>
                                {{$treatment->disease}}
                              </td>
                              <td>
                                  {{$treatment->treatment_details}}
                                </td>
                      </tr>
                      @endif


                  @endforeach
                 
                  </tbody>
                </table>
                <div class="card text-left">
                  <div class="card-body">
                     
                    <h4 class="card-title">{{$patient->P_name}}</h4>
                  </div>
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
              <h4 class="text-themecolor">Patient Profile</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item active">Patient Profile</li>
                  </ol>
                  <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
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
          <div class="col-md-4 col-xs-12">
              <div class="card">
                  <div class="user-bg"> <img width="100%" alt="user" src="../assets/images/big/img2.jpg"> </div>
                  <div class="card-body">
                      <div class="user-btm-box">
                          <!-- .row -->
                          <div class="row text-center m-t-10">
                              <div class="col-md-6 b-r"><strong>Name</strong>
                              <p>{{$patient->P_name}}</p>
                              </div>
                              <div class="col-md-6"><strong>Gender</strong>
                                <p>{{$patient->gender}}</p>
                              </div>
                          </div>
                          <!-- /.row -->
                          <hr>
                          <!-- .row -->
                          <div class="row text-center m-t-10">
                              <div class="col-md-6 b-r"><strong>birthday</strong>
                                  <p>{{$patient->B_date}}</p>
                              </div>
                              <div class="col-md-6"><strong>Phone</strong>
                                <p>{{$patient->contact_num}}</p>
                              </div>
                          </div>
                          <!-- /.row -->
                          <hr>
                          <!-- .row -->
                          <div class="row text-center m-t-10">
                              <div class="col-md-12"><strong>Address</strong>
                                <p>{{$patient->address}}</p>
                              </div>
                          </div>
                          <hr>
                     
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-8 col-xs-12">
              <div class="card">
                  <div class="card-body">
                      {{-- <div class="row">
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                              <br>
                              <p class="text-muted">Johnathan Deo</p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                              <br>
                              <p class="text-muted">(123) 456 7890</p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                              <br>
                              <p class="text-muted">john@admin.com</p>
                          </div>
                          <div class="col-md-3 col-xs-6"> <strong>Disease</strong>
                              <br>
                              <p class="text-muted">Fever</p>
                          </div>
                      </div>
                      <hr> --}}
                      {{-- <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                      <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> --}}
                      <h3>treatments</h3>
                      <div class="comment-widgets m-b-20">


                      <tr>

                      <td>
                        {{-- {{$treatment->patient_id}} --}}
                      </td>
                  
                      <td>
                          
                        </td>
                        <td>

                            
                          </td>
                          <td>
                              
                            </td>
                            <td>
                                
                              </td>
                              <td>
                                  
                                </td>
                      </tr>


                  @foreach ($treatments as $treatment)
                  @if ($treatment->patient_id == $patient->id)

                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <span class="round">
                                    <img src="{{ asset('images/avatar.png') }}" alt="user" width="50">
                                </span>
                            </div>
                            <div class="comment-text w-100">
                                <h5>{{$treatment->disease}}</h5>
                                <div class="comment-footer">
                                    <span class="label label-info">
                                        Doctor Name :
                                        @foreach ($doctors as $doctor)
                                          @if ($doctor->id  == $treatment->doctor_id)
                
                                          {{$doctor->D_name}}
                                          @endif
                                          @endforeach</span>
                                    <h6 class="date">{{$treatment->T_date}}</h6>
                               
                                    {{-- <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-pencil-circle"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-checkbox-marked-circle"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-heart"></i>
                                        </a>
                                    </span> --}}
                                </div>
                                <h6>medicine name : @foreach ($medicines as $medicine)
                                    @if ($medicine->id  == $treatment->medicine_id)
          
                                    {{$medicine->name}}
                                    @endif
                                    @endforeach </h6>
                                <p class="m-b-5 m-t-10">{{$treatment->treatment_details}}</p>
                            </div>
                        </div>
                        @endif

                        @endforeach

                  
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.row -->
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
    
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
@endsection
