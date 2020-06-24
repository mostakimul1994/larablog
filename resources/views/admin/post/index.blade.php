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
										<th>Category</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>First Posts</td>
										<td>Politics</td>
										<td><label class="badge badge-danger">Pending</label></td>
										<td>
											<a class="btn btn-info btn-sm" href="{{ route ('post.show',1)}}">Details</a>
											<a class="btn btn-info btn-sm" href="{{ route ('post.edit',1)}}">Edit</a>
											<form action="{{ route('post.destroy',1) }}" class="d-inline-block" method="post">
												@csrf
												@method('delete')
												<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm?')">Delete</button>
											</form>
											


										</td>

										
									</tr>
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