@extends('admin.partials.master')
@section('title', 'Manage Category')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage Category
			<small>preview of category tables</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Category</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Show all category</h3>
						<div class="box-tools">
							<div class="input-group" style="width: 150px;">
								<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search" />
								<div class="input-group-btn">
									<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>ID</th>
								<th>User</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							@foreach($cate as $c)
							<tr>
								<td>{{ $c->id }}</td>
								<td>{{ $c->name }}</td>
								<td><span class="label label-success">Approved</span></td>
								<td>
									<a href="{{ route('admin.category.update') }}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp
									<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
								</td>
							</tr>
							@endforeach
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection