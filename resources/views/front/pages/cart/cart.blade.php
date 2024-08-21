@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Cart')
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
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg"
                                alt="" class="breadcrumbs-arrow">
                            <div>
                                Cart
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cart" class="my-md-5 my-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8 col-12">
                        <h2 class="fs-32">Cart</h2>
                        <div class="divider"></div>
                        <table class="table table-striped table-responsive w-100">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">Product</th>
                                    <th scope="col" colspan="2" style="width: 30%;">Product Name</th>
                                    <th scope="col" style="width: 10%;">Price</th>
                                    <th scope="col" style="width: 20%;">Quantity</th>
                                    <th scope="col" style="width: 15%;">Total</th>
                                    <th scope="col" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart_ajax_load">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($content as $item)
                                    <tr class="cart-page-item align-middle">
                                        <td style="width: 10%;">
                                            <div class="single-grid-product m-0">
                                                <div class="product-top text-start">
                                                    <a href="{{ route('single.product', $item->options->slug ?? '') }}">
                                                        <img class="product-thumbnail img-fluid w-100 rounded-3"
                                                            src="{{ asset(ProductImage() . $item->options->image) }}"
                                                            alt="cart">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td colspan="2" style="width: 30%;">
                                            <div class="product-info text-start">
                                                <p class="product-name m-0">
                                                    <a class="product-link"
                                                        href="{{ route('single.product', $item->options->slug ?? '') }}">{{ $item->name }}</a>
                                                </p>
                                            </div>
                                        </td>
                                        <td style="width: 10%;">
                                            <div class="product-price">
                                                @if (currencyConverter($item->price) == currencyConverter($item->options->discount_price))
                                                    <span class="price fw-bold fs-4">{{ currencyConverter($item->options->discount_price) }}</span>
                                                @else
                                                    <div>
                                                        <span class="price fw-bold fs-6">{{ currencyConverter($item->price) }}</span>
                                                        {{-- <span class="regular-price text-danger text-decoration-line-through fw-bold fs-6">{{ currencyConverter($item->options->discount_price) }}</span> --}}
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td style="width: 20%;">
                                            <div class="cart-quantity input-group">
                                                <button class="btn btn-outline-secondary qty_decrease" data-id="{{ $item->rowId }}">-</button>
                                                <input class="qty-input form-control text-center" type="text" value="{{ $item->qty }}" readonly />
                                                <button class="btn btn-outline-secondary qty_increase" data-id="{{ $item->rowId }}">+</button>
                                            </div>
                                        </td>
                                        <td style="width: 15%;">
                                            <h6 class="cart-table-item-total SubTotalAmount fw-bold">
                                                {{ currencyConverter($item->subtotal) }}
                                            </h6>
                                        </td>
                                        <td style="width: 15%;">
                                            <button class="btn deleteItemCart" title="{{ __('Delete Item') }}" data-id="{{ $item->rowId }}">
                                                <i class="fa-solid fa-trash r-text-red fs-3"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-4">
                        <h2>Proceed To Checkout</h2>
                        <div class="divider"></div>
                        <div class="total">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0"> Total : </p>
                                        <p class="fw-bold mb-0"><span
                                                class="cart-page-final-total totalAmount ">{{ currencyConverter(subtotal()) }}</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="checkout">
                            @if (count($content) > 0)
                                <a href="{{ route('checkout') }}"
                                    class="button button02 w-100 form-btn proceed-to-checkout-btn btn">{{ __('Go') }}</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="CartDeleteFromSession" data-url="{{ route('cart.delete') }}"></div>
        <div id="CartIncrementFromSession" data-url="{{ route('cart.increase') }}"></div>
        <div id="CartDecrementFromSession" data-url="{{ route('cart.decrease') }}"></div>
    </section>
    <script>
        function increment() {
            document.getElementById('input').stepUp();
        }

        function decrement() {
            document.getElementById('input').stepDown();
        }
    </script>
@endsection
