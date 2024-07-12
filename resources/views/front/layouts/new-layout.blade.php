<!DOCTYPE html>
<html lang="en">
@include('front.layouts.include.head')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">
    <!-- Preloader Area Start -->
    <div id="preloader" class="d-none">
        <div id="status">
            <img src="{{ asset(IMG_PRELOADER_PATH . $allsettings['preloader']) }}" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <section class="topbar r-bg-red text-white py-2">
        <div class="d-md-flex justify-content-between container">
            <div class="wrap text-center">
                Email: <a href="mailto:info@rangocart.com">info@rangocart.com</a>
                |
                Call: <a href="tel:">123 123 1231</a>
            </div>
            <div class="wrap d-flex gap-4 justify-content-center justify-content-md-end mt-2 mt-md-0">
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-pinterest"></i></a>
                <a href="">My Account</i></a>
            </div>
        </div>
    </section>
    <section class="navigation container">
        <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/logo/logo.png') }}"
                    class="img-fluid logo" alt="logo rango"></a>
            <button class="btn d-md-none btn-mobile-nav"><i class="fa-solid fa-bars-staggered"></i></button>
            <form class="searchGroup d-none d-md-flex">
                <input type="text" placeholder="Search" class="small">
                <button class=""><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="list-unstyled gap-4 m-0 d-none d-md-flex">
                <li class="nav-item">
                    <a class="" href="{{route('front')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{route('all.product')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{route('about.us')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{route('contact.us')}}">Contact</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="" href="#">Blog</a>
                </li> --}}
                <li>
                    <a href="{{route('front')}}"><i class="fa-solid fa-cart-shopping r-text-blue fs-4"></i></a>
                </li>
            </ul>
        </div>
        <div class="mobile-nav">
            <p class="mobile-close position-absolute end-0 top-0 m-3 fs-1 fw-bold text-danger">✕</p>
            <ul class="list-unstyled mt-5">
                <li class="nav-item">
                    <a class="" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="" href="#">Blog</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-cart-shopping r-text-blue fs-4"></i></a>
                </li>
            </ul>
        </div>
    </section>
    @yield('content')
    <div id="AddToCompareItemUrl" data-url="{{ route('compare.add') }}"></div>
    <div id="AddToCartIntoSession" data-url="{{ route('add.to.cart') }}"></div>
    <div id="productWishlistUrl" data-url="{{ route('wishlist.add') }}"></div>
    <div id="currency-price-url" data-url="{{ route('currency_price') }}"></div>
    <div id="currency-symbol-url" data-url="{{ route('currency_symbol') }}"></div>
    <div id="productImgAsset" data-url="{{ asset(ProductImage()) }}"></div>

    @include('front.layouts.include.footer')

    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">{{ __('Track Order') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('checkout.order_track') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Order Number') }}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="order_number" placeholder="{{ __('Enter order number') }}">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">{{ __('Track') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">{{ __('Track Order') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('checkout.order_track') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">{{ __('Order Number') }}</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                name="order_number" placeholder="{{ __('Enter order number') }}">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">{{ __('Track') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="">{{ __('Login') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.sign.modal') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="{{ __('Email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="{{ __('Password') }}">
                        </div>

                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- route url --}}
    <div id="DoNotSubscribe" data-url="{{ route('do.not.subscribe') }}"></div>
    <div id="SubscribeStore" data-url="{{ route('admin.subscribe.store') }}"></div>
    {{-- include file --}}
    @include('front.layouts.include.script')
    @stack('post_script')
    {{-- @include('sweetalert::alert') --}}

    <script>
        let tl = gsap.timeline()
        tl.to('.mobile-nav',{
                left:0,
                duration:0.5
            })
        tl.from('.mobile-nav li',{
            x:-50,
            stagger:0.1,
            opacity:0,
            duration:0.3
        })
        tl.pause()
        $(".btn-mobile-nav").on('click',function(){
            tl.play()
        })
        $(".mobile-close").on('click',function(){
            tl.reverse()
        })
    </script>
</body>

</html>
