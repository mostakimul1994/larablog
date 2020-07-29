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
				<div class="form-group">
					<label for="category">Category Name</label>
					<select class="form-control" name="category_id" id="category">
						<option value="" >Selected Category</option>
						@foreach($categories as $category)
						<option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
						
						@endforeach
					</select>

					@error('category_id')
						<div class="alert alert-warning">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="author">Author Name</label>
					<select class="form-control" name="author_id" id="author">
						<option value="" >Selected Author</option>
						@foreach($authors as $author)
						<option  @if(old('author_id') == $author->id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
						
						@endforeach
					</select>
					@error('author_id')
						<div class="alert alert-warning">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="exampleInputName1">Title</label>
					<input type="text" value="{{old('title')}}" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
				@error('title')
						<div class="alert alert-warning">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="exampleTextarea1">Content</label>
					<textarea class="form-control" name="content" id="exampleTextarea1" rows="6">{{old('content')}}</textarea>
					@error('content')
						<div class="alert alert-warning">{{ $message }}</div>
					@enderror
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="#">Status</label>
							<div class="form-check">
								<label class="form-check-label">
									<input @if(old('status') == 'published') checked @endif type="radio" class="form-check-input" name="status" id="published" value="published">
									Published
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input @if(old('status') == 'unpublished') checked @endif type="radio" class="form-check-input" name="status" id="unpublished" value="unpublished">
									Unpublished
								</label>
							</div>
					</div>
					@error('status')
						<div class="alert alert-warning">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group">
					<label>File upload</label>
					<input type="file" name="image" class="file-upload-default">
					<div class="input-group col-sm-6">
						<input  name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
						<span class="input-group-append">
							<button class="file-upload-browse btn btn-primary" type="button">Upload file</button>
						</span>
					</div>
					@error('image')
						<div class="alert alert-warning">image must be JPG,PNG format </div>
					@enderror
				</div>


				<button type="submit" class="btn btn-primary mr-2">Save</button>

			</form>
		</div>
	</div>
</div>

@endsection;
