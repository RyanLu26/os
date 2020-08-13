@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Item Edit (Form/Old Value)</h2>

		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				</ul>
				@endforeach
			</div>
		@endif

		<form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Code No</label>
				<input type="text" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control"
				value="{{$item->name}}">
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo">
				<img src="{{asset($item->photo)}}" class="img img-fluid w-25">
				<input type="hidden" name="oldphoto" value="{{$item->photo}}">
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="number" name="price" class="form-control" value="{{$item->price}}">
			</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" name="discount" class="form-control" value="{{$item->discount}}">
			</div>
			<div class="form-group">
				<label>Brand</label>
				<select name="brand" class="form-control">
					<optgroup label="Choose Brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}"
							@if($brand->id == $item->brand_id)
								{{'selected'}}
							@endif>{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<label>Subcategory</label>
				<select name="subcategory" class="form-control">
					<optgroup label="Choose Subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}"

							@if($subcategory->id == $item->subcategory_id)
								{{'selected'}}
							@endif

							>{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control">{{$item->description}}</textarea>
			</div>
			<input type="submit" value="Update" class="btn btn-outline-primary">
		</form>
		
	</div>




@endsection