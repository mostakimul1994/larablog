@extends('layouts.admin.master')
@section('title','Create New User')
@section('content')

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Create New category</h4>
			<p class="card-description">
				Categories
			</p>
			<form class="forms-sample" action="{{ route ('category.store',1)}}" method="post">
				@csrf
				@method('post')
				<div class="form-group">
					<label for="name"> Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Enter category Name">
				</div>
				<div class="form-group">
					<label for="description">Category Description</label>

					<textarea type="" name="description" class="form-control" id="description" rows="5" placeholder="Enter details "></textarea> 
				</div>

				<button type="submit" class="btn btn-primary mr-2">Create Category</button>

			</form>
		</div>
	</div>
</div>

@endsection;
