<div class="form-group">
	<label for="category">Category Name</label>
	<select class="form-control" name="category_id" id="category">
		<option value="" >Selected Category</option>
		@foreach($categories as $category)
	  <option @if(old('category_id',isset($post)?$post->category_id:null)) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>

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
		<option  @if(old('author_id',isset($post)?$post->author_id:null)) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>

		@endforeach
	</select>
	@error('author_id')
	<div class="alert alert-warning">{{ $message }}</div>
	@enderror
</div>

<div class="form-group">
	<label for="exampleInputName1">Title</label>
	<input type="text" value="{{old('title',isset($post->title)? $post->title:null)}}" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
	@error('title')
	<div class="alert alert-warning">{{ $message }}</div>
	@enderror
</div>

<div class="form-group">
	<label for="exampleTextarea1">Content</label>
	<textarea class="form-control" name="content" id="exampleTextarea1" rows="6">{{ old('content',isset($post->content)? $post->content:null) }}</textarea>
	@error('content')
	<div class="alert alert-warning">{{ $message }}</div>
	@enderror
</div>

<div class="col-md-6">
	<div class="form-group">
		<label class="#">Status</label>
		<div class="form-check">
			<label class="form-check-label">
				<input @if(old('status',isset($post)?$post->status:null) == 'published') checked @endif value="published" type="radio" class="form-check-input" name="status" id="published">
				Published
        </label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input @if(old('status',isset($post)?$post->status:null) == 'unpublished') checked @endif value="unpublished" type="radio" class="form-check-input" name="status" id="unpublished">
				Unpublished
			</label>
		</div>
	</div>
	@error('status')
	<div class="alert alert-warning">{{ $message }}</div>
	@enderror
</div>

<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
    </div>
    @error('image')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
