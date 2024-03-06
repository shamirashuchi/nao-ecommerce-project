@extends('admin.master')
@section('title', 'Order Detail')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Detail</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Order Detail Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Order Id</th>
                            <td>{{$order->id}}</td>
                        </tr>
                        <tr>
                            <th>Customer Name</th>
                            <td>{{$order->customer->name}}</td>
                        </tr>
                        <tr>
                            <th>Customer mobile</th>
                            <td>{{$order->customer->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Customer Email</th>
                            <td>{{$order->customer->email}}</td>
                        </tr>
                        <tr>
                            <th>Delivery Address</th>
                            <td>{{$order->delivery_address}}</td>
                        </tr>
                        <tr>
                            <th>Product Info</th>
                           <td>
                               <table class="table table-bordered table-hover">
                                   <tr>
                                       <th>Sl</th>
                                       <th>Product Info</th>
                                       <th>Unit Price</th>
                                       <th>Qty</th>
                                       <th>Total</th>
                                   </tr>

                                   @foreach($order->orderDetails as $orderDetail)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td>{!!'<b>Name:</b>'.$orderDetail->product_name.'<br/> <b>Code:</b>'.$orderDetail->product_code!!}</td>
                                       <td>{{$orderDetail->product_price}}</td>
                                       <td>{{$orderDetail->product_qty}}</td>
                                       <td>{{$orderDetail->product_qty * $orderDetail->product_price}}</td>


                                   </tr>
                                   @endforeach
                               </table>
                           </td>
                        </tr>
                        <tr>
                            <th>tax_total</th>
                            <td>{{$order->tax_total}}</td>
                        </tr>
                        <tr>
                            <th>shipping_total</th>
                            <td>{{$order->shipping_total}}</td>
                        </tr>
                        <tr>
                            <th>order_total</th>
                            <td>{{$order->order_total}}</td>
                        </tr>
                        <tr>
                            <th>Order Status</th>
                            <td>{{$order->order_status}}</td>
                        </tr>

                        <tr>
                            <th>payment_status</th>
                            <td>{{$order->payment_status}}</td>
                        </tr>
                        <tr>
                            <th>delivery_date</th>
                            <td>{{$order->delivery_date}}</td>
                        </tr>
                        <tr>
                            <th>payment_method</th>
                            <td>{{$order->payment_method}}</td>
                        </tr>
                        <tr>
                            <th>payment_date</th>
                            <td>{{$order->payment_date}}</td>
                        </tr>
                        <tr>
                            <th>payment_timestamp</th>
                            <td>{{$order->payment_timestamp}}</td>
                        </tr>
                        <tr>
                            <th>transaction_id</th>
                            <td>{{$order->transaction_id}}</td>
                        </tr>
                        <tr>
                            <th>currency</th>
                            <td>{{$order->currency}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
