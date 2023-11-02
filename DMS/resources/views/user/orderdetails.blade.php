@extends('user.layouts.app')

@section('title', 'အော်ဒါအသေးစိတ်')

@section('content')
<section class="orderdetails-page mb-5">
  <div class="container">
    <h3 class="text-center text-white mt-3 mb-5">အော်ဒါအသေးစိတ်</h3>
    @if(count($orders) > 0)
      @foreach ($orders as $order)
      <div class="row order-detail-row mt-3">
        <div class="col pt-2 pb-2 text-center">
          <p class="fw-bold">အော်ဒါနံပါတ်</p>
          <p>{{ $order->order_number }}</p>
        </div>
        <div class="col pt-2 pb-2 text-center">
          <p class="fw-bold">ပေးပို့သူအမည်</p>
          <p>{{ $order->sender_name }}</p>
        </div>
        <div class="col pt-2 pb-2 text-center">
          <p class="fw-bold">အ‌ခြေအနေ</p>
          <p>{{ $order->order_status }}</p>
          <a href="#" id="{{ $order->id }}" class="detail_link text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $order->id }}">အသေးစိတ်ကြည့်ရန် >></a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <p class="modal-title fw-bold" id="exampleModalLabel">အော်ဒါနံပါတ် : <span class="fw-normal">{{ $order->order_number }}</span></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-start">
                    <p class="fw-bold">ပေးပို့သူအမည် : <span class="fw-normal">{{ $order->sender_name }}</span></p>
                    <p class="fw-bold">ပေးပို့သူဖုန်းနံပါတ် : <span class="fw-normal">{{ $order->sender_phone }}</span></p>
                    <p class="fw-bold">ပေးပို့သူလိပ်စာ : <span class="fw-normal">{{ $order->pickup_address }}</span></p>
                    <p class="fw-bold">အော်ဒါလာကောက်သောနေ့ : <span class="fw-normal">{{ $order->pickup_date }}</span></p>
                    <p class="fw-bold">အော်ဒါလာကောက်သောယာဉ်အမျိုးအစား : <span class="fw-normal">{{ $order->pickup_vehicle }}</span></p>
                    <p class="fw-bold">အထူးမှာကြားချက် : <span class="fw-normal">{{ $order->sender_note == NULL ?  "မရှိခဲ့ပါ" : $order->sender_note }}</span></p>
                    <hr>
                    <p class="fw-bold">လက်ခံသူအမည်: <span class="fw-normal">{{ $order->receiver_name }}</span></p>
                    <p class="fw-bold">လက်ခံသူဖုန်းနံပါတ်: <span class="fw-normal">{{ $order->receiver_phone }}</span></p>
                    <p class="fw-bold">လက်ခံသူလိပ်စာ: <span class="fw-normal">{{ $order->receiver_address }}</span></p>
                    <p class="fw-bold">ပစ္စည်းရောက်မည့်ခက်မှန်းရက်: <span class="fw-normal">{{ $order->estimate_arrival_date == NULL ?  "မသတ်မှတ်ရသေးပါ" : $order->estimate_arrival_date }}</span></p>
                    <p class="fw-bold">ပို့ဆောင်မည့်နည်းလမ်း: <span class="fw-normal">{{ $order->deliver_method }}</span></p>
                    <p class="fw-bold">ငွေချေမည့်ပုံစံ: <span class="fw-normal">{{ $order->payment_method }}</span></p>
                    <p class="fw-bold">ပစ္စည်းတန်ဖိုး: <span class="fw-normal">{{ $order->parcel_price == NULL ?  "ရှင်းပြီး" : $order->parcel_price }}</span></p>
                    <p class="fw-bold">ပို့ဆောင်ခ: <span class="fw-normal">{{ $order->delivery_fee == NULL ?  "မသတ်မှတ်ရသေးပါ" : $order->delivery_fee }}</span></p>
                    <hr>
                    <p class="fw-bold">ပစ္စည်းအလေးချိန်: <span class="fw-normal">{{ $order->parcel_weight == NULL ?  "မသတ်မှတ်ရသေးပါ" : $order->parcel_weight }}</span></p>
                    <hr>
                    <p class="fw-bold">အ‌ခြေအနေ: <span class="fw-normal">{{ $order->order_status }}</span></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      @endforeach
    @else
      <div class="mb-5 mt-5 text-center">
        <img src="{{ asset('import/assets/img/empty.png') }}" class="img-fluid" style="width: 60px;">
        <h5 class="text-white">No Record Found</h5>
      </div>
    @endif
  </div>
</section>
@endsection