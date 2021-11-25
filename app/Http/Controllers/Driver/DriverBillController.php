<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Bill;

class DriverBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $bills = driver()->user()->bills()->latest()->get();

            return DataTables::of($bills)

                ->editColumn('status', function ($bill) {
                    if ($bill->status=='new')
                        return '<span class="badge badge-success">'.trans('store.New').'</span>';
                    else  if ($bill->status=='canceled')
                        return '<span class="badge badge-danger">'.trans('store.canceled').'</span>';
                    else  if ($bill->status=='order_ready')
                        return '<span class="badge badge-danger">'.trans('store.order_ready').'</span>';
                    else  if ($bill->status=='under_work')
                        return '<span class="badge badge-danger">'.trans('store.under_word').'</span>';
                    else  if ($bill->status=='finished')
                        return '<span class="badge badge-danger">'.trans('store.finished').'</span>';
                    else  if ($bill->status=='order_back_from_user')
                        return '<span class="badge badge-danger">'.trans('store.order_back_from_user').'</span>';
                    else  if ($bill->status=='order_back_finished')
                        return '<span class="badge badge-danger">'.trans('store.order_back_finished').'</span>';

                })
                ->editColumn('created_at', function ($bill) {
                    return date('Y/m/d H:i',strtotime($bill->created_at));
                })
                ->addColumn('actions', function ($bill) {
                    $return= "<a href='" . route('driverBills.show', $bill->id) . "' class='btn btn-sm btn-outline-primary'> <i class='fa fa-eye'></i></a> ";
                    if ($bill->status=='under_work'){
                        $return.= "<button class='btn btn-sm btn-outline-danger MakeBillFinished' status='finished' id='" . $bill->id . "'>".__('admin.MakeOrderFinished')." </button>";
                    }
                    return $return;
                })->rawColumns(['status','created_at','actions'])->make(true);
        }

        return view('driver.bills.index');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill = Bill::findOrFail($id);
        return view('driver.bills.show',compact('bill'));
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

    public function MakeBillFinished(Request $request ,$id)
    {
        $status = $request->status ;
        $bill = Bill::findOrFail($id);
        $bill->status = $status;
        $bill->end_shipping_date = date('Y-m-d');
        $bill->end_shipping_time = date('H:i');
        $bill->save();
        return response()->json(1,200);
    }
}
