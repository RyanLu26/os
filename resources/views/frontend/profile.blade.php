@extends('frontendtemplate')

@section('content')

	<div class="col-lg-9">
		<h2>Profile Page</h2>

		<div class="container-fluid">
		
			Name : {{Auth::user()->name}}



		</div>

	</div>

		
@endsection