@extends('auth.layouts.master')

@section('title', 'အကောင့်ဝင်ရန်')

@section('content')
    <div class="login-form mt-5 py-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="{{ asset('import/assets/img/login.png') }}" alt="login" class="img-fluid mb-4 w-75">
                <p class="fw-bold pt-1 mb-2">စာရင်းမသွင်းရသေးပါက စာရင်းအရင်သွင်းပြီးမှ အကောင့်ဝင်ပေးပါ။</p>
                @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-link">စာရင်းသွင်းရန်</a>
                @endif
            </div>
            <div class="col-md-6 col-sm-12 ps-4">
                <form method="POST" action="{{ route('login') }}" class="ps-3 pe-3 ms-5">
                    <h4 class="pt-5 mb-4">အကောင့်ဝင်ရန်</h4>
                    @csrf

                    <div class="input-with-icon mb-4">
                        <input type="email" class="form-control w-75 @error('email') is-invalid @enderror" id="email" name="email" placeholder="အီးမေးလ်" value="{{ old('email') }}" autocomplete="email" autofocus>  
                        <i class="fa-solid fa-envelope"></i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-with-icon mb-3">
                        <input type="password" class="form-control w-75 @error('password') is-invalid @enderror" id="password" name="password" placeholder="လျှို့ဝှက်နံပါတ်" autocomplete="current-password">
                        <i class="fa-solid fa-lock"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-12 ps-0">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link pt-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="text-lg-start mt-4">
                        <button type="submit" name="login" class="btn">အကောင့်ဝင်မည်</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

