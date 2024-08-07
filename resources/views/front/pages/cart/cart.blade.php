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
                                <tr class="">
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart_ajax_load">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($content as $item)
                                    <tr class="cart-page-item">
                                        <td>
                                            <div class="single-grid-product m-0">
                                                <div class="product-top">
                                                    <a href="{{ route('single.product', $item->options->slug ?? '') }}"><img
                                                            class="product-thumbnal"
                                                            src="{{ asset(ProductImage() . $item->options->image) }}"
                                                            alt="cart"></a>
                                                    <div class="product-flags">
                                                        <span
                                                            class="product-flag sale">{{ $item->options->item_tag }}</span>
                                                        <span
                                                            class="product-flag discount">-{{ $item->options->discount_parcent }}%</span>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <h3 class="product-name">
                                                        <a class="product-link"
                                                            href="{{ route('single.product', $item->options->slug ?? '') }}">{{ $item->name }}</a>
                                                    </h3>
                                                    @if ($item->options->color)
                                                        <div class="variable-single-item color-switch">
                                                            <div class="product-variable-color">
                                                                <label>
                                                                    <input name="modal-product-color" class="color-select"
                                                                        type="radio">
                                                                    <span
                                                                        style="background:{{ $item->options->color }};"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($item->options->size)
                                                        <ul class="size-switch">
                                                            <li class="single-size active">
                                                                {{ $item->options->size }}</li>
                                                        </ul>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price text-center">
                                                <h4 class="regular-price">
                                                    {{ currencyConverter($item->weight) }}
                                                </h4>
                                                <h3 class="price ">
                                                    <span class="mainPrice">{{ currencyConverter($item->price) }}</span>
                                                </h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-quantity input-group">
                                                <div class="increase-btn dec qtybutton btn qty_decrease"
                                                    data-id="{{ $item->rowId }}">-</div>
                                                <input class="qty-input cart-plus-minus-box qty_value" type="text"
                                                    name="qtybutton" id="qty_value" value="{{ $item->qty }}" readonly />
                                                <div class="increase-btn inc qtybutton btn qty_increase"
                                                    data-id="{{ $item->rowId }}">+</div>
                                            </div>
                                        </td>
                                        <td>
                                            <h1 class="cart-table-item-total SubTotalAmount">
                                                {{ currencyConverter($item->subtotal) }}
                                            </h1>
                                        </td>
                                        <td>
                                            <button class="delet-btn deleteItemCart" title="{{ __('Delete Item') }}"
                                                data-id="{{ $item->rowId }}">
                                                <img src="{{ asset('frontend/assets/images/close.svg') }}"
                                                    alt="close" />
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- <tbody>
                                <tr>
                                    <td class="d-flex align-items-center">
                                        <img src="{{ asset('frontend/assets/images/toys/bear.png') }}" alt=""
                                            class="img-fluid cart-imgs">
                                        <div class="my-auto cart-desc ms-2 d-md-block d-none">
                                            <h5>Lorem, ipsum.</h5>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="vertical-middle">
                                        <div class="d-flex">
                                            <button class="btn" onclick="decrement()"><i class="fa-solid fa-circle-minus"></i></button>
                                            <input type="number" id="input" class="form-control" disabled  max="100" min="1">
                                            <button class="btn" onclick="increment()"><i class="fa-solid fa-circle-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle text-center"><a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset('frontend/assets/images/toys/bear.png') }}" alt=""
                                            class="img-fluid cart-imgs">
                                        <div class="my-auto cart-desc ms-2 d-md-block d-none">
                                            <h5>Lorem, ipsum.</h5>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="vertical-middle">
                                        <div class="d-flex">
                                            <button class="btn" onclick="decrement()"><i class="fa-solid fa-circle-minus"></i></button>
                                            <input type="number" id="input" class="form-control" disabled  max="100" min="1">
                                            <button class="btn" onclick="increment()"><i class="fa-solid fa-circle-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle text-center"><a href="#"><i class="fa fa-trash"></i></a></td>

                                </tr>
                                <tr>
                                    <td class="d-flex">
                                        <img src="{{ asset('frontend/assets/images/toys/bear.png') }}" alt=""
                                            class="img-fluid cart-imgs">
                                        <div class="my-auto cart-desc ms-2 d-md-block d-none">
                                            <h5>Lorem, ipsum.</h5>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="vertical-middle">
                                        <div class="d-flex">
                                            <button class="btn" onclick="decrement()"><i class="fa-solid fa-circle-minus"></i></button>
                                            <input type="number" id="input" class="form-control" disabled  max="100" min="1">
                                            <button class="btn" onclick="increment()"><i class="fa-solid fa-circle-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle">
                                        <div class="cart_price">
                                            $25
                                        </div>
                                    </td>
                                    <td class="my-auto vertical-middle text-center"><a href="#"><i class="fa fa-trash"></i></a></td>

                                </tr>
                            </tbody> --}}
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
                            {{-- <button class="button button02 w-100"><span>Checkout</span></button> --}}

                            <a href="{{ route('checkout') }}"
                                class="button button02 w-100 form-btn proceed-to-checkout-btn btn">{{ __('Go') }}</a>

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
