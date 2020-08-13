@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Subcategory Create (Form)</h2>

		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				</ul>
				@endforeach
			</div>
		@endif

		<form method="post" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
					<label>Category Id</label>
					<input type="text" name="category">
			</div>
			<input type="submit" value="+ Add" class="btn btn-outline-primary">

	</div>	

@endsection