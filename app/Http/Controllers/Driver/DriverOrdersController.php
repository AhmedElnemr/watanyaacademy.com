<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Brand;
use App\Models\Department;
use App\Models\Tag;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DriverOrdersController extends Controller
{
    use Upload_Files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $orders = driver()->user()->orders()->latest()->get();

            return DataTables::of($orders)

                ->editColumn('status', function ($order) {
                    if ($order->status=='new')
                        return '<span class="badge badge-success">'.trans('store.New').'</span>';
                    else  if ($order->status=='canceled')
                        return '<span class="badge badge-danger">'.trans('store.canceled').'</span>';
                    else  if ($order->status=='order_ready')
                        return '<span class="badge badge-danger">'.trans('store.order_ready').'</span>';
                    else  if ($order->status=='under_word')
                        return '<span class="badge badge-danger">'.trans('store.under_word').'</span>';
                    else  if ($order->status=='finished')
                        return '<span class="badge badge-danger">'.trans('store.finished').'</span>';
                    else  if ($order->status=='order_back_from_user')
                        return '<span class="badge badge-danger">'.trans('store.order_back_from_user').'</span>';
                    else  if ($order->status=='order_back_finished')
                        return '<span class="badge badge-danger">'.trans('store.order_back_finished').'</span>';

                })
                ->editColumn('created_at', function ($order) {
                    return date('Y/m/d H:i',strtotime($order->created_at));
                })
                ->addColumn('actions', function ($order) {
                    $return= "<a href='" . route('driverOrders.show', $order->id) . "' class='btn btn-sm btn-outline-primary'> <i class='fa fa-eye'></i></a> ";
                    if ($order->status=='under_word'){
                        $return.= "<button class='btn btn-sm btn-outline-danger MakeOrderFinished' status='finished' id='" . $order->id . "'>".__('admin.MakeOrderFinished')." </button>";
                    }
                    return $return;
                })->rawColumns(['status','created_at','actions'])->make(true);
        }

        return view('driver.orders.index');
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


    }//end

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('driver.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }//end fun

    public function makeOrderFinished(Request $request ,$id)
    {
        $status = $request->status ;
        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->end_shipping_date = date('Y-m-d');
        $order->end_shipping_time = date('H:i');
        $order->save();
        return response()->json(1,200);
    }
}//end class
