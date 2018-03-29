@extends('admin.partials.master')
@section('title', 'Create category')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Category
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Category</a></li>
      <li class="active">Create category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
        </div><!-- /.box-header -->
        <h3 class="box-title">Create category</h3>

        <!-- form start -->
        <form action="{{ route('admin.category.postCreate') }}" method="POST">
          @csrf
          <div class="box-body">
            <div class="form-group{{ $errors->has('name') ? 'is-invalid': '' }}">
              <label for="exampleInputEmail1">Name</label>
              @if($errors->has('name'))
                <p class="validate">{{ $errors->first('name') }}</p>
              @endif
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection