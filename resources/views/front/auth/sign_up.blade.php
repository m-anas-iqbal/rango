@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- about us area start here  -->
    <div class="sign-in-page sign-up-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-2 fw-bold">{{ __('Sign Up') }}</h1>
                        <form class="login-form" action="{{ route('user.sign.up.post') }}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" class="form-control rounded-left" placeholder="{{ __('Name') }}"
                                    name="name" required="">
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" class="form-control rounded-left" placeholder="{{ __('Email') }}"
                                    name="email" required="">
                            </div>
                            <div class="form-group mb-2 d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="{{ __('Password') }}"
                                    name="password" required="">
                            </div>
                            <div class="form-group mb-2 d-flex">
                                <input type="password" class="form-control rounded-left"
                                    placeholder="{{ __('Confirm Password') }}" name="confirm_password" required="">
                            </div>
                            <div class="form-group mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="already-have-account">
                                        {{ __('Already have an account?') }} <a href="{{ route('login') }}"
                                            class="forget-password-link small r-text-blue fw-bold">{{ __('Sign In') }}</a>
                                    </div>
                                    <button type="submit"
                                        class="form-control btn btn-primary w-fit submit px-3 primary-btn auth-btn">{{ __('Sign Up') }}</button>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center gap-3 mb-4">
                                <div class="form-group">
                                    <a href="{{ route('user.redirect_google') }}"
                                        class="form-control btn btn-primary py-2 rounded-pill btn-sm submit px-3 google-btn"><i
                                            class="fab fa-google"></i> {{ __('Login With Google') }}</a>
                                </div>
                                {{-- <div class="form-group">
                                    <a href="{{ route('user.redirect_facebook') }}"
                                        class="form-control btn btn-primary py-2 rounded-pill btn-sm submit px-3 facebook-btn"><i
                                            class="fab fa-facebook-f fa-fw"></i> {{ __('Login With Facebook') }}</a>
                                </div> --}}
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->
@endsection
