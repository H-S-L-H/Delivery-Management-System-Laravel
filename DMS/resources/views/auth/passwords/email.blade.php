@extends('auth.layouts.master')

@section('title', 'လျှို့ဝှက်နံပါတ်အသစ်ပြန်လုပ်ရန်')

@section('content')
<div class="container reset-password">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!--<div class="card-header">လျှို့ဝှက်နံပါတ်အသစ်ပြန်လုပ်ရန်</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        <h4 class="pt-5 mb-4 text-start">လျှို့ဝှက်နံပါတ်အသစ်ပြန်လုပ်ရန်</h4>
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-sm-3 col-form-label text-md-end">အီးမေးလ်</label>

                            <div class="col-md-6 col-sm-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Linkပို့မည်
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
