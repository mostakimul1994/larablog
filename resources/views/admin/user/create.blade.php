@extends('layouts.admin.master')
@section('title','Create New User')
@section('content')

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Create New Users</h4>
			<p class="card-description">
				Users
			</p>
			<form class="forms-sample" action="{{ route ('user.store',1)}}" method="post">
				@csrf
				@method('post')
				<div class="form-group">
					<label for="name">User Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Enter user Name">
				</div>
				<div class="form-group">
					<label for="email">User Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter email ">
				</div>
				<div class="form-group">
					<label for="password">password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Enter email ">
				</div>

				<button type="submit" class="btn btn-primary mr-2">Create_User</button>

			</form>
		</div>
	</div>
</div>

@endsection;
