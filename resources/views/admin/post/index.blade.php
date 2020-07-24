@extends('layouts.admin.master')
@section('title','List of Posts')
@section('content')

<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">List of Posts</h4>
						<p class="card-description">
							Add class <code></code>
						</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Serial No</th>
										<th>Title</th>
										<th>Category Name</th>
										<th>Author Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									@foreach($posts as $post)
									<tr>
										<td>{{ $serial++ }}</td>
										<td>{{ ucfirst($post->title) }}</td>
										<td>@foreach($categories as $category)
											@if($category->id== $post->category_id) {{ ucfirst($category->name) }} @endif

										@endforeach</td>

										<td>@foreach($authors as $author)
											@if($author->id== $post->author_id) {{ ucfirst($author->name) }} @endif

										@endforeach</td>
										<td>{{ ucfirst($post->status) }}</td>
										<td>
											<a class="btn btn-info btn-sm" href="{{ route ('post.show',$post->id)}}">Details</a>
											<a class="btn btn-info btn-sm" href="{{ route ('post.edit',$post->id)}}">Edit</a>
											<form action="{{ route('post.destroy',$post->id) }}" class="d-inline-block" method="post">
												@csrf
												@method('delete')
												<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm?')">Delete</button>
											</form>
											


										</td>

										
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection;