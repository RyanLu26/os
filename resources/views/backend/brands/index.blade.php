@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Brand List Table</h2>

		<div>
			<a href="{{route('brands.create')}}" class="btn btn-info"> Add Brands</a>
		</div>

		<div class="table-responsive">
			
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>No</th>
						<th>Brand Name</th>
						<th>Photo</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Brand One</td>
						<td>
							<img src="">
						</td>
						<td>
							<a href="{{route('brands.show',1)}}" class="btn btn-warning">Detail</a>
							<a href="{{route('brands.edit',1)}}" class="btn btn-success">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				
				</tbody>
			</table>

			</table>

		</div>

	</div>

@endsection