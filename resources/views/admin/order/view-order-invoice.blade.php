@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text text-center text-success">Invoice</h3>
                        <h4 class="text text-center text-info">New Shop</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Shipping info</tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $shipping->full_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                        <td>{{ $shipping->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $shipping->address }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Billing info</tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $customer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                        <td>{{ $customer->mobile_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $customer->address }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Total </tr>
                                    <tr>
                                        <th>Invoice</th>
                                        <td>00000{{ $order->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Order</th>
                                        <td>Tk.{{ $order->order_total }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
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
                                    @php ($sum = 0)
                                    @foreach($orderDetails as $orderDetail)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $orderDetail->product_id }}</td>
                                        <td>{{ $orderDetail->product_name }}</td>
                                        <td>Tk. {{ $orderDetail->product_price }}</td>
                                        <td>{{ $orderDetail->product_quantity }}</td>
                                        <td>Tk. {{ $total = $orderDetail->product_price*$orderDetail->product_quantity }}</td>
                                        
                                    </tr>
                                    @php ($sum = $sum + $total)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Total</td>
                                        <td>{{ $sum }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <h4 class="text text-center">Thanks for shopping</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
