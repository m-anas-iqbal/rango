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
                            Product Safety and certifications
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
                    <div class="col-md-12 text-center">
                        <h2 class="text-uppercase">Product Safety and Certifications</h2>
                        <p>At RANGO CART, we prioritize the safety and well-being of children by ensuring that all our toys, both wooden and plastic, meet the highest safety standards and certifications required in the USA and Canada. Our commitment to quality and safety begins with strict adherence to regulatory guidelines and standards set by both countries. In the USA, our toys comply with the Consumer Product Safety Improvement Act (CPSIA), which mandates stringent safety requirements for children's products. This includes testing for lead and other hazardous substances, ensuring that all our toys are free from harmful chemicals. Additionally, we adhere to the ASTM F963-17 standard, which covers the safety specifications for toy safety. This standard encompasses various aspects such as mechanical and physical properties, flammability, and labeling requirements.</p>
                        <p>In Canada, our products comply with the Canada Consumer Product Safety Act (CCPSA) and the specific regulations under the Toys Regulations (SOR/2011-17). These regulations are designed to prevent risks such as choking, ingestion, and exposure to hazardous substances. To ensure compliance, our toys undergo rigorous testing for mechanical and physical properties, flammability, toxic elements, and chemical composition. This includes tests for phthalates, which are commonly found in plastic toys and are strictly regulated to ensure they do not exceed the permissible limits.</p>
                        <p>Our wooden toys are crafted from high-quality, non-toxic materials, and we use water-based paints and finishes that are safe for children. These materials are not only environmentally friendly but also comply with the standards set by the Forest Stewardship Council (FSC), ensuring sustainable sourcing. For plastic toys, we use BPA-free plastics that meet the safety standards outlined by both the CPSIA and CCPSA, ensuring they are free from harmful chemicals and safe for prolonged use by children.</p>
                        <p>To further demonstrate our commitment to safety, we conduct regular audits and inspections of our manufacturing processes to ensure continuous compliance with these standards. We also work closely with independent third-party laboratories that are accredited by the CPSC (Consumer Product Safety Commission) in the USA and Health Canada to conduct rigorous safety testing on our products before they reach the market.</p>
                        <p>By obtaining and maintaining these certifications, RANGO CART guarantees that our toys are not only enjoyable and educational but also safe for children to use. Parents can have peace of mind knowing that when they choose RANGO CART, they are choosing toys that meet the highest safety standards in the industry. Our dedication to quality and safety reflects our mission to provide high-quality, eco-friendly educational toys that promote learning and creativity in children while ensuring their safety at every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end here  -->


@endsection
