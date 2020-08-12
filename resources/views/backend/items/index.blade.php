@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Item List Table</h2>
		<a href="{{route('items.create')}}" class="btn btn-info">
			Add Item
		</a>
		
		<div class="table-responsive">

			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Price</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>
							001
							<a href="{{route('items.show',1)}}">
								<span class="badge badge-primary badge-pill"> Detail </span>
							</a>
						</td>
						<td>Item One</td>
						<td>40000 MMK</td>
						<td>
							<a href="{{route('items.show',1)}}" class="btn btn-warning">Detail</a>
							<a href="{{route('items.edit',1)}}" class="btn btn-success">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				
				</tbody>
			</table>

			
		</div>
		
	</div>


@endsection