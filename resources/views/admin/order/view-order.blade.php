@extends('admin.master')

@section('content')
<h3 class="text-center text-success">Order Details info for this order</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tr>
            <th>Order No</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Total Order</th>
            <td>{{ $order->	order_total }}</td>
        </tr>
        <tr>
            <th>Order Status</th>
            <td>{{ $order->order_status }}</td>
        </tr>
        <tr>
            <th>Order Date</th>
            <td>{{ $order->created_at }}</td>
        </tr>
	</table>
</div>
<h3 class="text-center text-success">Customer info for this order</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tr>
            <th>Customer Name</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $customer->mobile_number }}</td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $customer->address }}</td>
        </tr>
	</table>
</div>
<h3 class="text-center text-success">Shipping info for this order</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tr>
            <th>Shipping Name</th>
            <td>{{ $shipping->full_name }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $shipping->phone_number }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $shipping->address }}</td>
        </tr>
	</table>
</div>
<h3 class="text-center text-success">Payment info for this order</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tr>
            <th>Payment Type</th>
            <td>{{ $payment->payment_type }}</td>
        </tr>
        <tr>
            <th>Payment Status</th>
            <td>{{ $payment->payment_status }}</td>
        </tr>
        
	</table>
</div>




<h3 class="text-center text-success">Product info for this order</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr class="table table-info">
				<th>SL No</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
			</tr>
            @php ($i = 1)
			@foreach($orderDetails as $orderDetail)
			<tr>
				<th scope="row">{{ $i++ }}</th>
				<td>{{ $orderDetail->product_id }}</td>
				<td>{{ $orderDetail->product_name }}</td>
				<td>Tk. {{ $orderDetail->product_price }}</td>
				<td>{{ $orderDetail->product_quantity }}</td>
				<td>Tk. {{ $orderDetail->product_price*$orderDetail->product_quantity }}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection
