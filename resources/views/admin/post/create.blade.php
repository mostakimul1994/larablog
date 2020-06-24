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
			<form class="forms-sample" action="{{ route ('post.store',1)}}">
				@csrf
				@method('post')
				<div class="form-group">
					<label for="exampleInputName1">Title</label>
					<input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
				</div>

				<div class="form-group">
					<label for="exampleSelectGender">Category</label>
					<select class="form-control" name="category" id="exampleSelectGender">
						<option>Polities</option>
						<option>Games</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleTextarea1">Details</label>
					<textarea class="form-control" name="details" id="exampleTextarea1" rows="6"></textarea>
				</div>

				<div class="col-md-6">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Status</label>
						<div class="col-sm-4">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="" checked>
									Active
								</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="option2">
									Inactive
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>File upload</label>
					<input type="file" name="image" class="file-upload-default">
					<div class="input-group col-sm-6">
						<input type="text" class="form-control file-upload-info" name="image" disabled placeholder="Upload Image">
						<span class="input-group-append">
							<button class="file-upload-browse btn btn-primary" type="button">Upload file</button>
						</span>
					</div>
				</div>


				<button type="submit" class="btn btn-primary mr-2">Save</button>

			</form>
		</div>
	</div>
</div>

@endsection;
