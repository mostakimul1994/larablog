@extends('layouts.admin.master')
@section('title','Create New Post')
@section('content')

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Create Your posts</h4>
			<p class="card-description">
				posts
			</p>
			<form class="forms-sample" action="{{ route ('post.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('post')
				@include('admin.post._form') 
				<button type="submit" class="btn btn-primary mr-2">Save</button>

			</form>
		</div>
	</div>
</div>

@endsection;
