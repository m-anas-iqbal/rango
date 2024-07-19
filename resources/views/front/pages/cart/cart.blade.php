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
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h2>Shipping</h2>
                        <div class="divider"></div>
                        <div class="shipping p-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0">Sub Total : </p>
                                        <p class="fw-bold mb-0"><span>$25.00</span></p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0">Sales Tax : </p>
                                        <p class="fw-bold mb-0"><span>$3.00</span></p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0">Shipping : </p>
                                        <p class="fw-bold mb-0"><span>$10.00</span></p>
                                    </div>
                                </li>
                            </ul>


                        </div>
                        <div class="total">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0"> Total : </p>
                                        <p class="fw-bold mb-0"><span>$37.00</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="checkout">
                            <button class="button button02 w-100"><span>Checkout</span></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
