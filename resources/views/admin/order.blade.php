@extends('voyager::master')

@section('page_title', 'Order System')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-list"></i> Order System
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->OrderAccountDetail['name']}}</td>
                                        <td>{{$item->total}}</td>
                                        <td>
                                            @if($item->status == 'Progress')
                                            <strong style="color:#F44336;">{{$item->status}}</strong> 
                                            @elseif($item->status == 'Hold')
                                            <strong style="color:#03A9F4;">{{$item->status}}</strong> 
                                            @elseif($item->status == 'Hold')
                                            <strong style="color:#009688;">{{$item->status}}</strong> 
                                            @else
                                            <strong style="color:#4CAF50;">{{$item->status}}</strong> 
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="{{'order_show/'.$item->id}}" type="submit" class="btn btn-success">View</a>
                                        </td>
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
@stop