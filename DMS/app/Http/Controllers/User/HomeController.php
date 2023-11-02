<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\Rate;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $branches = DB::table('branches')
            ->join('rates', 'branches.id', '=', 'rates.from_location')
            ->select('branches.*', 'rates.*')
            ->groupBy('branches.branch_state')
            ->orderBy('branches.id', 'asc')
            ->get();
            return view('user.home',['branches'=>$branches]);
        }
    }

    public function calculate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_location' => 'required',
            'to_location' => 'required'
        ],[
            'from_location.required' => 'မြို့နယ်ရွေးရန်လိုအပ်သည်',
            'to_location.required' => 'မြို့နယ်ရွေးရန်လိုအပ်သည်',
        ]);

        if ($validator->fails()) {
            return redirect('/user/home')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();
 
        // Retrieve a portion of the validated input...
        $validated = $validator->safe()->only(['from_location', 'to_location']);
        $validated = $validator->safe()->except(['from_location', 'to_location']);

        $rates = Rate::all()->where('from_location', $request->input('from_location'))->where('to_location', $request->input('to_location'));
        $branches = DB::table('branches')
            ->join('rates', 'branches.id', '=', 'rates.from_location')
            ->select('branches.*', 'rates.*')
            ->groupBy('branches.branch_state')
            ->orderBy('branches.id', 'asc')
            ->get();
        return view('user.home',compact('rates','branches'));
    }

    public function track(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required|regex:/^#[0-9]{8}$/',
        ],[
            'order_number.required' => 'Order Numberဖြည့်ရန်လိုအပ်သည်',
            'order_number.regex' => 'Order Numberပုံစံအမှန်မဟုတ်ပါ',
        ]);

        if ($validator->fails()) {
            return redirect('/user/home')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated = $validator->validated();
 
        $validated = $validator->safe()->only(['order_number']);
        $validated = $validator->safe()->except(['order_number']);

        $status = Order::where('order_number','=',$request->input('order_number'))->get();
        return view('user.tracking',compact('status'));
    }
}
