@extends('admin.layouts.app')

@section('title', 'Orders')

@section('content')
    
<section class="order_form">
    <div class="container-fluid pt-4 px-4">
      <div class="text-center rounded p-4" style="background-color: #07509E">
        <div class="row">
          <div class="col-md-8 col-sm mb-4">
            <h3 class="mb-0 text-start">Edit Order</h3>
          </div>
          <div class="col-md-4 col-sm mb-4">
            <a href="{{ route('admin.order') }}" class="btn float-end w-25 back-btn" style="background-color: #FFCE00; color: #07509E;">Back</a>
          </div>
        </div>
        <form method="POST" action="{{ route('admin.order.update', $order->id) }}">
        @csrf
        @method('PUT')
          <div class="row text-start">
            <div class="col-sm">
              <div class="mb-4">
                <label for="order_number" class="form-label mb-3">Order Number</label>
                <input type="text" class="form-control" readonly id="order_number" name="order_number" value="{{ $order->order_number }}">
              </div>
              <div class="mb-4">
                <label for="sender_name" class="form-label mb-3">Sender Name *</label>
                <input type="text" class="form-control" id="sender_name" name="sender_name" value="{{ $errors->any() ? old('sender_name') : $order->sender_name }}">
                @error('sender_name')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="sender_phone" class="form-label mb-3">Sender Phone *</label>
                <input type="text" class="form-control" id="sender_phone" name="sender_phone" value="{{ $errors->any() ? old('sender_phone') : $order->sender_phone }}">
                @error('sender_phone')
                <small class="error">{{ $message }}</small>
                @enderror              
              </div>
              <div class="mb-4">
                <label for="pickup_address" class="form-label mb-3">Pickup Address *</label>
                <textarea class="form-control" id="pickup_address" name="pickup_address">{{ $errors->any() ? old('pickup_address') : $order->pickup_address }}</textarea>
                @error('pickup_address')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pickup_date" class="form-label mb-3">Pickup Date *</label>
                <input type="date" class="form-control" id="pickup_date" name="pickup_date" value="{{ $errors->any() ? old('pickup_date') : $order->pickup_date }}">
                @error('pickup_date')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pickup_vehicle" class="form-label mb-3">Pickup Vehicle *</label>
                <select class="form-select" name="pickup_vehicle">
                <option value="" disabled selected>Choose Pickup Vehicle</option>
                  <option value="စက်ဘီး" {{ $errors->any() ? (old('pickup_vehicle')=='စက်ဘီး' ? 'selected' : '') : ($order->pickup_vehicle=='စက်ဘီး' ? 'selected' : '') }}>စက်ဘီး</option>
                  <option value="ကား" {{ $errors->any() ? (old('pickup_vehicle')=='ကား' ? 'selected' : '') : ($order->pickup_vehicle=='ကား' ? 'selected' : '') }}>ကား</option>
                </select>
                @error('pickup_vehicle')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="delivery_fee" class="form-label mb-3">Delivery Fee</label>
                <input type="text" class="form-control" id="delivery_fee" name="delivery_fee" value="{{ $errors->any() ? old('delivery_fee') : $order->delivery_fee }}">
              </div>
              <div class="mb-4">
                <label for="estimate_arrival_date	" class="form-label mb-3">Estimate Arrival Date</label>
                <input type="date" class="form-control" id="estimate_arrival_date" name="estimate_arrival_date" value="{{ $errors->any() ? old('estimate_arrival_date') : $order->estimate_arrival_date }}">
              </div>
            </div>

            <div class="col-sm">
            <div class="mb-4">
                <label for="receiver_name" class="form-label mb-3">Receiver Name *</label>
                <input type="text" class="form-control" id="receiver_name" name="receiver_name" value="{{ $errors->any() ? old('receiver_name') : $order->receiver_name }}">
                @error('receiver_name')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="receiver_phone" class="form-label mb-3">Receiver Phone *</label>
                <input type="text" class="form-control" id="receiver_phone" name="receiver_phone" value="{{ $errors->any() ? old('receiver_phone') : $order->receiver_phone }}">
                @error('receiver_phone')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="receiver_address" class="form-label mb-3">Receiver Address *</label>
                <textarea class="form-control" id="receiver_address" name="receiver_address">{{ $errors->any() ? old('receiver_address') : $order->receiver_address }}</textarea>
                @error('receiver_address')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-4">
                <label for="deliver_method" class="form-label mb-3">Delivery Method *</label>
                <select class="form-select" name="deliver_method">
                <option value="" disabled selected>Choose Delivery Method</option>
                  <option value="အိမ်အရောက်" {{ $errors->any() ? (old('deliver_method')=='အိမ်အရောက်' ? 'selected' : '') : ($order->deliver_method=='အိမ်အရောက်' ? 'selected' : '') }}>အိမ်အရောက်</option>
                  <option value="အောင်မင်္ဂလာအဝေးပြေးဂိတ်" {{ $errors->any() ? (old('deliver_method')=='အောင်မင်္ဂလာအဝေးပြေးဂိတ်' ? 'selected' : '') : ($order->deliver_method=='အောင်မင်္ဂလာအဝေးပြေးဂိတ်' ? 'selected' : '') }}>အောင်မင်္ဂလာအဝေးပြေးဂိတ်</option>
                  <option value="ဒဂုံဧရာအဝေးပြေးဂိတ်" {{ $errors->any() ? (old('deliver_method')=='ဒဂုံဧရာအဝေးပြေးဂိတ်' ? 'selected' : '') : ($order->deliver_method=='ဒဂုံဧရာအဝေးပြေးဂိတ်' ? 'selected' : '') }}>ဒဂုံဧရာအဝေးပြေးဂိတ်</option>
                </select>
                @error('deliver_method')
                <small class="error">{{ $message }}</small>
                @enderror
              </div>
              <div class="row mb-4">
                <div class="col-md-7 col-sm-12">
                  <label for="payment_method" class="form-label mb-3">Payment Method *</label>
                  <select class="form-select" id="payment_method" onchange="checkOption(this)" name="payment_method">
                    <option value="" disabled selected>Choose Payment Method</option>
                    <option value="လက်ခံသူရှင်း" {{ $errors->any() ? (old('payment_method')=='လက်ခံသူရှင်း' ? 'selected' : '') : ($order->payment_method=='လက်ခံသူရှင်း' ? 'selected' : '') }}>လက်ခံသူရှင်း</option>
                    <option value="ပို့သူရှင်း" {{ $errors->any() ? (old('payment_method')=='ပို့သူရှင်း' ? 'selected' : '') : ($order->payment_method=='ပို့သူရှင်း' ? 'selected' : '') }}>ပို့သူရှင်း</option>
                  </select>
                  @error('payment_method')
                  <small class="error">{{ $message }}</small>
                  @enderror
                </div>
                <div class="col-md col-sm-12 parcel-price-col">
                  <label for="parcel_price" class="form-label mb-3">Parcel Price</label>
                  <input type="text" class="form-control parcel-price" id="parcel_price" name="parcel_price" value="{{ $errors->any() ? old('parcel_price') : $order->parcel_price }}">
                  @error('parcel_price')
                  <small class="error">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="mb-4">
                <label for="sender_note" class="form-label mb-3">Sender Note</label>
                <input type="text" class="form-control" id="sender_note" name="sender_note" value="{{ $errors->any() ? old('sender_note') : $order->sender_note }}">
              </div>
              <div class="mb-4">
                <label for="parcel_weight" class="form-label mb-3">Parcel Weight</label>
                <input type="text" class="form-control" id="parcel_weight" name="parcel_weight" value="{{ $errors->any() ? old('parcel_weight') : $order->parcel_weight }}">
              </div>
              <div class="mb-4">
                <label for="order_status" class="form-label mb-3">Order Status</label>
                <select class="form-select" name="order_status">
                <option value="" disabled selected>Choose Order Status</option>
                  <option value="အော်ဒါတင်ထားဆဲ" {{ $errors->any() ? (old('order_status')=='အော်ဒါတင်ထားဆဲ' ? 'selected' : '') : ($order->order_status=='အော်ဒါတင်ထားဆဲ' ? 'selected' : '') }}>အော်ဒါတင်ထားဆဲ</option>
                  <option value="ပစ္စည်းလာယူနေဆဲ" {{ $errors->any() ? (old('order_status')=='ပစ္စည်းလာယူနေဆဲ' ? 'selected' : '') : ($order->order_status=='ပစ္စည်းလာယူနေဆဲ' ? 'selected' : '') }}>ပစ္စည်းလာယူနေဆဲ</option>
                  <option value="ပစ္စည်းယူဆောင်ပြီး" {{ $errors->any() ? (old('order_status')=='ပစ္စည်းယူဆောင်ပြီး' ? 'selected' : '') : ($order->order_status=='ပစ္စည်းယူဆောင်ပြီး' ? 'selected' : '') }}>ပစ္စည်းယူဆောင်ပြီး</option>
                  <option value="ဂိုထောင်ရောက်ရှိ" {{ $errors->any() ? (old('order_status')=='ဂိုထောင်ရောက်ရှိ' ? 'selected' : '') : ($order->order_status=='ဂိုထောင်ရောက်ရှိ' ? 'selected' : '') }}>ဂိုထောင်ရောက်ရှိ</option>
                  <option value="ပို့ဆောင်နေပါပြီ" {{ $errors->any() ? (old('order_status')=='ပို့ဆောင်နေပါပြီ' ? 'selected' : '') : ($order->order_status=='ပို့ဆောင်နေပါပြီ' ? 'selected' : '') }}>ပို့ဆောင်နေပါပြီ</option>
                  <option value="ပို့ဆောင်ပြီးပါပြီ" {{ $errors->any() ? (old('order_status')=='ပို့ဆောင်ပြီးပါပြီ' ? 'selected' : '') : ($order->order_status=='ပို့ဆောင်ပြီးပါပြီ' ? 'selected' : '') }}>ပို့ဆောင်ပြီးပါပြီ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 col-md-4 col-sm-12 mx-auto mt-3 mb-4">
            <button class="btn pickup-btn" type="submit" name="add">Update</button>
          </div>
        </form>
      </div>
    </div>
    
  </section>

  <script>
    function checkOption(obj) {
      var input = document.getElementById("parcel_price");
      input.disabled = obj.value == "ပို့သူရှင်း";
    }
  </script>

@endsection