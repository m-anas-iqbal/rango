@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <section id="breadcrumbs">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="/" class="link-grey">Home</a>
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">
                            <a href="/" class="link-grey">Products</a>
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">

                        <div>
                            All
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->
    <section class="product-filters mt-md-5 mt-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="m-0">All Products</h2>

                        <hr class="start-border">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="products">
        <div class="container">
            <div class="container-fluid">
                <div class="product-items">
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset('frontend/assets/images/toys/wooden.png') }}" class="img-fluid" alt="">
                                <h4 class="w-fit mx-auto">Wooden toy</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">$24 USD
                                    </div>
                                    <a href="#" class="ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
