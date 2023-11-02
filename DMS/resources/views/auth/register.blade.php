@extends('auth.layouts.master')

@section('title', 'စာရင်းသွင်းရန်')

@section('content')
    <div class="register-form mt-4 mb-5 py-5">
        <div class="text-center">
            <img src="{{ asset('import/assets/img/register_delivery_man.png') }}" alt="register_delivery_man" class="img-fluid w-25">
        </div>
        <div class="text-center">
            <h4 class="pt-5 mb-5">စာရင်းသွင်းရန်</h4>
        </div>
        <div class="row">
            <div class="mx-auto col-10 col-md-6 col-lg-5">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Username input -->
                <div class="input-with-icon mb-4">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="အမည်" value="{{ old('name') }}" autocomplete="name">
                    <i class="fa-solid fa-user"></i>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Phonenumber input -->
                <div class="input-with-icon mb-4">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="ဖုန်းနံပါတ်" value="{{ old('phone') }}" autocomplete="phone">
                    <i class="fa-solid fa-phone"></i>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Email input -->
                <div class="input-with-icon mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="အီးမေးလ်လိပ်စာ" value="{{ old('email') }}" autocomplete="email">
                    <i class="fa-solid fa-envelope"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Password input -->
                <div class="input-with-icon mb-4">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="လျှို့ဝှက်နံပါတ်" autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Repeat Password input -->
                <div class="input-with-icon mb-4">
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="လျှို့ဝှက်နံပါတ်ပြန်ရိုက်ထည့်ပေးပါ" autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <!-- Submit button -->
                <div class=" text-lg-start mt-4 mb-3 d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn" name="add">စာရင်းသွင်းမည်</button>
                </div>
                <div class="text-center">
                    <span class="fw-bold pt-1 mb-2">စာရင်းသွင်းပြီးသားလား?</span>
                    @if (Route::has('login'))
                            <a href="{{ route('login') }}">အကောင့်ဝင်ရန်</a>
                    @endif
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

