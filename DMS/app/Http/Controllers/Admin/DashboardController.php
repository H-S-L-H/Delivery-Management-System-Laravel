<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Branch;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::all();
        $user = User::where('role_id', 1)->get();
        $admin = User::where('role_id', 2)->get();
        $branch = Branch::all();

        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereBetween('created_at', [Carbon::now()->subMonth(5), Carbon::now()])
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $label1 = $users->keys();
        $data1 = $users->values();

        $orders = Order::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereBetween('created_at', [Carbon::now()->subMonth(5), Carbon::now()])
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');

        $label2 = $orders->keys();
        $data2 = $orders->values();

        return view('admin.dashboard', compact('order', 'user', 'admin', 'branch', 'label1', 'data1', 'label2', 'data2'));
    }
}
