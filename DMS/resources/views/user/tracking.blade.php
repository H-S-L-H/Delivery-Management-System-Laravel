@extends('user.layouts.app')

@section('title', 'ပါဆယ်အခြေအနေ')

@section('content')
<section class="tracking-page">
  <div class="container">
    <h3 class="text-center text-white mt-3 mb-5">ပါဆယ်အခြေအနေ အသေးစိတ်</h3>
  </div>
  @if(count($status) > 0)
    @foreach ($status as $sts)
      @if ($sts->order_status == "အော်ဒါတင်ထားဆဲ")
      <?php
        $order_status = "အော်ဒါတင်ထားဆဲ";
        $s1_color = '#FFCE00';
      ?>
      @elseif ($sts->order_status == "ပစ္စည်းလာယူနေဆဲ")
      <?php
        $order_status = "ပစ္စည်းလာယူနေဆဲ";
        $s1_color = '#FFCE00';
        $s2_color = '#FFCE00';
      ?>
      @elseif ($sts->order_status == "ပစ္စည်းယူဆောင်ပြီး")
      <?php
        $order_status = "ပစ္စည်းယူဆောင်ပြီး";
        $s1_color = '#FFCE00';
        $s2_color = '#FFCE00';
        $s3_color = '#FFCE00';
      ?>
      @elseif ($sts->order_status == "ဂိုထောင်ရောက်ရှိ")
      <?php
        $order_status = "ဂိုထောင်ရောက်ရှိ";
        $s1_color = '#FFCE00';
        $s2_color = '#FFCE00';
        $s3_color = '#FFCE00';
        $s4_color = '#FFCE00';
      ?>
      @elseif ($sts->order_status == "ပို့ဆောင်နေပါပြီ")
      <?php
        $order_status = "ပို့ဆောင်နေပါပြီ";
        $s1_color = '#FFCE00';
        $s2_color = '#FFCE00';
        $s3_color = '#FFCE00';
        $s4_color = '#FFCE00';
        $s5_color = '#FFCE00';
      ?>
      @else 
      <?php
        $order_status = "ပို့ဆောင်ပြီးပါပြီ";
        $s1_color = '#FFCE00';
        $s2_color = '#FFCE00';
        $s3_color = '#FFCE00';
        $s4_color = '#FFCE00';
        $s5_color = '#FFCE00';
        $s6_color = '#FFCE00';
      ?>
      @endif
      <div class="container">
        <h4 class="text-center text-white mt-3 mb-4">ပါဆယ်အခြေအနေ :<span style="color:#FFCE00; ">{{ $sts->order_status }}</span></h4> 
        <h5 class="text-center text-white mt-3 mb-5">အော်ဒါနံပါတ် : {{ $sts->order_number }} </h5>
      </div>
    
      <div class="row w-100">
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking1.png') }}" class="img-fluid mx-auto d-block" alt="door_to_door" style="background: {{ isset($s1_color) ? $s1_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4" ><span style="color: {{ isset($s1_color) ? $s1_color : 'white' }};">အော်ဒါတင်ထားဆဲ</span></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking2.png') }}" class="img-fluid mx-auto d-block" alt="door_to_door" style="background: {{ isset($s2_color) ? $s2_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4" ><span style="color: {{ isset($s2_color) ? $s2_color : 'white' }};">ပစ္စည်းလာယူနေဆဲ</span></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking3.png') }}" class="img-fluid mx-auto d-block" alt="cash_on_delivery" style="background: {{ isset($s3_color) ? $s3_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4"><span style="color: {{ isset($s3_color) ? $s3_color : 'white' }};">ပစ္စည်းယူဆောင်ပြီး</span></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking4.png') }}" class="img-fluid mx-auto d-block" alt="free_shipping" style="background: {{ isset($s4_color) ? $s4_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4"><span style="color: {{ isset($s4_color) ? $s4_color : 'white' }};">ဂိုထောင်ရောက်ရှိ</span></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking5.png') }}" class="img-fluid mx-auto d-block" alt="product_return" style="background: {{ isset($s5_color) ? $s5_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4"><span style="color: {{ isset($s5_color) ? $s5_color : 'white' }};">ပို့ဆောင်နေပါပြီ</span></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2 col-sm-6 mb-5">
          <img src="{{ asset('import/assets/img/tracking6.png') }}" class="img-fluid mx-auto d-block" alt="tracking" style="background: {{ isset($s6_color) ? $s6_color : '#D9D9D9' }}; padding: 8px; width: 50px; height: 50px; object-fit: cover;">
          <p class=" text-center text-white mt-4"><span style="color: {{ isset($s6_color) ? $s6_color : 'white' }};">ပို့ဆောင်ပြီးပါပြီ</span></p>
        </div><!-- /.col-lg-4 -->
      </div>
    @endforeach
  @else
    <div class="mb-5 mt-5 text-center">
      <img src="{{ asset('import/assets/img/empty.png') }}" class="img-fluid mb-3" style="width: 60px;">
      <h5 class="text-white">ပါဆယ်အခြေအနေရှာမရပါ / အော်ဒါနံပါတ်ပြန်စစ်ကြည့်ပါ</h5>
    </div>
  @endif
</section>
@endsection
