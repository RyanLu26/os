@extends ('backendtemplate')

@section('content')

	<div class="container-fluid">

		<h2>Item List Table</h2>
		<a href="{{route('items.index')}}" class="btn btn-info">
			Add Item
		</a>
		
		<div class="table-responsive">

			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>No.</th>
						<th>Code No</th>
						<th>Name</th>
						<th>Price</th>
						<th>Discount</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($items as $item)
					<tr>
						<td>{{$i++}}</td>
						<td>
							{{$item->codeno}}
							<a href="{{route('items.show',$item->id)}}">
								<span class="badge badge-primary badge-pill"> Detail </span>
							</a>
							<a href="#" class="box"  data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
								<span class="badge badge-primary badge-pill"> Model </span>
							</a>
						</td>
						<td>{{$item->name}}</td>
						<td>{{$item->price}} MMK</td>
						<td>{{$item->discount}} MMK</td>
						<td>
							<a href="{{route('items.show',$item->id)}}" class="btn btn-warning">Detail</a>
							<a href="{{route('items.edit',$item->id)}}" class="btn btn-success">Edit</a>

							<form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
							</form>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			
		</div>
		
	</div>

	{{-- Detail-Modal --}}
	
		<div class="modal fade" id='detailModal'>

			<div class="modal-dialog modal-lg">
				
				<div class="modal-content">

					<div class="modal-header">

						<h3 class="modal-title"></h3>
						<button class="close" data-dismiss="modal"><span>&times;</span></button>
						
					</div>
					<div class="modal-body">

						<div class="container">

							<div class="row">
								<div class="col-md-6">
									<img  id="photo"src="" class="img-fluid">
								</div>
								<div class="col-md-6">
									Price : <strong id="price"></strong>
									Description :<strong id="desc"></strong>
								</div>
							</div>
							
						</div>
						
					</div>
					<div class="modal-footer">

						<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						
					</div>
					
				</div>

			</div>
			
		</div>
		
	


@endsection

@section('script')

<script type="text/javascript">
	
	$(document).ready(function(){

		$('.box').click(function(){

			// console.log('h')
			var name = $(this).data('name');
			var photo = $(this).data('photo');
			var price = $(this).data('price');
			var description = $(this).data('desc');

			console.log('j')
			$('.modal-title').text(name);
			$('#photo').attr('src',photo);
			$('#price').text(price);
			$('#desc').text(description);
			$('#detailModal').modal('show');

		})
	})

</script>

@endsection