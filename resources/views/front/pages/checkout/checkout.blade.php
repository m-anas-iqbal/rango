@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Checkout')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
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
                            <img src="https://assets.website-files.com/5badda2935e11303a89a461e/5baf79eb570913b9781a96f2_arrow-right-mini-icon.svg"
                            alt="" class="breadcrumbs-arrow">
                        </div>
                        <div>Checkout</div>
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

                <div class="col-md-8">
                    <h2>Checkout</h2>
                    <div class="divider"></div>
                    <div id="form">
                        <h3 class="fs-17">Billing Address:</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="fname" class="fw-bold fs-13">First Name:</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="lname" class="fw-bold fs-13">Last Name:</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="fw-bold fs-13">E-mail:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="phone" class="fw-bold fs-13">Phone Number:</label>
                                    <input type="number" class="form-control" id="phone">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="address" class="fw-bold fs-13">Billing Address:</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="country" class="fw-bold fs-13">Country:</label>
                                    <select name="" id="country" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select Country</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="state" class="fw-bold fs-13">State:</label>
                                    <select name="" id="state" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select State</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="city" class="fw-bold fs-13">City:</label>
                                    <select name="" id="city" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select City</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="postal" class="fw-bold fs-13">Postal Code:</label>
                                    <input type="text" class="form-control" id="postal">
                                </div>
                                <div class="col-md-12 d-flex mt-3">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox" class="fw-bold fs-13 ms-3">Billing Address Same As Shipping Address</label>
                                </div>
                            </div>
                            <div id="shipping"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="fs-17 fw-bold mt-3 mb-2">Payment Method</h2>
                                </div>
                                <div class="col-md-12">
                                    <label for="paypal" class="input_label">
                                        <input type="radio" name="radio" id="paypal" class="form-check-input">
                                        <i class="fa-brands fa-paypal mx-3 r-text-blue"></i> Pay via Paypal
                                    </label>
                                    <label for="cod" class="input_label">
                                        <input type="radio" name="radio" id="cod" class="form-check-input">
                                        <i class="fa-solid fa-money-bill mx-3 r-text-green"></i> Cash On Delivery
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
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
                        <button class="button button02 w-100"><span>Place Order</span></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $( document ).ready(function() {
        $('#checkbox').change(function() {

                if (this.checked) {
                    // Append HTML
                    $('#shipping').append(`
                    <div class = "row">
                        <h3 class = "fs-17 mt-3 mb-1">Shipping Address</h3>
                    <div class="col-md-12 mt-3">
                                    <label for="s_address" class="fw-bold fs-13">Shipping Address:</label>
                                    <input type="text" class="form-control" id="s_address">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="s_country" class="fw-bold fs-13">Country:</label>
                                    <select name="" id="s_country" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select Country</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="s_state" class="fw-bold fs-13">State:</label>
                                    <select name="" id="s_state" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select State</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="s_city" class="fw-bold fs-13">City:</label>
                                    <select name="" id="s_city" class="form-select fs-13 fw-bold">
                                        <option value="0">Please Select City</option>
                                        <option value="1">Canada</option>
                                        <option value="2">USA</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="s_postal" class="fw-bold fs-13">Postal Code:</label>
                                    <input type="text" class="form-control" id="s_postal">
                                </div>
                                </div>
                    `);
                } else {
                    // Optionally, you can remove the content when unchecked
                    $('#shipping').empty();
                }
            });
});
</script>
@endsection
