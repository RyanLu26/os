@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">
		
		<h2>Category List Table</h2>

		<div>
			<a href="{{route('categories.create')}}" class="btn btn-info"> Add Categories</a>
		</div>

		<div class="table-responsive">
			
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>No</th>
						<th>Category Name</th>
						<th>Photo</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($categories as $category)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$category->name}}</td>
						<td>
							<img src="{{asset($category->photo)}}">
						</td>
						<td>
							<a href="{{route('categories.show',1)}}" class="btn btn-warning">Detail</a>
							<a href="{{route('categories.edit',1)}}" class="btn btn-success">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			</table>

		</div>

	</div>

@endsection