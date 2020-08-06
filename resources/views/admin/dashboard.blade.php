@extends('voyager::master')

@section('page_title', 'Dashboard')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-company"></i> Dashboard
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="app">
                    <div class="panel panel-bordered">
                       {{-- Top Nav With Data --}}
                       <div class="container" style="padding-top:10px;">
                            <div class="row">
                            <div class="col-md-3">
                                <data-box count={{$orders_count}} title="New Orders" color="#2196F3" />
                            </div>
                            <div class="col-md-3">
                                <data-box count="53%" title="Bounce Rate" color="#4CAF50" />
                            </div>
                            <div class="col-md-3">
                                <data-box count={{$user_count}} title="User Registrations" color="#FFC107" />
                            </div>
                            <div class="col-md-3">
                               <data-box count={{$traffic_count}} title="Unique Visitors" color="#F44336" />
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="panel panel-bordered mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                <sale-box title="Today Total" value="{{$today}}" color="#607D8B" />
                                </div>
                                <div class="col-md-6">
                                    <sale-box title="Last 30 Days Total" value="{{$last_30_days}}" color="#4CAF50" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <sale-box title="This Week Total" value="{{$current_week}}" color="#00BCD4" />
                                </div>
                                <div class="col-md-6">
                                    <sale-box title="This Month Total" value="{{$current_month}}" color="#F44336" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <sale-box title="Last Week Total" value="{{$last_week_total}}" color="#FFEB3B" />
                                </div>
                                <div class="col-md-6">
                                    <sale-box title="Last Month Total" value="{{$last_month_total}}" color="#9C27B0" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-bordered">
                        <div class="panel-header">
                            <div class="panel-title">
                                Last Order
                            </div>
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Username</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Created At </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($last_orders as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->OrderAccountDetail['name']}}</td>
                                        <td>{{$item->total}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script src="/js/app.js"></script>
@stop