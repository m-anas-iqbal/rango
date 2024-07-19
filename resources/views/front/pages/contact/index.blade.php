@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

    {{-- breadcrumbs --}}
    <section id="breadcrumbs">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="/" class="link-grey">Home</a>
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">
                        <div>
                            Contact
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="container-fluid">
                <div class="mt-md-5 mt-3">
                    <div class="row">

                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="fs-24">Leave a Message</h2>
                                <div class="divider"></div>
                                <div id="form">
                                    <form action="">
                                        <div>
                                            <label for="f_name" class="fs-13 fw-bold mb-2">Full Name:</label>
                                            <input type="text" class="form-control" name="f_name" id="f_name">
                                        </div>
                                        <div class="mt-3">
                                            <label for="number" class="fs-13 fw-bold mb-2">Phone Number:</label>
                                            <input type="number" class="form-control" name="number" id="number">
                                        </div>
                                        <div class="mt-3">
                                            <label for="email" class="fs-13 fw-bold mb-2">E-mail:</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>
                                        <div class="mt-3">
                                            <label for="message" class="fs-13 fw-bold mb-2">Message:</label>
                                            <textarea class="form-control" name="message" rows="5" id="message"></textarea>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <input type="button" value="Send" class="btn btn-shop fw-bold">
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 gs-5">
                                <h2 class="fs-24">
                                    Contact Info
                                </h2>
                                <div class="divider"></div>
                                <div class="mt-md-5 mt-3">
                                    <a href="tel:123123123" class="fs-13 d-block fw-bold green transition mb-2">+1 123 123 223</a>
                                    <a href="mailto:info@rangocart.com" class="fs-13 fw-bold green transition underline">info@rangocart.com</a>
                                </div>
                                <div class="socials mt-md-5 mt-3">
                                    <h5 class="fs-17">Follow Us On:</h5>
                                    <a href="#" class="mt-3 me-2" target="_blank"><img src="{{asset('frontend/assets/images/socials/facebook.png')}}" alt="" class="img-fluid"></a>
                                    <a href="#" class="mt-3 me-2" target="_blank"><img src="{{asset('frontend/assets/images/socials/instagram.png')}}" alt="" class="img-fluid"></a>
                                    <a href="#" class="mt-3 me-2" target="_blank"><img src="{{asset('frontend/assets/images/socials/twitter.png')}}" alt="" class="img-fluid"></a>
                                    <a href="#" class="mt-3 me-2" target="_blank"><img src="{{asset('frontend/assets/images/socials/pinterest.png')}}" alt="" class="img-fluid"></a>
                                    <a href="#" class="mt-3 me-2" target="_blank"><img src="{{asset('frontend/assets/images/socials/youtube.png')}}" alt="" class="img-fluid"></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
