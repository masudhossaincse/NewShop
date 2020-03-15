@extends('admin.master')

@section('content')
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<div class="container">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr class="table table-info">
				<th>SL NO</th>
				<th>Customer Name</th>
				<th>Order Total</th>
				<th>Order Date</th>
				<th>Order status</th>
				<th>Payment Type</th>
				<th>Payment Status</th>
				<th>Action</th>
			</tr>
            @php ($i = 1)
			@foreach($orders as $order)
			<tr>
				<th scope="row">{{ $i++ }}</th>
				<td>{{ $order->name }}</td>
				<td>{{ $order->order_total }}</td>
				<td>{{ $order->created_at }}</td>
				<td>{{ $order->order_status }}</td>
				<td>{{ $order->payment_type }}</td>
				<td>{{ $order->payment_status }}</td>
				
				<td>
                    <a href="{{ route('view-order-detail', ['id'=>$order->id]) }}" class="btn btn-sm btn-success" title="Details order">
						Details
					</a>
                    <a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-sm btn-primary" title="Invoice order">
						Invoice
					</a>
                    <a href="{{ url('/category/edit/', ['id'=>$order->id]) }}" class="btn btn-sm btn-info" title="Download order">
						Download
					</a>
					<a href="{{ url('/category/edit/', ['id'=>$order->id]) }}" class="btn btn-sm btn-secondary" title="Edit order">
						<i class="fas fa-edit"></i>
					</a>
					<a href="{{ url('/category/delete/', ['id'=>$order->id]) }}" onclick="return confirm('Are yor sure to delete');" title="Delete order" class="btn btn-sm btn-danger">
						<i class="fas fa-trash"></i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection
