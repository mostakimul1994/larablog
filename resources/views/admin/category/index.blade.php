@extends('layouts.admin.master')
@section('title','List of Posts')
@section('content')

<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">List of Category</h4>
						<p class="card-description">
							Categories <code></code>
						</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Serial No</th>
										<th>Name</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($categories as $category)
									<tr>
										<td>{{ $category->id }}</td>
										<td>{{ $category->name }}</td>
										<td>{{ $category->description }}</td>
										<td>
											<a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary btn-sm">Edit</a>
											<form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
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