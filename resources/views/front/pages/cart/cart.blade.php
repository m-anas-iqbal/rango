@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Cart')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <style>
        @media (max-width : 500px){
            .cart-quantity .btn{
            padding: 0px 6px !important
        }
        }
    </style>
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
                        <div class="table-responsive">
                            <table class="table table-striped w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" >Product</th>
                                        <th scope="col" class="d-md-block d-none" > Name</th>
                                        <th scope="col" >Price</th>
                                        <th scope="col" >Quantity</th>
                                        <th scope="col" >Total</th>
                                        <th scope="col" >Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cart_ajax_load">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($content as $item)
                                        <tr class="cart-page-item align-middle">
                                            <td >
                                                <div class="single-grid-product m-0">
                                                    <div class="product-top text-start">
                                                        <a href="{{ route('single.product', $item->options->slug ?? '') }}">
                                                            <img class="product-thumbnail img-fluid w-100 rounded-3" style="max-width: 100px"
                                                                src="{{ asset(ProductImage() . $item->options->image) }}"
                                                                alt="cart">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td  class="d-md-table-cell d-none">
                                                <div class="product-info text-start">
                                                    <p class="product-name m-0">
                                                        <a class="product-link"
                                                            href="{{ route('single.product', $item->options->slug ?? '') }}">{{ $item->name }}</a>
                                                    </p>
                                                </div>
                                            </td>
                                            <td >
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
                                            {{-- @dd("Asd") --}}
                                            <td  id="qty_td">
                                                <div class="cart-quantity input-group">
                                                    <button class="btn btn-outline-secondary dec qtybutton qty_decrease totalAmount_hidden"  data-type="-" data-id="{{ $item->rowId }}">-</button>
                                                    <input class="qty-input cart-plus-minus-box form-control text-center qty_value totalAmount_hidden"
                                                    type="text" name="qtybutton" id="qty_value"
                                                    value="{{ $item->qty }}" readonly   />
                                                    <button class="btn btn-outline-secondary inc qtybutton qty_increase totalAmount_hidden"  data-type="+" data-id="{{ $item->rowId }}">+</button>
                                                </div>
                                            </td>
                                            <td >
                                                <h6 class="cart-table-item-total SubTotalAmount fw-bold">
                                                    {{ currencyConverter($item->subtotal) }}
                                                </h6>
                                            </td>
                                            <td >
                                                <button class="btn deleteItemCart" title="{{ __('Delete Item') }}" data-id="{{ $item->rowId }}">
                                                    <i class="fa-solid fa-trash r-text-red fs-3"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

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
                        <small style="font-size: 13px;color:red" id="error_msg"></small>
                    </div>
                </div>
            </div>
        </div>

        <div id="CartDeleteFromSession" data-url="{{ route('cart.delete') }}"></div>
        <div id="CartIncrementFromSession" data-url="{{ route('cart.increase') }}"></div>
        <div id="CartDecrementFromSession" data-url="{{ route('cart.decrease') }}"></div>
    </section>
    <script>

    </script>
<script>
$(document).ready(function(){
    function checkTotal() {
        let totalAmount = $('.totalAmount').text().replace('$', '').trim();
        totalAmount = parseFloat(totalAmount);
        let threshold = 50;
        if (totalAmount < threshold) {
            $('#error_msg').css('display', 'block').html('Shipping is available for orders over CAD 50. Please add more items to your cart to proceed.');
            $('.proceed-to-checkout-btn').addClass('disabled');
        } else {
            $('#error_msg').css('display', 'none').html('');
            $('.proceed-to-checkout-btn').removeClass('disabled');
        }
    }

    checkTotal();

    $(document).on('click', '.qty_increase, .qty_decrease', function(){
        setTimeout(function() {
            checkTotal();
        }, 500);
    });
});

</script>
@endsection
