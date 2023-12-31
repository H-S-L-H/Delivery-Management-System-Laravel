@extends('user.layouts.app')

@section('title', 'ပင်မစာမျက်နှာ')

@section('content')
<section class="home-page">
    <!-------------Main Section--------------->
    <div class="container">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-6 px-0">
                <h2 class="">အကြီးမားဆုံးနှင့် ယုံကြည်စိတ်ချရဆုံး delivery service</h2>
                <img src="{{ asset('import/assets/img/homepage_letter.png') }}" class="img-fluid" alt="homepage_letter">
                <p class="lead my-3 mt-5 ">သင့်ကုန်ပစ္စည်း အခြေအနေကိုလည်း Order Numberနှင့်တကွ ကြည့်နိုင်ပါပြီ</p>
                <form action="{{route('user.tracking')}}" method="POST">
                    @csrf
                    <div class="input-group w-75 mb-2">
                        <input type="text" name="order_number" class="tracking-form form-control" placeholder="Order Numberရိုက်ထည့်ပါ" aria-label="Tracking Number" aria-describedby="button-addon2">
                        <button class="tracking-btn btn" type="submit" id="button-addon2" name = "track">ရှာဖွေမည်</button>
                    </div>
                    @error('order_number')
                    <small style="color: #FFCE00;">{{ $message }}</small>
                    @enderror
                </form>
            </div>
            <div class="col-sm-6 px-0 d-xs-none">
                <img src="{{ asset('import/assets/img/delivery_man.png') }}" class="delivery-man-img img-fluid w-75 ms-5" alt="delivery_man">
            </div>
        </div>
    </div>
    <!-------------Carousel--------------->
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p class="pt-4 pb-4 mb-0">တနင်္သာရီတိုင်း မြိတ်မြို့မှာ FAST BOX Deliveryဝန်ဆောင်မှုရနေပြီနော်</p>
            </div>
            <div class="carousel-item">
                <p class="pt-4 pb-4 mb-0">ဧရာဝတီတိုင်း ပုသိမ်မြို့မှာ FAST BOX Deliveryဝန်ဆောင်မှုရနေပြီနော်</p>
            </div>
            <div class="carousel-item">
                <p class="pt-4 pb-4 mb-0">စစ်ကိုင်းတိုင်း ရွှေဘိုမြို့မှာ FAST BOX Deliveryဝန်ဆောင်မှုရနေပြီနော်</p>
            </div>
        </div>
    </div>
     
    <div class="container">
     <!-------------Service--------------->
        <div class="delivery-service">
            <h3 class="text-center text-white mt-5 mb-5">ဝန်ဆောင်မှုများ</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/door_to_door.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="door_to_door">
                    <p class=" text-center text-white mt-4">အိမ်အရောက်ပို့</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/cash_on_delivery.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="cash_on_delivery">
                    <p class=" text-center text-white mt-4">အိမ်အရောက်ငွေချေ</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/free_shipping.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="free_shipping">
                    <p class=" text-center text-white mt-4">အခမဲ့အော်ဒါကောက်</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/product_return.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="product_return">
                    <p class=" text-center text-white mt-4">အခမဲ့ပြန်လည်ပို့ဆောင်</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/tracking.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="tracking">
                    <p class=" text-center text-white mt-4">ခြေရာခံစနစ်</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <img src="{{ asset('import/assets/img/pricing.png') }}" class="service-img img-fluid w-25 mx-auto d-block" alt="pricing">
                    <p class=" text-center text-white mt-4">ဈေးနှုန်းတွက်စနစ်</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <!-------------Delivery Place-------------->
        <div class="delivery-place">
            <h3 class="text-center text-white mb-5">ပေးပို့နိုင်သောနေရာများ</h3>
            <img src="{{ asset('import/assets/img/delivery_place.jpg') }}" class="img-fluid rounded w-100 mx-auto d-block" alt="delivery_place">
        </div>
        <!-------------Price Calculate------------>
        <!--<div class="price-calculate mt-5 mb-5 ">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4 class="pt-5 mb-4 ps-5">ပို့ဆောင်ခတွက်ချက်မည်</h4>
                    <p class="ps-5">သင်ပို့ဆောင်မည့်မြို့ ၊ ပစ္စည်းအလေးချိန်အလိုက် <br> စျေးနှုန်းများတွက်ချက်နိုင်ပါသည်။</p>
                    <img src="{{ asset('import/assets/img/price_calculate_man.png') }}" class="img-fluid ms-5 pt-2 w-75" alt="price_calculate_man">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 mb-5 pe-5">
                    <form action="{{route('user.rate-calculate')}}" method="POST" class="calculate-form py-5 ps-3 pe-3 ms-5 justify-content-center">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="FromCity" class="form-label mb-3">မြို့မှ</label>
                                <select class="form-select" name="from_location"  aria-label="Default select example" style="color: #07509E;">
                                    <option value="" selected disabled>မြို့ရွေးချယ်ပါ</option>
                                    @foreach($branches as $branch)
                                    <option value="{{ $branch->id }}" {{ old('id')==$branch->id ? 'selected' : ''}}>{{ $branch->branch_state }}</option>
                                    @endforeach
                                </select>
                                @error('from_location')
                                <small class="error">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class=" col-md-6 col-sm-12 mb-3">
                                <label for="ToCity" class="form-label mb-3">မြို့သို့</label>
                                <select class="form-select" name="to_location" aria-label="Default select example" style="color: #07509E;">
                                    <option value="" selected disabled>မြို့ရွေးချယ်ပါ</option>
                                    @foreach($branches as $branch)
                                    <option value="{{ $branch->id }}" {{ old('id')==$branch->id ? 'selected' : ''}}>{{ $branch->branch_state }}</option>
                                    @endforeach
                                </select>
                                @error('to_location')
                                <small class="error">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label for="weight" class="form-label">အလေးချိန် (ကီလိုဂရမ်)</label>
                                <input type="text" class="form-control" id="weight" name="weight" placeholder="123">
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <button class="w-100 btn calculate-btn" type="submit" name="price_calculator">တွက်ချက်မည်</button>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="form-label">သယ်ယူပို့ဆောင်ခ ကျသင့်ငွေမှာ</label>
                                <div class="price-result w-100 h-100 d-flex flex-column" style="border-radius: 10px; background-color: #D9D9D9;">
                                @if(isset($rates))
                                    @foreach($rates as $rate)
                                        <p class="text-dark text-center mt-3">{{ $rate->from_location }} - {{ $rate->to_location }}</p>
                                        <p class="text-dark text-center">ကျသင့်ငွေ = {{ $rate->price }}</p>
                                        <p class="text-dark text-center border border-dark w-75 mx-auto mt-auto">ဝန်ဆောင်မှုကြာချိန် - ()ရက်အတွင်း</p>
                                    @endforeach
                                @else
                                    <p class="text-dark text-center">&nbsp;</p>
                                    <p class="text-dark text-center">&nbsp;</p>
                                    <p class="text-dark text-center border border-dark w-75 mx-auto mt-auto">ဝန်ဆောင်မှုကြာချိန် - ()ရက်အတွင်း</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
        <!-------------Questions-------------->
        <div class="container">
            <div class="questions">
            <h3 class="text-center text-white mt-5 mb-5">အမေးများသောမေးခွန်းများ</h3>
            <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span>ကြိုရှင်းဝန်ဆောင်မှုရှိပါသလား?</span> 
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        ငွေကြိုရှင်းဝန်ဆောင်မှု မရရှိသေးပါ။
                        </div> 
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <span>မပို့ဆောင်ပေးသောပစ္စည်းများရှိပါသလား?</span> 
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        အလွယ်တကူကွဲရှလွယ်သောပစ္စည်းများ၊ စွန်းထင်းလွယ်သောchemicalပစ္စည်းများ၊ မူးယစ်ဆေးဝါးများ၊ တရားမဝင်ပစ္စည်းများ၊ သက်ရှိတိရစ္ဆာန်များ၊ ပန်းပင်များ၊ ပေါက်ကွဲလွယ်သောပစ္စည်းများ၊ ပုပ်သိုးလွယ်သော၊ အနံပြင်းသောအစားအသောက်များ
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <span>ဂိတ်တင် ဝန်ဆောင်မှုရှိပါသလား?</span> 
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            ဂိတ်တင် ဝန်ဆောင်မှုရှိပါသည်။ ဂိတ်တင် ဝန်ဆောင်ခ ၂၀၀၀(ကျပ်) သာ ဖြစ်ပါသည်။ (၅) ကီလိုဂရမ်ပစ္စည်းများအတွက်ဝန်ဆောင်ခသာဖြစ်ပါသည်။
                        </div>
                    </div>
                </div>
            </div>
            </div> 
        </div> 
    </div>
</section>
@endsection
