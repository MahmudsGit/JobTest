@extends('custom-layout')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{ route('order.create') }}" type="button" class="btn btn-dark btn-xs">Add New Order <span class="fa fa-plus"></span></a>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Order<small>Table</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Seller Id</th>
                                                <th>Delevery Status</th>
                                                <th>Delevery Date</th>
                                                <th>Return Status</th>
                                                <th>Selling Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $key=>$order)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $order->seller_id }}</td>
                                                <td>{{ $order->delivery_status }}</td>
                                                <td>{{ $order->delivery_date }}</td>
                                                <td>{{ $order->return_status }}</td>
                                                <td>{{ $order->selling_amount }}</td>
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
        </div>
    </div>
@endsection
