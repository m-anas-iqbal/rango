@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'On Sale')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

<!-- breadcrumb area end here  -->
<section id="breadcrumbs">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a class="link-grey" href="{{route('front')}}">{{__('Home')}}</a>
                        <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">
                        On Sale
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-center my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>On Sale Products</h2>
                <hr>
            </div>
        </div>
    </div>
</section>

<!-- Product Area Start -->
<div class="product-area section">
    <div class="container">
        <div id="filterProduct">
            <div class="product-list">
                <div class="row">
                    @forelse ($on_sales as $product)
                        <div class="col-md-3 p-3 h-100">
                            <div class="card product_card h-100 text-center p-3 shadow rounded-10px border-0">
                                <a class="product-link" href="{{ route('single.product', $product->en_Product_Slug) }}">
                                    <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" class="img-fluid shadow rounded" alt="{{ __('product') }}">
                                    <h5 class="w-fit mx-auto fw-bold mt-3 mb-0 fs-6">
                                        {{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}
                                    </h5>
                                </a>
                                @if (currencyConverter($product->Price) == currencyConverter($product->Discount_Price))
                                    <span class="price fw-bold fs-4">{{ currencyConverter($product->Discount_Price) }}</span>
                                @else
                                    <div class="d-flex justify-content-center gap-2 align-items-end">
                                        <span class="price fw-bold fs-4">{{ currencyConverter($product->Discount_Price) }}</span>
                                        <span class="regular-price text-danger text-decoration-line-through fw-bold fs-6">{{ currencyConverter($product->Price) }}</span>
                                    </div>
                                @endif
                                <hr>
                                @if ($product->Quantity > 0)
                                    <div class="d-flex justify-content-center gap-3">
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <a href="javascript:void(0)" title="{{ __('Add to cart') }}" data-id="{{ $product->id }}" class="add-cart addCart price-label w-fit small r-bg-green rounded-pill py-1 px-3 text-white">{{ __('Add To Cart') }}</a>
                                        <a href="javascript:void(0)" class="price-label w-fit small r-bg-red rounded-pill py-1 px-2 text-white MyWishList" data-id="{{ $product->id }}" title="{{__('Add To Wishlist')}}"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center gap-2 align-items-end">
                                        <span class="regular-price text-danger fw-bold fs-6">Sold out</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>No products on sale at the moment.</p>
                    @endforelse
                </div>
                {{-- <div class="pagination-area mt-30">
                    <ul class="paginations text-center">
                        {{ $on_sales->links('vendor.pagination.custom') }}
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

@endsection
