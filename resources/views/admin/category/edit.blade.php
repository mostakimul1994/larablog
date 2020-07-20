@extends('layouts.admin.master')
@section('title','Update New User')
@section('content')

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Update New category</h4>
			<p class="card-description">
				Categories
			</p>
			<form class="forms-sample" action="{{ route ('category.update',$category->id)}}" method="post">
				@csrf
				@method('put')
				<div class="form-group">
					<label for="name"> Name</label>
					<input type="text" value="{{ $category->name }}" name="name" class="form-control" id="name" placeholder="Enter category Name">
				</div>
				<div class="form-group">
					<label for="description">Category Description</label>

					<textarea name="description" class="form-control"id="description" rows="5" placeholder="Enter details "> {{ $category->description }}</textarea> 
				</div>

				<button type="submit" class="btn btn-primary mr-2">Update Category</button>

			</form>
		</div>
	</div>
</div>

@endsection;
