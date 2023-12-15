<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Requests\ChangeOrderStatusRequest;

class StatusOrderController extends Controller
{


    public function store(Status $status, ChangeOrderStatusRequest $request)
    {
        $order = Order::findOrFail($request['order_id']);
        $order->update(['status_id' => $status->id]);
        return response(['success'=> true, 'message' => 'status changed']);
    }
}
