@extends('voyager::master')

@section('page_title', 'Order System')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-list"></i> Order Show
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="pa-3" style="padding:5px 15px;">
                        <h3>Order Details</h3>
                    </div>
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Id</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->id}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Username</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['name']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Total</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->total}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Status</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        @if($order->status == 'Progress')
                        <strong style="color:#F44336;">{{$order->status}}</strong> 
                        @elseif($order->status == 'Hold')
                        <strong style="color:#03A9F4;">{{$order->status}}</strong> 
                        @elseif($order->status == 'Hold')
                        <strong style="color:#009688;">{{$order->status}}</strong> 
                        @else
                        <strong style="color:#4CAF50;">{{$order->status}}</strong> 
                        @endif
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Created At</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->created_at->format('Y-m-d')}}
                    </div>
                        <hr style="margin:0;">
                    <div class="pa-3" style="padding:5px 15px;">
                        <h3>Account & Shipping Details</h3>
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['name']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Phone</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['phone']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Country</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['country']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">state</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['state']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">City</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['city']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Street Name</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['street_name']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Zip Code</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->OrderAccountDetail['zip_code']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="pa-3" style="padding:5px 15px;">
                        <h3>Shipping type</h3>
                    </div>
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Shipping type</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        {{$order->shipping['title']}}
                    </div>
                        <hr style="margin:0;">
                    <div class="pa-3" style="padding:5px 15px;">
                        <h3>Order Items</h3>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ItemID</th>
                                    <th>ItemName</th>
                                    <th>ItemImage</th>
                                    <th>Qty</th>
                                    <th>TotalPrice</th>
                                    <!-- If Have Color & Size -->
                                    <th>Extras</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($order->OrderItem as $item)
                                <tr>
                                    <td>{{$item->products['id']}}</td>
                                    <td>{{$item->products['title']}}</td>
                                    <td><img src="{{ Voyager::image( $item->products['image'] ) }}" class="img-fluid" width="100" height="100"/></td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->total_price}}</td>
                                    <td>
                                    @foreach($item->OrderItemDetails as $order_details)
                                        @if($order_details['type'] == 'color')
                                            <strong>Color:</strong>{{$order_details['value']}}
                                            <br>
                                        @endif
                                        @if($order_details['type'] == 'size')
                                            <strong>Size:</strong>{{$order_details['value']}}
                                        @endif
                                    @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                       <hr style="margin:0;">
                    <div style="padding:30px;">
                    <input type="hidden" value="{{$order->id}}" id="order_id" />
                    <button id="approve" class="btn btn-success">
                    @if($order->status == 'Progress')
                        Approve and make order in hold
                    @elseif($order->status == 'Hold')
                        Approve and make order in Processing
                    @elseif($order->status == 'Processing')
                        Approve And complete order
                    @else
                        Completed
                    @endif
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
<script>
        $('#approve').on('click', function (e) {
            $.ajax({
                type:"GET",
                url:'/admin/order_system/update/' + $('#order_id').val(),
                success:function(data) {
                    if(confirm('Update Success')) location.reload()
                }
            })
        });
</script>
@stop