@extends('layouts.admin.master')
@section('title','Create New User')
@section('content')

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Create New author</h4>
			<p class="card-description">
				Author
			</p>
			<form class="forms-sample" action="{{ route ('author.store',$author->id)}}" method="post">
				@csrf
				@method('post')
				<div class="form-group">
					<label for="name"> Name</label>
					<input type="text" value="{{ $author->name }}" name="name" class="form-control" id="name" placeholder="Enter author Name">
				</div>
				<div class="form-group">
					<label for="email"> Email</label>
					<input type="email" name="email" value="{{ $author->email }}" class="form-control" id="email" placeholder="Enter email ">
				</div>
				<div class="form-group">
					<label for="about">Details</label>

					<textarea type="" name="about" class="form-control" id="about" rows="5" placeholder="Enter authors details "> {{ $author->name }}</textarea> 
				</div>

				<button type="submit" class="btn btn-primary mr-2">Create Authors</button>

			</form>
		</div>
	</div>
</div>

@endsection;