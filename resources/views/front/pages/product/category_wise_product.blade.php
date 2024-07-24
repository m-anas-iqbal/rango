@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
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
                            Category
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg" alt="" class="breadcrumbs-arrow">
                            <a class="page-item"> {{ langConverter($category_m->en_Category_Name, $category_m->fr_Category_Name) }}</a>

                            <div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Product Area Start -->

{{-- @dd($products) --}}
    <div class="product-area section">
        <div class="container">

            <div id="filterProduct">
                <div class="product-list">
                    <div class="row">

                        @forelse ($products as $product)

                        <div class="col-md-3 p-3">
                            <div class="card text-center p-3 shadow rounded-10px border-0">
                                <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" alt="product" class="img-fluid" >
                                <h4 class="w-fit mx-auto"><a class="product-link"
                                    href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a></h4>
                                <div class="d-flex justify-content-center">

                                    <input type="hidden" name="quantity" value="1"
                                        id="product_quantity">
                                    <div class="price-label w-fit small r-bg-green rounded-pill  py-1 px-2 text-white">{{ currencyConverter($product->Price) }}</div>
                                    <a href="javascript:void(0)" title="{{ __('Add to cart') }}"
                                    data-id="{{ $product->id }}"
                                     class="add-cart addCart ms-2 r-bg-blue price-label w-fit small r-bg-green rounded-pill  py-1 px-3 text-white">{{ __('Add To Cart') }}</a>
                                </div>
                            </div>
                        </div>
                     @empty

      @endforelse
                    </div>
                    <div class="pagination-area mt-30">
                        <ul class="paginations text-center">
                            {{ $products->links('vendor.pagination.custom') }}
                        </ul>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Product Area End -->
    <div id="shortingUrl" data-url="{{ route('product.shorting') }}"></div>
    <div id="checkCategoryFilter" data-url="{{ route('product.filtering') }}"></div>

    <div id="checkCategoryFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkColorFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkBrandFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkSizeFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="searchWidgetFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="minMaxPriceFilter" data-url="{{ route('product.filtering') }}"></div>

    <div id="AddToCompareItemUrl" data-url="{{ route('compare.add') }}"></div>
    <div id="AddToCartIntoSession" data-url="{{ route('add.to.cart') }}"></div>
    <div id="productWishlistUrl" data-url="{{ route('wishlist.add') }}"></div>
    <div id="productImgAsset" data-url="{{ asset(ProductImage()) }}"></div>

    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/product.js') }}"></script>
    @endpush
@endsection
