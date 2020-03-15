@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text text-center text-success">Invoice</h3>
                        <h4 class="text text-center text-success">New Shop</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Shipping info</tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>Mobile Number</td>
                                        <td>Address</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>Mobile Number</td>
                                        <td>Address</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Billing info</tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>Mobile Number</td>
                                        <td>Address</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->mobile_number }}</td>
                                        <td>{{ $customer->address }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>Total </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Item</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
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
