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

                        <div>
                            Return and Refund Policy
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="terms" class="my-3 my-md-5">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Return and Refund Policy</h1>

                        <p>At Rango Cart, we strive to ensure your satisfaction with every purchase. However, if you need to return an item, please review our policy below:</p>

                        <h2>Terms of Return</h2>
                        <ul>
                            <li>We accept returns of unopened and unused products within 7 days of purchase.</li>
                            <li>Items must be returned in their original packaging, with all tags and labels attached.</li>
                            <li>The product must be in the same condition as when received, with no signs of wear or damage.</li>
                        </ul>

                        <h2>State of Return</h2>
                        <ul>
                            <li>Products should be unused and in their original condition.</li>
                            <li>Any items that are damaged, worn, or altered will not be eligible for return.</li>
                        </ul>

                        <h2>Reason for Return</h2>
                        <ul>
                            <li>Returns are accepted for damaged, defective, or incorrect products received.</li>
                            <li>If you received a product that does not match your order or is defective, please contact us immediately.</li>
                        </ul>

                        <h2>Process for Return</h2>
                        <ul>
                            <li>To initiate a return, please contact our customer service team at <a href="mailto:info@rangocart.com">info@rangocart.com</a> within 7 days of receiving your product.</li>
                            <li>Provide your order number, details of the product you wish to return, and the reason for the return.</li>
                            <li>Our customer service team will guide you through the return process and provide you with a return authorization.</li>
                        </ul>

                        <h2>Process of Refund</h2>
                        <ul>
                            <li>Once we receive your returned item, our team will inspect it to ensure it meets the return criteria.</li>
                            <li>Refunds will be processed within 12 - 15 days of receiving the returned product.</li>
                            <li>Refunds will be issued to the original payment method used for the purchase.</li>
                            <li>Please note that shipping costs are non-refundable, and the cost of return shipping will be borne by the customer unless the return is due to a defect or error on our part.</li>
                        </ul>

                        <h2>Contact Details</h2>
                        <p>For any questions or concerns regarding our return and refund policy, please contact us at <a href="mailto:info@rangocart.com">info@rangocart.com</a>. We are here to assist you and ensure a smooth return process.</p>

                        <p>We value your business and are committed to providing you with the best shopping experience at Rango Cart. Thank you for choosing us!</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->


@endsection
