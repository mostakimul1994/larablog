@extends('layouts.admin.master')
@section('title','List of Posts')
@section('content')

<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">List of User</h4>
						<p class="card-description">
							Add class <code></code>
						</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Serial No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('user.destroy',$user->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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