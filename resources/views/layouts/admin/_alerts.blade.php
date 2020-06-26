@if(session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show">
	<strong >{{ session('message') }}</strong>
	<button type="button" class="close" data-dimiss="alert" aria-label="close">
		<span aria-hidden="true">&times</span>

	</div>

	@endif