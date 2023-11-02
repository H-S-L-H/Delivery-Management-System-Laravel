@extends('admin.layouts.app')

@section('title', 'Orders')

@section('content')
    
<section class="order_detail">
  <div class="container-fluid pt-4 px-4">
    <div class="text-center rounded p-4" style="background-color: #07509E">
      <div class="row">
        <div class="col-md-8 col-sm mb-4">
          <h3 class="mb-0 text-start">Order Details</h3>
        </div>
        <div class="col-md-4 col-sm mb-4">
          <a href="{{ route('admin.order') }}" class="btn float-end w-25 back-btn" style="background-color: #FFCE00; color: #07509E;">Back</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered text-white align-middle mb-3">
          <tbody class="text-start">
            <tr style="border: 1px solid white">
              <th class="text-center" colspan="2">Order Number : {{ $order->order_number }}</th>
            </tr>
            <tr style="border: 1px solid white">
              <th>Sender Name</th>
              <td>{{ $order->sender_name }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Sender Phone</th>
              <td>{{ $order->sender_phone }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Pickup Address</th>
              <td>{{ $order->pickup_address }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Pickup Date</th>
              <td>{{ $order->pickup_date }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Pickup Vehicle</th>
              <td>{{ $order->pickup_vehicle }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Receiver Name</th>
              <td>{{ $order->receiver_name }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Receiver Phone</th>
              <td>{{ $order->receiver_phone }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Receiver Address</th>
              <td>{{ $order->receiver_address }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Estimate Arrival Date</th>
              <td>{{ $order->estimate_arrival_date == NULL ? "Not Confirm!" :  $order->estimate_arrival_date}}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Delivery Method</th>
              <td>{{ $order->deliver_method }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Payment Method</th>
              <td>{{ $order->payment_method }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Parcel Price</th>
              <td>{{ $order->parcel_price == NULL ? "-" :  $order->parcel_price}}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Delivery Fee</th>
              <td>{{ $order->delivery_fee == NULL ? "Not Confirm!" :  $order->delivery_fee}}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Parcel Weight</th>
              <td>{{ $order->parcel_weight == NULL ? "Not Confirm!" :  $order->parcel_weight}}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Sender Note</th>
              <td>{{ $order->sender_note == NULL ? "-" :  $order->sender_note}}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Order Status</th>
              <td>{{ $order->order_status }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection