@extends('frontendtemplate')

@section('content')

	<div class="col-lg-9">
		<h2>Item Detail Page</h2>
<div class="row">
			
			<div class="col-md-6 col-6">

				<img src="{{asset($item->photo)}}" class="img img-fluid">
				
			</div>

			<div class="col-md-6 col-6 container-fluid">

				
					<label>Product Name :</label>
					<span>{{$item->name}}</span><br>
					<label>Product Code :</label>
					<span>{{$item->codeno}}</span><br>
					<label>Product Price :</label>
					<span>{{$item->price}}</span><br>
					<label>Description :</label>
					<span>{{$item->description}}</span><br>
					<label>Brand :</label>
					<span>{{$item->brand->name}}</span><br>
					<label>Subcategory :</label>
					<span>{{$item->subcategory->name}}</span>
				

			</div>

		</div>
	</div>



@endsection