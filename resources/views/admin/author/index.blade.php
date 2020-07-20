@extends('layouts.admin.master')
@section('title','List of Posts')
@section('content')

<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">List of Authors</h4>
						<p class="card-description">
							Author <code></code>
						</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Serial No</th>
										<th>Name</th>
										<th>Email</th>
										<th>about</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($authors as $author)
									<tr>
										<td>{{ $author->id }}</td>
										<td>{{ $author->name }}</td>
										<td>{{ $author->email }}</td>
										<td>{{ $author->about }}</td>
										<td>
											<a href="{{ route('author.edit',$author->id) }}" class="btn btn-primary btn-sm">Edit</a>
											<form action="{{ route('author.destroy',$author->id) }}" class="d-inline-block" method="post">
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