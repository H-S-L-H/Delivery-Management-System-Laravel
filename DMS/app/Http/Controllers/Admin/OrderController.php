<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('admin.order',compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orderdetails',compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.order')
                        ->with('success', 'Order deleted successfully.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orderedit',compact('order'));
    }

    public function update(Request $request, $id)
    {
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
            'pickup_vehicle' => 'required',
            'receiver_name' => 'required|regex:/^[a-zA-Z ]*$/',
            'receiver_phone' => 'required|numeric|regex:/^09/|digits:11',
            'receiver_address' => 'required',
            'deliver_method' => 'required',
            'payment_method' => 'required',
        ],[
            'sender_name.required' => 'Sender name is required',
            'sender_name.regex' => 'Only alphabets and white space can be filled',
            'sender_phone.required' => 'Sender phone number is required',
            'sender_phone.numeric' => 'Only numbers can be filled',
            'sender_phone.regex' => 'Only phone numbers starting with 09 can be entered',
            'sender_phone.digits' => 'The phone number must be 11 digits',
            'pickup_address.required' => 'Pickup address is required',
            'pickup_date.required' => 'Pickup date is required',
            'pickup_vehicle.required' => 'Pickup vehicle is required',
            'receiver_name.required' => 'Receiver name is required',
            'receiver_name.regex' => 'Only alphabets and white space can be filled',
            'receiver_phone.required' => 'Receiver phone is required',
            'receiver_phone.numeric' => 'Only numbers can be filled',
            'receiver_phone.regex' => 'Only phone numbers starting with 09 can be entered',
            'receiver_phone.digits' => 'The phone number must be 11 digits',
            'receiver_address.required' => 'Receiver address is required',
            'deliver_method.required' => 'Deliver method is required',
            'payment_method.required' => 'Payment method is required',
            'parcel_price.required' => 'Parcel price is required',
            'parcel_price.numeric' => 'Only numbers can be filled',
        ]);

        
        $validator->sometimes('parcel_price', 'required|numeric', function($input) {
            return $input->payment_method == "လက်ခံသူရှင်း";
        });

        $order = Order::findOrFail($id);
 
        if ($validator->fails()) {
            return redirect('/admin/order/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $order->order_number = $request->input('order_number');
        $order->sender_name = $request->input('sender_name');
        $order->sender_phone = $request->input('sender_phone');
        $order->pickup_address = $request->input('pickup_address');
        $order->pickup_date = $request->input('pickup_date');
        $order->pickup_vehicle = $request->input('pickup_vehicle');
        $order->delivery_fee = $request->input('delivery_fee');
        $order->estimate_arrival_date = $request->input('estimate_arrival_date');
        $order->receiver_name = $request->input('receiver_name');
        $order->receiver_phone = $request->input('receiver_phone');
        $order->receiver_address = $request->input('receiver_address');
        $order->deliver_method = $request->input('deliver_method');
        $order->payment_method = $request->input('payment_method');
        $order->parcel_price = $request->input('parcel_price');
        $order->sender_note = $request->input('sender_note');
        $order->parcel_weight = $request->input('parcel_weight');
        $order->order_status = $request->input('order_status');
        $order->save();

        // Retrieve the validated input...
        $validated = $validator->validated();
 
        // Retrieve a portion of the validated input...
        $validated = $validator->safe()->only(['sender_name', 'sender_phone', 'pickup_address', 'pickup_date', 'pickup_vehicle', 'receiver_name', 'receiver_phone', 'receiver_address', 'deliver_method', 'payment_method', 'parcel_price']);
        $validated = $validator->safe()->except(['sender_name', 'sender_phone', 'pickup_address', 'pickup_date', 'pickup_vehicle', 'receiver_name', 'receiver_phone', 'receiver_address', 'deliver_method', 'payment_method', 'parcel_price']);

        return view('admin.orderdetails',compact('order'));
    }
}
