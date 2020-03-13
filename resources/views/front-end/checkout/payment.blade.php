@extends('front-end.master')
@section('title')
    Product Details
@endsection
@section('category-content')
<br>


<div class="container">
				
			
		
    <div class="row">
        <div class="col-md-12">
            <h2 class="text text-center text-success">
                Dear {{ Session::get('customerName') }}. You have to give us payment method.
            </h2>
        </div>
    </div>

	<!--content-->
		<div class="row">
			<div class="col-md-8 col-md-offset-2 well">
				<form action="">
                @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Cash on Delivery</th>
                            <td>
                                <input type="radio" name="payment_type" value="Cash"> Cash on Delivery
                            </td>
                        </tr>
                        <tr>
                            <th>Paypal</th>
                            <td>
                                <input type="radio" name="payment_type" value="Paypal"> Paypal
                            </td>
                        </tr>
                        <tr>
                            <th>BKash</th>
                            <td>
                                <input type="radio" name="payment_type" value="BKash"> BKash
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="submit" name="btn" value="Confirm Order" class="btn btn-success">
                            </td>
                        </tr>
                    </table>
                </form>
			</div>
		</div>

</div>
    
@endsection