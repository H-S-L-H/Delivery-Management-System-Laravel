<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderDetailsController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id','=',Auth::id())->orderBy('id', 'desc')->get();
        return view('user.orderdetails',compact('orders'));
    }
}
