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
                            Terms and Conditions
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
                        <h2 class="text-uppercase">Terms and Conditions</h2>
                        <small><i><strong>Effective Date: July 1, 2024</strong></i></small>
                        <p>At Rango Cart, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our physical store or our website (www.rangocart.com) and use our services. Please read this privacy policy carefully.</p>
                        <h3 class="my-4">1. Information We Collect</h3>
                        <div class="ms-3">
                                <h4>1.1 Personal Information</h4>
                            <p>We may collect personal information that you voluntarily provide to us when you register on the website, place an order, subscribe to our newsletter, respond to a survey, fill out a form, or visit our physical store. This information may include:</p>
                            <ul>
                                <li>Name</li>
                                <li>Email address</li>
                                <li>Mailing address</li>
                                <li>Phone number</li>
                                <li>Payment information (credit/debit card details)</li>
                            </ul>

                            <h4>1.2 Non-Personal Information</h4>
                            <p>We may collect non-personal information about you whenever you interact with our website. Non-personal information may include:</p>
                            <p><em><strong>Browser name</strong></em></p>
                            <p>The type of computer and technical information about your means of connection to our website, such as the operating system and the Internet service providers utilized, and other similar information.</p>

                            <h4>1.3 Cookies</h4>
                            <p>Our website may use "cookies" to enhance the user experience. Your web browser places cookies on your hard drive for record-keeping purposes and sometimes to track information about you. You can choose to set your web browser to refuse cookies or to alert you when cookies are being sent. If you do so, note that some parts of the website may not function properly.</p>

                        </div>


                        <h3 class="my-4">2. How We Use Your Information</h3>
                        <div class="ms-3">
                            <h4>2.1 To Process Transactions</h4>
                            <p>We may use the information you provide about yourself when placing an order to process that order. We do not share this information with outside parties except to the extent necessary to provide the service.</p>

                            <h4>2.2 To Improve Customer Service</h4>
                            <p>Your information helps us to more effectively respond to your customer service requests and support needs.</p>

                            <h4>2.3 To Personalize User Experience</h4>
                            <p>We may use information in the aggregate to understand how our users as a group use the services and resources provided on our website.</p>

                            <h4>2.4 To Send Periodic Emails</h4>
                            <p>The email address you provide for order processing may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc.</p>

                        </div>
                        <h3 class="my-4">3. Disclosure of Your Information</h3>
                        <ul>
                            <li><strong>Service Providers:</strong> We may share your information with third-party service providers that assist us with various tasks, such as payment processing, shipping, data analysis, and marketing.</li>
                            <li><strong>Legal Obligations:</strong> We may disclose your information if required by law or in response to valid requests by public authorities.</li>
                            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred as part of that transaction.</li>
                        </ul>

                        <h3 class="my-4">4. Data Security</h3>
                        <p>We use various security measures to protect your personal information. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security. However, we adopt appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information, username, password, transaction information, and data stored on our website.</p>

                        <h3 class="my-4">5. Your Rights</h3>
                        <p>You have the right to access, correct, or delete your personal information. You can update your preferences or opt-out of certain communications by contacting us at <a href="mailto:info@rangocart.com">info@rangocart.com</a>.</p>

                        <h3 class="my-4">6. Changes to This Privacy Policy </h3>
                        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on our Site. You are advised to review this Privacy Policy periodically for any changes.</p>

                        <h3 class="my-4">7. Contact Us</h3>
                        <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:info@rangocart.com">info@rangocart.com</a>, and we will make every effort to resolve your concerns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->


@endsection
