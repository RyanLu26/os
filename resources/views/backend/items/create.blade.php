@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Item Create (Form)</h2>

		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				</ul>
				@endforeach
			</div>
		@endif

			<form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Code No</label>
					<input type="text" name="codeno" class="form-control">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="number" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>Discount</label>
					<input type="number" name="discount" class="form-control">
				</div>
				<div class="form-group">
 					<label>Brand</label>
 					<select name="brand" class="form-control">
 						<optgroup label="Choose Brand">
 							@foreach($brands as $brand)
 							<option value="{{$brand->id}}">{{$brand->name}}</option>
 							@endforeach
 						</optgroup>
 					</select>
 				</div>
 				<div class="form-group">
 					<label>Sub Category</label>
 					<select name="subcategory" class="form-control">
 						<optgroup label="Choose Subcategory">
 							@foreach($subcategories as $subcategory)
 							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
 							@endforeach
 						</optgroup>
					</select>
 				</div>
 				<div class="form-group">
 					<label>Description</label>
 					<textarea name="description" class="form-control"></textarea>
 				</div>
 				<input type="submit" value="+ Add" class="btn btn-outline-primary">
 			</form>
 	</div>


@endsection