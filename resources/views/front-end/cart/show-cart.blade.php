@extends('front-end.master')
@section('title')
    Product Details
@endsection
@section('category-content')

<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Add to Cart</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content"><br>
			<!--single-->
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3 class="text-center text-success">My Shopping Cart</h3>
					<hr>
					<table class="table table-bordered">
						 <thead class="thead-light">
							<tr class="bg-primary">
								<td>SL</td>
								<td>Name</td>
								<td>Image</td>
								<td>Price Tk.</td>
								<td>Quantity</td>
								<td>Total Price Tk.</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@php($i = 1)
							@php ($sum = 0)
							@foreach($cartItems as $cartItem)
								<tr>
									<td>{{ $i++ }}</td>
									
									<td>{{ $cartItem->name }}</td>
									<td>
										<img src="{{ asset($cartItem->options->image) }}" alt="" height="80" width="100"/>
									</td>
									<td>{{ $cartItem->price }}</td>
									<td>
										<form action="{{ route('update-cart') }}" method="POST">
										@csrf
											<input type="number" name="qty" value="{{ $cartItem->qty }}" min="1">
											<input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
											<input type="submit" name="btn" value="Update">
										</form>
									</td>
									<td>{{ $total = $cartItem->qty*$cartItem->price }}</td>
									
									<td>
										<a href="{{ route('delete-cart-item', ['rowId'=>$cartItem->rowId]) }}" class="btn btn-danger btn-sm">
											<i class="fa fa-times" aria-hidden="true"></i>
										</a>
									</td>
								</tr>
								<?php $sum = $sum+$total; ?>
							@endforeach
						</tbody>
					</table>
					<hr>
					<table class="table table-bordered">
						<tr>
							<th>Total Item Price (Tk. )</th>
							<td>{{ $sum }}</td>
						</tr>
						<tr>
							<th>Total Vat (Tk. )</th>
							<td>{{ $vat = 0 }}</td>
						</tr>
						<tr>
							<th>Grand Price (Tk. )</th>
							<td>{{ $orderTotal = $sum+$vat }}</td>
							<?php
								Session::put('orderTotal', $orderTotal);
							?>
						</tr>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					@if(Session::get('customerId') && Session::get('shippingId'))
						<a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">Checkout</a>
					@elseif(Session::get('customerId'))
					<a href="{{ route('checkout-shipping') }}" class="btn btn-success pull-right">Checkout</a>
					@else
					<a href="{{ route('checkout') }}" class="btn btn-success pull-right">Checkout</a>
					@endif
					<a href="" class="btn btn-success">Continue Shopping</a>
				</div>
			</div>
			<!--single-->
			<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Best Sellers</h3>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/p28.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/p27.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/p30.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/p29.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben2">
										<p>OUT OF STOCK</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/s2.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/s1.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/s4.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="URL::asset('/') }}front-end/images/s3.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
    
@endsection