<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();
        return view('custom-dashboard/Order/index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sellers = Seller::get();
        return view('custom-dashboard/Order/create',compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'seller_id'=>'required',
            'delivery_status'=>'required',
            'delivery_date'=>'required',
            'return_status'=>'required',
            'selling_amount'=>'required'
        ]);

        $order = new Order();
        $order->seller_id = $request->seller_id;
        $order->delivery_status = $request->delivery_status;
        $order->delivery_date = $request->delivery_date;
        $order->return_status = $request->return_status;
        $order->selling_amount = $request->selling_amount;
        $order->save();

        Toastr::success('New Order Successfully Saved!','Success');
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
