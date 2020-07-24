@extends('layouts.admin.master')
@section('title','Post Details')
@section('content')
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row doc-content">
					<div class="col-12 col-md-10 offset-md-1">
						<div class="card">
							<div class="card-body">
								<h3 class="mb-4 mt-4">{{ ucfirst($post->title) }}</h3>

									<p class="card-subtitle">
									@foreach($authors as $author)
									@if($author->id== $post->author_id) {{ $author->name }} @endif
										
									@endforeach,
									
								</p>
								<p class="card-subtitle">
									@foreach($categories as $category)
									@if($category->id== $post->category_id) {{ $category->name }} @endif
										
									@endforeach,<i>{{ ucfirst($post->status) }}</i>
									<br>
									{{ $post->published_at }}
									
								</p>
								<p>{{$post->content}}</p>
							
							</div>
							<div class="col-md-12">
								<button class="btn btn-info btn-sm"><a href="{{ route ('post.index')}}">Back Home</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>


@endsection;
