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
                        <h1 class="text-center mb-4">{{ __('Forget Password')}}</h1>
                        <form class="login-form" method="post" action="{{route('forget.password.post')}}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" placeholder="{{__('Email')}}" name="email" required="">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3 primary-btn auth-btn">{{ __('Reset Password')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->
@endsection
