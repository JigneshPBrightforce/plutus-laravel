@extends('layouts.admin')

@section('content')
<div class="body-wrapper">
    <div class="backgound-hero" style="background-image: url('{{asset('admin/images/bg-hero.jpg')}}')">
        <div class="container">
            <div class="white-section-box login ms-auto">
                <a href="/" class="d-block mb-5">
                    <img src="{{ asset('image/Plutus-logo.png')}}" width="200" alt="logo">
                </a>
                <div class="title_text mb-5">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="custom_label mb-1" for="email">{{ __('Email Address') }}</label>
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="custom_label mb-1" for="password">{{ __('Password') }}</label>
                        <input id="password" placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-orange">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </dv>
    </div>
</div>
<!-- <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection