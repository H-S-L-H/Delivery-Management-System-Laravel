@extends('user.layouts.app')

@section('title', 'ပစ္စည်းပို့ရန်')

@section('content')
<section class="pickupform-page mb-5">
  <div class="container">
    <h3 class="text-center text-white mt-3 mb-5">ပစ္စည်းပို့ရန်</h3>
    <form method="POST" action="{{route('user.pickupform.store')}}">
    @csrf
      <div class="row">
        <div class="col-sm">
          <div class="mb-4">
            <label for="sender_name" class="form-label mb-3">ပေးပို့သူအမည် *</label>
            <input type="text" class="form-control" id="sender_name" name="sender_name" value="{{ old('sender_name') }}">
            @error('sender_name')
              <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="sender_phone" class="form-label mb-3">ပေးပို့သူဖုန်းနံပါတ် *</label>
            <input type="text" class="form-control" id="sender_phone" name="sender_phone" value="{{ old('sender_phone') }}">
            @error('sender_phone')
              <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="pickup_address" class="form-label mb-3">အော်ဒါလာကောက်ရမည့်နေရပ်လိပ်စာ *</label>
            <textarea class="form-control" id="pickup_address" name="pickup_address">{{ old('pickup_address') }}</textarea>
            @error('pickup_address')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="pickup_date" class="form-label mb-3">အော်ဒါလာကောက်ရမည့်နေ့ *</label>
            <input type="date" class="form-control" id="pickup_date" name="pickup_date" value="{{ old('pickup_date') }}">
            @error('pickup_date')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div>
            <label for="pickup_vehicle" class="form-label mb-3">အော်ဒါလာကောက်ရမည့်ယာဉ်အမျိုးအစား *</label>
            <div class="radio-tile-group">
              <div class="input-container">
                <input id="bike" class="radio-button" type="radio" value="စက်ဘီး" name="pickup_vehicle" {{ old('pickup_vehicle')=='စက်ဘီး' ? 'checked' : ''}}>
                <div class="radio-tile">
                  <div class="icon bike-icon">
                    <i class="fa-solid fa-bicycle"></i>
                  </div>
                  <label for="bike" class="radio-tile-label">စက်ဘီး</label>
                </div>
              </div>

              <div class="input-container">
                <input id="van" class="radio-button" type="radio" value="ကား" name="pickup_vehicle"  {{ old('pickup_vehicle')=='ကား' ? 'checked' : ''}}>
                <div class="radio-tile">
                  <div class="icon van-icon">
                    <i class="fa-solid fa-truck"></i>
                  </div>
                  <label for="van" class="radio-tile-label">ကား</label>
                </div>
              </div>
            </div>
            @error('pickup_vehicle')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="col-sm">
        <div class="mb-4">
            <label for="receiver_name" class="form-label mb-3">လက်ခံသူအမည် *</label>
            <input type="text" class="form-control" id="receiver_name" name="receiver_name" value="{{ old('receiver_name') }}">
            @error('receiver_name')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="receiver_phone" class="form-label mb-3">လက်ခံသူဖုန်းနံပါတ် *</label>
            <input type="text" class="form-control" id="receiver_phone" name="receiver_phone" value="{{ old('receiver_phone') }}">
            @error('receiver_phone')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="receiver_address" class="form-label mb-3">လက်ခံသူနေရပ်လိပ်စာ *</label>
            <textarea class="form-control" id="receiver_address" name="receiver_address">{{ old('receiver_address') }}</textarea>
            @error('receiver_address')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4">
            <label for="deliver-method" class="form-label mb-3">ပို့ဆောင်မည့်နည်းလမ်း *</label>
            <select class="form-select" name="deliver_method">
            <option value="" disabled selected>ပို့ဆောင်မည့်နည်းလမ်းရွေးချယ်ပါ</option>
              <option value="အိမ်အရောက်" {{ old('deliver_method')=='အိမ်အရောက်' ? 'selected' : ''}}>အိမ်အရောက်</option>
              <option value="အောင်မင်္ဂလာအဝေးပြေးဂိတ်" {{ old('deliver_method')=='အောင်မင်္ဂလာအဝေးပြေးဂိတ်' ? 'selected' : ''}}>အောင်မင်္ဂလာအဝေးပြေးဂိတ်</option>
              <option value="ဒဂုံဧရာအဝေးပြေးဂိတ်" {{ old('deliver_method')=='ဒဂုံဧရာအဝေးပြေးဂိတ်' ? 'selected' : ''}}>ဒဂုံဧရာအဝေးပြေးဂိတ်</option>
            </select>
            @error('deliver_method')
            <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="row mb-4">
            <div class="col">
              <label for="payment-method" class="form-label mb-3">ငွေချေမည့်ပုံစံ *</label>
              <select class="form-select" id="payment-method" onchange="checkOption(this)" name="payment_method">
                <option value="" disabled selected>ငွေချေမည့်ပုံစံရွေးချယ်ပါ</option>
                <option value="လက်ခံသူရှင်း" {{ old('payment_method')=='လက်ခံသူရှင်း' ? 'selected' : ''}}>လက်ခံသူရှင်း</option>
                <option value="ပို့သူရှင်း" {{ old('payment_method')=='ပို့သူရှင်း' ? 'selected' : ''}}>ပို့သူရှင်း</option>
              </select>
              @error('payment_method')
              <small class="error">{{ $message }}</small>
              @enderror
            </div>
            <div class="col">
              <label for="parcel_price" class="form-label mb-3">ပစ္စည်းတန်ဖိုး</label>
              <input type="text" class="form-control parcel-price" id="parcel_price" name="parcel_price" value="{{ old('parcel_price') }}">
              @error('parcel_price')
              <small class="error">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="mb-4">
            <label for="sender_note" class="form-label mb-3">အထူးမှာကြားချက်</label>
            <input type="text" class="form-control" id="sender_note" name="sender_note" value="{{ old('sender_note') }}">
          </div>
        </div>
      </div>
      <div class="d-grid gap-2 col-4 mx-auto mt-3 mb-4">
        <small class="text-white text-center mb-3">* ပြထားသောနေရာများကို မဖြစ်မနေဖြည့်ပေးပါရန်။</small>
        <button class="btn pickup-btn" type="submit" name="add">ပစ္စည်းပို့မည်</button>
      </div>
    </form>
  </div>
</section>

<script>
  function checkOption(obj) {
    var input = document.getElementById("parcel_price");
    input.disabled = obj.value == "ပို့သူရှင်း";
  }
</script>
@endsection