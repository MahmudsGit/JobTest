<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();
        return view('custom-dashboard/QueryOne/index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'form_date'=>'required',
            'to_date'=>'required',
        ]);

        $formDate = $request->form_date;
        $toDate = $request->to_date;

//        $finds = Order::where('delivery_date','>=',$formDate)->where('delivery_date','<=',$toDate)->where('delivery_status','=',1)->get();

        $finds = DB::table('orders')
                ->join('sellers','orders.seller_id','=','sellers.id')
                ->where('orders.delivery_date','>=',$formDate)
                ->where('orders.delivery_date','<=',$toDate)
                ->select('orders.selling_amount','sellers.seller_name')
                ->where('orders.delivery_status','=',1)
                ->get();

                return view('custom-dashboard/QueryOne/search',compact('finds'));

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
