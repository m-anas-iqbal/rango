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
                            <a href="{{ route('front') }}" class="link-grey">{{ __('Home') }}</a>
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg"
                                alt="" class="breadcrumbs-arrow">
                            <div class="page-item">{{ __('Product Single Page') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->

    <!-- product-single-area start here  -->
    <div class="product-single-area section-top mt-5">
        <div class="container">
            <div class="product-single-details">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="imagesSection">
                            <div class="product-thumbnail-image p-3">
                                @foreach (['Primary_Image', 'Image4', 'Image3', 'Image5', 'Image2'] as $image)
                                    @if ($products->$image)
                                        <div class="main-img-wrap ">
                                            <img class="img-fluid w-100 h-100 object-fit-contain"
                                                src="{{ asset(ProductImage() . $products->$image) }}"
                                                alt="{{ __('product') }}" />
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="product-images">
                                @foreach (['Primary_Image', 'Image4', 'Image3', 'Image5', 'Image2'] as $image)
                                    @if ($products->$image)
                                        <div class="p-1 wrap">
                                            <div class="border border-dark p-2 rounded h-100 w-100">
                                                <img class="img-fluid w-100 h-100 object-fit-contain"
                                                    src="{{ asset(ProductImage() . $products->$image) }}"
                                                    alt="{{ __('product') }}" />
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="product-single-left">
                            <div class="product-thumbnail-image">
                                <ul class="product-thumb-silide slider slider-nav">

                                    <li class="single-item"><img class="single-item-image"
                                            src="{{ asset(ProductImage() . $products->Primary_Image) }}"
                                            alt="{{ __('product') }}" /></li>
                                    @if ($products->Image4)
                                        <li class="single-item"><img class="single-item-image"
                                                src="{{ asset(ProductImage() . $products->Image4) }}"
                                                alt="{{ __('product') }}" />
                                        </li>
                                    @endif
                                    @if ($products->Image3)
                                        <li class="single-item"><img class="single-item-image"
                                                src="{{ asset(ProductImage() . $products->Image3) }}"
                                                alt="{{ __('product') }}" />
                                        </li>
                                    @endif
                                    @if ($products->Image5)
                                        <li class="single-item"><img class="single-item-image"
                                                src="{{ asset(ProductImage() . $products->Image5) }}"
                                                alt="{{ __('product') }}" /></li>
                                    @endif
                                    @if ($products->Image2)
                                        <li class="single-item"><img class="single-item-image"
                                                src="{{ asset(ProductImage() . $products->Image2) }}"
                                                alt="{{ __('product') }}" /></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="product-slier-big-image">
                                <div class="product-priview-slide slider slider-for">
                                    <div class="single-slide">
                                        <img class="slide-image"
                                            src="{{ asset(ProductImage() . $products->Primary_Image) }}"
                                            alt="{{ __('product') }}" />
                                    </div>
                                    @if ($products->Image4)
                                        <div class="single-slide">
                                            <img class="slide-image" src="{{ asset(ProductImage() . $products->Image4) }}"
                                                alt="{{ __('product') }}" />
                                        </div>
                                    @endif
                                    @if ($products->Image3)
                                        <div class="single-slide">
                                            <img class="slide-image" src="{{ asset(ProductImage() . $products->Image3) }}"
                                                alt="{{ __('product') }}" />
                                        </div>
                                    @endif
                                    @if ($products->Image5)
                                        <div class="single-slide">
                                            <img class="slide-image" src="{{ asset(ProductImage() . $products->Image5) }}"
                                                alt="{{ __('product') }}" />
                                        </div>
                                    @endif
                                    @if ($products->Image2)
                                        <div class="single-slide">
                                            <img class="slide-image" src="{{ asset(ProductImage() . $products->Image2) }}"
                                                alt="{{ __('product') }}" />
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 py-3">
                        <div class="product-single-right">
                            <div class="product-info">
                                {{-- @foreach ($products->product_tags as $ppt)
                                    <h4 class="product-catagory">{{ $ppt->tag }}</h4>
                                @endforeach --}}

                                <h3 class="product-name fw-bold text-capitalize ">
                                    {{ langConverter($products->en_Product_Name, $products->fr_Product_Name) }}</h3>

                                <!-- This is server side code. User can not modify it. -->
                                {{-- {!! productReview($products->id) !!} --}}

                                <div class="product-price mt-3">
                                    @if (currencyConverter($products->Price) == currencyConverter($products->Discount_Price))
                                        <span class="price">{{ currencyConverter($products->Discount_Price) }}</span>
                                    @else
                                        <span
                                            class="price fw-bold fs-3">{{ currencyConverter($products->Discount_Price) }}</span>
                                        <span
                                            class="regular-price text-danger text-decoration-line-through fw-bold fs-5">{{ currencyConverter($products->Price) }}</span>
                                    @endif
                                </div>
                                <div class="product-size-area">
                                    {{-- <h6 class="size-title">{{ __('Type:') }} {{ productTypeText($products->id) }}</h6> --}}
                                    <ul class="size-switch list-unstyled">
                                        @foreach ($products->sizes as $item)
                                            <input type="hidden" class="sizeValue" name="productSize"
                                                value="{{ $item->id }}">
                                            <li class="single-size activeSize" data-size="{{ $item->id }}">
                                                {{ $item->Size }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <p class="note-text m-0">{{ langConverter($products->en_About, $products->fr_About) }}</p>

                                <div class="product-color-area">
                                    <div class="variable-single-item color-switch">
                                        <div class="product-variable-color">
                                            @foreach ($products->colors as $color)
                                                <label>
                                                    <input type="hidden" name="colorId" value="{{ $color->id }}">
                                                    <input name="productColor" class="color-select" type="radio"
                                                        value="{{ $color->id }}">
                                                    <span style="background:{{ $color->ColorCode }};"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>



                                <div class="prdouct-btn-wrapper d-flex align-items-center">
                                    <div class="cart-plus-minus d-flex align-items-center">
                                        <div class="dec qtybutton btn fs-5 fw-bold"><i class="fa-solid fa-minus"></i></div>
                                        <input class="cart-plus-minus-box w-25 form-control text-center" type="text" name="qtybutton"
                                            id="product_quantity" value="1" readonly />
                                        <div class="inc qtybutton btn fs-5 fw-bold"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <a class="product-btn MyWishList" data-id="{{ $products->id }}"
                                        title="{{ __('Add To Wishlist') }}"><i class="icon flaticon-like"></i></a>
                                    <a class="product-btn CompareList" data-id="{{ $products->id }}"
                                        title="{{ __('Add To Compare') }}"><i class="icon flaticon-bar-chart"></i></a>
                                </div>
                                {{-- <div class="product-bottom-button d-flex gap-2 my-2">
                                    <a href="javascript:void(0)" class="btn btn-primary r-bg-blue buyNow"
                                        data-id="{{ $products->id }}">{{ __('Buy Now') }}</a>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart btn btn-success r-bg-green border-0 addCart"
                                        data-id="{{ $products->id }}">{{ __('Add To Cart') }}
                                        <i class="icon fas fa-plus-circle"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-right-bottom mt-3">
                                <ul class="features list-unstyled">
                                    <li class="single-feature mb-2">
                                        <strong class="feature-title"><img src="{{asset('frontend/assets/images/delivery.png')}}" alt="" class="img-fluid">
                                            {{ __('Estimated Delivery:') }}
                                        </strong><span
                                            class="feature-text">{{ allsetting()['estimating_delivery'] }}</span>
                                    </li>
                                    <li class="single-feature mb-2">
                                        <strong class="feature-title"><img src="{{asset('frontend/assets/images/coin.png')}}" alt="" class="img-fluid">
                                            {{ __('Shipping Charge:') }}
                                        </strong><span class="feature-text">{{ __('On all orders over') }}
                                            {{ currencyConverter(allsetting()['shipping_charge']) }}</span>
                                    </li>
                                    <li class="single-feature">
                                        <strong class="feature-title"><img src="{{asset('frontend/assets/images/shield.png')}}" alt="" class="img-fluid">
                                            Safe and Secure Checkout
                                        </strong>
                                        {{-- <span class="feature-text">{{ __('') }}
                                            {{ currencyConverter(allsetting()['shipping_charge']) }}</span> --}}
                                    </li>
                                </ul>

                                {{-- @if ($allsettings['news_letter_status'] == '1')
                                    <div class="guarantee-checkout-area">
                                        <h5 class="guarantee-title fw-bold">{{ $allsettings['news_letter_title'] }}</h5>
                                        <img src="{{asset('frontend/assets/images/paypal.png')}}"
                                            alt="payment-method-image" />
                                    </div>
                                @endif --}}
                                <div class="product-bottom-button my-2">
                                    <a href="javascript:void(0)" class="btn btn-primary my-2 r-bg-blue buyNow d-block"
                                        data-id="{{ $products->id }}">{{ __('Buy Now') }}</a>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart btn btn-success r-bg-green border-0 addCart d-block"
                                        data-id="{{ $products->id }}">{{ __('Add To Cart') }}
                                        <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                                <div class="share-area mt-2">
                                    <h5 class="share-title fw-bold">{{ __('SHARE:') }}</h5>
                                    <ul class="social-media a2a_kit list-unstyled d-flex gap-3">
                                        <li class="media-item"><a
                                                class="media-link r-text-blue facebook a2a_button_facebook"
                                                href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="media-item"><a
                                                class="media-link r-text-blue twitter a2a_button_twitter"
                                                href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li class="media-item"><a
                                                class="media-link r-text-blue linkedin a2a_button_linkedin"
                                                href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="media-item"><a
                                                class="media-link r-text-blue pinterest a2a_button_pinterest"
                                                href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="product-bottom-info mt-5">
                <div class="nav-tabs-menu">
                    <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark active" id="Description-tab" data-bs-toggle="tab"
                                data-bs-target="#Description" type="button" role="tab" aria-controls="Description"
                                aria-selected="true">
                                {{ __('Description') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="Reviews-tab" data-bs-toggle="tab"
                                data-bs-target="#Reviews" type="button" role="tab" aria-controls="Reviews"
                                aria-selected="false">
                                {{ __('Reviews') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="Shipping-Return-tab" data-bs-toggle="tab"
                                data-bs-target="#Shipping-Return" type="button" role="tab"
                                aria-controls="Shipping-Return" aria-selected="false">
                                {{ __('Shipping & Return') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="Additional-Information-tab" data-bs-toggle="tab"
                                data-bs-target="#Additional-Information" type="button" role="tab"
                                aria-controls="Additional-Information" aria-selected="false">
                                {{ __('Additional Information') }}</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="ProductTabContent">

                    <div class="tab-pane p-2 fade show active" id="Description" role="tabpanel"
                        aria-labelledby="Description-tab">
                        <div class="product-description">
                            {!! langConverter($products->en_Description, $products->fr_Description) !!}
                        </div>
                    </div>

                    <div class="tab-pane p-2 fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        <div class="product-reviews">
                            <div class="review-top">
                                <div class="review-top-left">
                                    <span class="review-point">{{ productReviewNumber($products->id) }}</span>
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($products->id) !!}
                                    <span class="review-count">{{ productReviewerNumber($products->id) }}
                                        {{ __('Reviews') }}</span>
                                </div>
                            </div>

                            <div class="reviews-list">
                                @forelse($products->product_reviews as $review)
                                    <div class="single-review">
                                        <div class="reviewer">
                                            <div class="reviewer-wrap">
                                                <img class="reviewer-image"
                                                    src="{{ isset($review->user->image) ? asset(AdminProfilePicture() . $review->user->image) : Avatar::create($review->user->name)->toBase64() }}"
                                                    alt="reviewer-image" />
                                                <h4 class="reviewer-name">{{ $review->user->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="review-middle">
                                            <!-- This is server side code. User can not modify it. -->
                                            {!! reviewRating($review->id) !!}
                                            <span
                                                class="remiew-time">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</span>
                                        </div>
                                        <h4 class="review-meta"><span
                                                class="time">{{ \Carbon\Carbon::parse($review->created_at)->format('jS M Y') }}
                                            </span> by <a class="author"
                                                href="javascript:void(0)">{{ $review->user->name }}</a></h4>
                                        <p class="review-text">{{ $review->feedback }}</p>
                                    </div>
                                @empty
                                    <h1>{{ __('No Review Yet!') }}</h1>
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane p-2 fade" id="Shipping-Return" role="tabpanel"
                        aria-labelledby="Shipping-Return-tab">
                        <div class="shipping-return-area">
                            {!! langConverter($products->en_ShippingReturn, $products->fr_ShippingReturn) !!}
                        </div>
                    </div>
                    <div class="tab-pane p-2 fade" id="Additional-Information" role="tabpanel"
                        aria-labelledby="Additional-Information-tab">
                        {!! langConverter($products->en_AdditionalInformation, $products->fr_AdditionalInformation) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-single-area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="sub-title fw-bold">{{ __('Similar Products') }}</h5>
                        <h5 class="section-title fw-bold">{{ __('Related Products') }}</h5>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="{{ route('all.product') }}" class="see-btn">{{ __('See All') }}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($similar_product as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                        class="product-thumbnal"
                                        src="{{ asset(ProductImage() . $product->Primary_Image) }}" alt="product" /></a>
                                <div class="product-flags">
                                    @if ($product->ItemTag)
                                        <span class="product-flag sale">{{ $product->ItemTag }}</span>
                                    @endif
                                    @if ($product->Discount)
                                        <span
                                            class="product-flag discount">{{ __('-') }}{{ $product->Discount }}</span>
                                    @endif
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn MyWishList" data-id="{{ $products->id }}"
                                            href="javascript:void(0)" title="{{ __('Add To Compare') }}"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn CompareList" data-id="{{ $products->id }}"
                                            href="javascript:void(0)" title="{{ __('Add To Wishlist') }}"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="product-info text-center">
                                @foreach ($product->product_tags as $ppt)
                                    <h4 class="product-catagory">{{ $ppt->tag }}</h4>
                                @endforeach
                                <h3 class="product-name"><a class="product-link"
                                        href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                {!! productReview($product->id) !!}
                                <div class="product-price">
                                    <span class="regular-price">{{ currencyConverter($product->Price) }}</span>
                                    <span class="price">{{ currencyConverter($product->Discount_Price) }}</span>
                                </div>
                                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                    data-id="{{ $products->id }}">{{ __('Add To Cart') }} <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    {{-- <h1>{{ __('No related product found!') }}</h1> --}}
                @endforelse
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.product-thumbnail-image').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.product-images'
            });
            $('.product-images').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.product-thumbnail-image',
                dots: false,
                focusOnSelect: true
            });
        });
    </script>
@endsection
