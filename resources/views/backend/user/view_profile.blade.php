@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Data Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

            <!--user profile start-->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" >
                     {{-- style="background: url('../images/gallery/full/10.jpg') center center;" --}}
                  <h3 class="widget-user-username">User Name :  {{$user->name}} </h3>
                  <a href=" {{ route('profile.edit') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Edit Profile </a>

                  <h6 class="widget-user-desc">User Type : <span class="text-danger" > {{$user->usertype}} </span> </h6>
                  <h6 class="widget-user-desc">User Email : {{$user->email}} </h6>
                  <h6 class="widget-user-desc">User Company : <span class="text-danger"> {{$user->company_name}} </span> </h6>


                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{ (!empty($user->image))?url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Mobile Number </h5>
                        <span class="description-text"> {{$user->mobile}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Address </h5>
                        <span class="description-text"> {{$user->address}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header"> Gender </h5>
                        <span class="description-text"> {{$user->gender}} </span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
             </div>

            <!--user profile end-->
           
           <!-- /.col -->
          </div>
         <!-- /.row -->
      </div>

      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
