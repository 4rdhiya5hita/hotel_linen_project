@extends('layouts/hotel_linen/master')

@section('title', 'Create Users')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('user_create_save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">

                        <div class="form-group">
                            First Name
                            <input class="form-control form-control-sm" name="first_name" type="text" placeholder="-- First Name --">
                        </div>
                        @error('first_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Last Name
                            <input class="form-control form-control-sm" name="last_name" type="text" placeholder="-- Last Name --">
                        </div>
                        @error('last_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen center
                            <input class="form-control form-control-sm" name="linen_center" type="text" placeholder="-- linen center --">
                        </div>
                        @error('linen_center')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <div class="form-group">
                            Laundry Plant
                            <select class="selectpicker form-control form-control-sm" name="laundry_plant" id="laundry_plant" data-live-search="true">
                            <option>-- Select Laundry Plant --</option>
                                @foreach($laundry_plant as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('laundry_plant')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Phone
                            <input class="form-control form-control-sm" name="phone" type="text" placeholder="-- Phone --">
                        </div>    
                        @error('phone')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Email
                            <textarea class="form-control form-control-sm" name="email" type="textarea" rows="4" placeholder="-- email --"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('user_index') }}" class="btn bg-primary" style="width: 200px;">
                          <i class="mr-1 fa fa-arrow-left"></i>
                          Back
                        </a>
                    </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection