@extends('user.layouts.app')

@section('title', 'ဆက်သွယ်ရန်')

@section('content')
<section class="contact-page">
<section class="contact-us mb-5">
  <div class="container">
    <h3 class="text-center text-white mt-3 mb-5">ဆက်သွယ်ရန်</h3>
    <div class="row first-row mb-5">
      <div class="col-sm pt-5 ps-5">
        <h3 class="title mb-3">Fast Box Delivery Service</h3>
        <p class="text mb-4">
            Fast Box Delivery Serviceသည် 2023ခုနှစ်မှစတင်၍ မြန်မာနိုင်ငံ၏ထိပ်တန်းDelivery Service Companyအဖြစ်ရပ်တည်လာခဲ့သည်။.
        </p>
        <div class="ps-5 mb-4">
          <p>အမှတ်(၁၀)၊ မြေညီထပ်၊ လှိုင်မြို့နယ်၊ ရန်ကုန်</p>
          <p>info@fastboxdelivery.service.com</p>
          <p>09979668782</p>
        </div>
        <div class="social-media mb-5">
          <p>Social Media :</p>
          <div class="social-icons">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        </div>
      </div>
      <div class="col-sm pt-5 ps-5">
        <form method="POST" action="{{route('user.contact.store')}}">
          @csrf
          <div class="mb-4 pe-5">
            <label for="contact_name" class="form-label mb-2">အမည်</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
            @error('contact_name')
              <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4 pe-5">
            <label for="contact_phone" class="form-label mb-2">ဖုန်းနံပါတ်</label>
            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}">
            @error('contact_phone')
              <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-4 pe-5">
            <label for="contact_description" class="form-label mb-2">အကြောင်းအရာ</label>
            <textarea class="form-control" name="contact_description" id="contact_description">{{ old('contact_description') }}</textarea>
            @error('contact_description')
              <small class="error">{{ $message }}</small>
            @enderror
          </div>
          <div class="float-end mb-4 pe-5">
            <button class="btn contact-btn" type="submit" name="add">ပေးပို့မည်</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row second-row gap-3 mb-3">
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">ရန်ကုန်ရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၁၀)၊ မြေညီထပ်၊ လှိုင်မြို့နယ်၊ ရန်ကုန်</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">မန္တလေးရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၈၀)၊ မန္တလေးမြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">နေပြည်တော်ရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၁၂၀)၊ နေပြည်တော်မြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">ပဲခူးရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၇၀)၊ ပဲခူးမြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
    </div>

    <div class="row third-row gap-3">
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">မကွေးရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၄၃)၊ ပွင့်ဖြူမြို့နယ်၊ မကွေး</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">စစ်ကိုင်းရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၁၀)၊ မုံရွာမြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">ဧရာဝတီရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၁၄၀)၊ ပုသိမ်မြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
      <div class="col-sm">
        <p class="pt-3 ps-3 fw-bold">တနသ်ာရီရုံးချုပ်</p>
        <p class="ps-3"><i class="fa-solid fa-location-dot"></i> အမှတ်(၂၀၈)၊ မြိတ်မြို့</p>
        <p class="ps-3"><i class="fa-solid fa-phone"></i> 09979668782</p>
      </div>
    </div>
  </div>
</section>
</section>
@endsection