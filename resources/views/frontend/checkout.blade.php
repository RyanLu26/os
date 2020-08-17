@extends('frontendtemplate')

@section('content')

	<div class="col-lg-9">
		<div id="checkout_body">
			<div class="container my-5 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-8">
						<h3 class="py-5">Check Out</h3>
						<div class="table-responsive" style="color: #15d4ed;">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Item Name</th>
										<th>Photo</th>
										<th>Price</th>
										<th>Qty</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>

					<div class="offset-md-2 col-md-8">
						<div class="form-group">
							<textarea class="form-control notes" placeholder="Notes"></textarea>
							<input type="hidden" name="" class="total">
						</div>

					</div>

					<div class="offset-md-2 col-md-3 text-left">
						<a href="{{route('homepage')}}" class="btn btn-success">Continue Shopping</a>
					</div>
					
					<div class="offset-md-2 col-md-3 text-right">
						@role('customer')
						<a class="btn btn-info buy_now"> Check Out </a>
						@else
						<a href="{{route('login')}}" class="btn btn-info">Log-In to Check Out</a>
						@endrole
					</div>

				</div>
			</div>
</div>
	</div>



@endsection

@section('script')

	<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
@endsection