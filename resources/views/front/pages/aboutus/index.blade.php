@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

<section id="about" class="mt-md-5">
   <div class="container">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto text-center">
                <h4 class="r-text-green fs-13 fw-bold letter-spacing-2">All You Need is Fun!</h4>
                <h2 class="fs-40 text-dark my-3 text-uppercase">Introducing Rango Cart</h2>
                <p class="r-text-grey mb-3">We started RANGO CART with the goal of creating fun and educational toys that children will love. We believe that playtime should be both enjoyable and enriching, which is why we put so much effort into designing our products.</p>
                <a href="" class="fs-13 fw-bold underline">More About Us</a>
            </div>
        </div>
    </div>
   </div>
</section>
<section class="banner_img_about my-md-5 my-3">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <img src="{{asset('frontend/assets/images/about/img1.jpeg')}}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="made_for">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 mx-auto text-center">
                    <h4 class="r-text-green fs-13 fw-bold letter-spacing-2">Perfect for little dreamers!</h4>
                    <h2 class="fs-40 text-dark my-3 text-uppercase">Simple & Colorful:  Toys for Joyful Dreamers!</h2>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="designed" class="mt-md-5 mt-3">
    <div class="container">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-6 my-auto">
                    <h2 class="fs-32">Beautifully Designed</h2>
                    <div class="divider"></div>
                    <p>At <span class="r-text-red">RANGO CART</span>, our mission is to inspire creativity and curiosity in children through our toys. We believe that every child has the potential to learn and grow, and we strive to create products that encourage this growth.</p>
                    <a href="#" class="btn btn-shop mt-md-3 mt-2">Shop Now</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/assets/images/about/img2.jpeg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6 mt-md-5">
                    <img src="{{asset('frontend/assets/images/about/img3.jpeg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6 my-auto">
                    <h2 class="fs-32 text-capitalize">Unlock Creativity and endless adventures</h2>
                    <div class="divider"></div>
                    <p>Our team at <span class="r-text-red">RANGO CART</span> is made up of passionate individuals who are dedicated to creating the best toys for children. We have designers, engineers, and play experts who work together to ensure that our products are both fun and educational.</p>
                    <a href="" class="fs-13 fw-bold underline">Explore Our Toys <img src="{{asset('frontend/assets/images/about/arrow.svg')}}" alt=""></a>

                </div>
            </div>
            <div class="row align-items-center">



            </div>
        </div>
    </div>
</section>
@endsection
