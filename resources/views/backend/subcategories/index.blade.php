@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Subcategory List Table</h2>

		<div>
			<a href="{{route('subcategories.create')}}" class="btn btn-info"> Add Subcategories</a>
		</div>

		<div class="table-responsive">
			
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>No</th>
						<th>Subcategory Name</th>
						<th>Category ID</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Subcategory One</td>
						<td>112233</td>
						<td>
							<a href="{{route('categories.show',1)}}" class="btn btn-warning">Detail</a>
							<a href="{{route('categories.edit',1)}}" class="btn btn-success">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				
				</tbody>
			</table>

			</table>

		</div>

	</div>

@endsection