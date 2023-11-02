<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;

class PickupFormController extends Controller
{
    public function index()
    {
        return view('user.pickupform');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'sender_name' => 'required|regex:/^[a-zA-Z ]*$/',
            'sender_phone' => 'required|numeric|regex:/^09/|digits:11',
            'pickup_address' => 'required',
            'pickup_date' => 'required',
            'pickup_vehicle' => 'required',
            'receiver_name' => 'required|regex:/^[a-zA-Z ]*$/',
            'receiver_phone' => 'required|numeric|regex:/^09/|digits:11',
            'receiver_address' => 'required',
            'deliver_method' => 'required',
            'payment_method' => 'required',
        ],[
            'sender_name.required' => 'ပေးပို့သူအမည်ဖြည့်ရန်လိုအပ်ပါသည်',
            'sender_name.regex' => 'Alphabetsနဲ့ white spaceသာဖြည့်လို့ရပါသည်',
            'sender_phone.required' => 'ပေးပို့သူဖုန်းနံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'sender_phone.numeric' => 'နံပါတ်များသာဖြည့်လို့ရပါသည်',
            'sender_phone.regex' => '09ဖြင့်စသောဖုန်းနံပါတ်သာဖြည့်လို့ရပါသည်',
            'sender_phone.digits' => 'ဖုန်းနံပါတ်သည်နံပါတ်အလုံးရေ(၁၁)လုံးဖြစ်ရပါသည်',
            'pickup_address.required' => 'အော်ဒါလာကောက်ရမည့်နေရပ်လိပ်စာဖြည့်ရန်လိုအပ်ပါသည်',
            'pickup_date.required' => 'အော်ဒါလာကောက်ရမည့်နေ့ရွေးရန်လိုအပ်ပါသည်',
            'pickup_vehicle.required' => 'အော်ဒါလာကောက်ရမည့်ယာဉ်အမျိုးအစားရွေးရန်လိုအပ်ပါသည်',
            'receiver_name.required' => 'လက်ခံသူအမည်ဖြည့်ရန်လိုအပ်ပါသည်',
            'receiver_name.regex' => 'Alphabetsနဲ့ white spaceသာဖြည့်လို့ရပါသည်',
            'receiver_phone.required' => 'လက်ခံသူဖုန်းနံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'receiver_phone.numeric' => 'နံပါတ်များသာဖြည့်လို့ရပါသည်',
            'receiver_phone.regex' => '09ဖြင့်စသောဖုန်းနံပါတ်သာဖြည့်လို့ရပါသည်',
            'receiver_phone.digits' => 'ဖုန်းနံပါတ်သည်နံပါတ်အလုံးရေ(၁၁)လုံးဖြစ်ရပါသည်',
            'receiver_address.required' => 'လက်ခံသူနေရပ်လိပ်စာဖြည့်ရန်လိုအပ်ပါသည်',
            'deliver_method.required' => 'ပို့ဆောင်မည့်နည်းလမ်းရွေးရန်လိုအပ်ပါသည်',
            'payment_method.required' => 'ငွေချေမည့်ပုံစံရွေးရန်လိုအပ်ပါသည်',
            'parcel_price.required' => 'ပစ္စည်းတန်ဖိုးဖြည့်ရန်လိုအပ်ပါသည်',
            'parcel_price.numeric' => 'နံပါတ်များသာဖြည့်လို့ရပါသည်',
        ]);

        
        $validator->sometimes('parcel_price', 'required|numeric', function($input) {
            return $input->payment_method == "လက်ခံသူရှင်း";
        });
 
        if ($validator->fails()) {
            return redirect('/user/pickupform')
                        ->withErrors($validator)
                        ->withInput();
        }

        $order = new Order();

        $order->order_number = "#".mt_rand(10000000, 99999999);
        $order->sender_name = $request->input('sender_name');
        $order->sender_phone = $request->input('sender_phone');
        $order->pickup_address = $request->input('pickup_address');
        $order->pickup_date = $request->input('pickup_date');
        $order->pickup_vehicle = $request->input('pickup_vehicle');
        $order->receiver_name = $request->input('receiver_name');
        $order->receiver_phone = $request->input('receiver_phone');
        $order->receiver_address = $request->input('receiver_address');
        $order->deliver_method = $request->input('deliver_method');
        $order->payment_method = $request->input('payment_method');
        $order->parcel_price = $request->input('parcel_price');
        $order->sender_note = $request->input('sender_note');
        $order->order_status = "အော်ဒါတင်ထားဆဲ";
        $order->user_id = Auth::id();

        $order->save();

        // Retrieve the validated input...
        $validated = $validator->validated();
 
        // Retrieve a portion of the validated input...
        $validated = $validator->safe()->only(['sender_name', 'sender_phone', 'pickup_address', 'pickup_date', 'pickup_vehicle', 'receiver_name', 'receiver_phone', 'receiver_address', 'deliver_method', 'payment_method', 'parcel_price']);
        $validated = $validator->safe()->except(['sender_name', 'sender_phone', 'pickup_address', 'pickup_date', 'pickup_vehicle', 'receiver_name', 'receiver_phone', 'receiver_address', 'deliver_method', 'payment_method', 'parcel_price']);

        $orders = Order::all()->where('user_id', $order->user_id);
        return view('user.orderdetails',compact('orders'));

    }
}
