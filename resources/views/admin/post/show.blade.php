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
								<h3 class="mb-4 mt-4">Title</h3>
								<p><strong>News</strong>,<i>Publiced</i><br/>
									5 Jun, 2020

								</p>
								<p>Before you start working with the template, we suggest you go through the pages that are bundled with the theme. Most of the template example pages contain quick tips on how to create or use a component which can
								be really helpful when you need to create something on the fly.</p>
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
