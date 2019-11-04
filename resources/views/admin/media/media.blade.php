@extends('admin.layouts.app')

@section('main-content')

@section('headSection')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


@endsection()

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">

		@include('admin.layouts.pageHead')

		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">


		<div class="box-body">
			<div class="box">
				<div class="box">
					<div class="box-header with-border">

<!--		@if (session()->has('error'))
		<div class="alert alert-danger">{{session()->get('error')}}
		</div>
		@endif
	-->
	<form action="{{ route('library.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="exampleFormControlFile1">Media Library</label>
			<input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
			<input type="submit" value="Upload" class="col-lg-offset-5 btn btn-success">
		</div>
	</form>   


	@include('includes.messages')

	<div class="box-tools pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			<i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body">
		<!--for card column define go to bootstrap.com and card column-->
		<div class="card-row">
			@foreach($avatars as $avatar)
			<div class="card">
				<img src="{{$avatar->getUrl('card')}}" class="card-img-top" alt="card image cap">
			<div class="card-body">


			</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>			
</div>
</section>
</div>
@endsection()

@section('footerSection')


@endsection()