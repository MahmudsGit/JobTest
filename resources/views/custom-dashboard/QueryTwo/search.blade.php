@extends('custom-layout')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="x_panel" style="">
                <div class="x_title">
                    <h2>Task 3 <small> Query 2</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('two.index') }}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left">Back</i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="container">
                        <div class="row">

                            <form method="post" action="{{ route('two.store') }}" >
                                @csrf

                                <div class='col-sm-12'>
                                    <div class="form-group">
                                        <div class='input-group date' id='myDatepicker3'>
                                            <input type='submit' value="Happy Return Vew" class="btn btn-primary form-control" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Order Table<small>Happy Return Proability Orders Result</small></h2>
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
                                                    <td>
                                                        {{ $order->delivery_status ==1 ? 'Delivered' : 'Pending' }}
                                                    </td>
                                                    <td>{{ $order->delivery_date }}</td>
                                                    <td>
                                                        {{ $order->return_status ==1 ? 'Returned ' : 'Not Returned ' }}
                                                    </td>
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
