@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

    <!-- about us area start here  -->
    <div class="sign-in-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-3 fw-bold">{{ __('Sign In') }}</h1>
                        <form class="login-form" method="post" action="{{ route('user.sign.in.post') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="email" class="form-control" placeholder="{{ __('Email') }}" name="email"
                                    value="{{ env('APP_DEMO') == true ? 'user1@gmail.com' : old('email') }}" required="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" class="form-control" placeholder="{{ __('Password') }}"
                                    name="password" value="{{ env('APP_DEMO') == true ? '123456' : '' }}" required="">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div>
                                        <label class="checkbox-wrap small">{{ __('Remember Me') }}
                                            <input type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit"
                                        class="form-control btn btn-primary submit px-3 w-fit primary-btn auth-btn">{{ __('Login') }}</button>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center gap-3">
                                <div class="form-group mb-2">
                                    <a href="{{ route('user.redirect_google') }}"
                                        class="form-control btn btn-primary py-2 rounded-pill btn-sm submit px-3 google-btn"><i
                                            class="fab fa-google"></i> {{ __('Login With Google') }}</a>
                                </div>
                                <div class="form-group mb-2">
                                    <a href="{{ route('user.redirect_facebook') }}"
                                        class="form-control btn btn-primary py-2 rounded-pill btn-sm submit px-3 facebook-btn"><i
                                            class="fab fa-facebook-f fa-fw"></i> {{ __('Login With Facebook') }}</a>
                                </div>
                            </div>
                            <hr>
                            <div class="remember-box form-group d-md-flex justify-content-between mb-4">
                                <div class="already-have-account small">
                                    {{ __('Dont have an account?') }} <a href="{{ route('user.sign.up') }}"
                                        class="forget-password-link r-text-blue fw-bold">{{ __('Sign Up') }}</a>
                                </div>
                                <div class="small">
                                    <a href="{{ route('forget.password.get') }}"
                                        class="forget-password-link">{{ __('Forget Password') }}?</a>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->
@endsection
