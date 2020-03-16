<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table 
            {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                td, th {
                border: 1px solid #2727BB;
                text-align: left;
                
            }
        
    </style>
</head>
<body style="background: #D8D4D3;">
    <div style="width: 100%; height: 150px; background: #4E47E7;">
        <div style="float: left; color: white; margin-left: 20px; ">
            <h1>Invoice</h1>
        </div>
        <div style="float: right; color: white; margin-right: 20px;">
            <h1>New Shop</h1>
            <p>Gulshan-1</p>
            <p>Dhaka, Bangladesh</p>
        </div>
    </div>
    <div style="width: 100%; height: 150px;">
        <div style="float: left; margin-left: 20px; width: 300px;">
        <table>
            <tbody>
                <tr>
                    <td colspan="2">Shipping Info</td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{ $shipping->full_name }}</td>
                </tr>
                <tr>
                    <td><strong>Phone Number</strong></td>
                    <td>{{ $shipping->phone_number }}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $shipping->address }}</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div style="margin-left: 400px;  width: 300px;">
            <table>
                <tbody>
                    <tr>
                        <td colspan="2">Billing Info</td>
                    </tr>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone Number</strong></td>
                        <td>{{ $customer->mobile_number }}</td>
                    </tr>
                    <tr>
                        <td><strong>Address</strong></td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top: 40px;">
            <table>
                <tr>
                    <th><strong>Sl No</strong></th>
                    <th><strong>Product Id</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Product Price</strong></th>
                    <th><strong>Product Quantity</strong></th>
                    <th><strong>Total Price</strong></th>
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
            </table>
        </div>
    </div>
</body>
</html>