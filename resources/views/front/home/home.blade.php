<div class="hero-section overflow-hidden">
    <div class="top">
        <h2><span class="r-text-blue">R</span><span class="r-text-green">A</span><span>N</span><span
                class="r-text-red">G</span><span class="r-text-yellow">O</span></h2>
    </div>
    <div class="center h-100 container">
        <div class="row h-100 align-items-center">
            <div class="col-md-6 text-white content">
                <h5 class="fw-bold small">Your One-Stop Shop for Toys!</h5>
                <h1 class="fw-bold">RANGO CART</h1>
                <p class="small">Discover a world of fun and adventure with our wide range of toys for all ages! From
                    educational toys to the latest action figures, we've got something special for every child. Shop now
                    and bring joy home!</p>
                <a href="" class="btn btn-outline-light">New Arrivals</a>
                <a href="" class="btn btn-outline-light">Shop Now</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/images/hero.svg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="bottom">
        <h2><span class="r-text-blue">R</span><span class="r-text-green">A</span><span>N</span><span
                class="r-text-red">G</span><span class="r-text-yellow">O</span></h2>
    </div>
</div>

@include('components.frontend.counter')
<div class="py-5 r-bg-blue text-white parallax"
    style="--bg-image:url('https://www.proglobalevents.com/wp-content/uploads/bigstock-People-Planning-Concept-Entre-327380749-1-1024x576.jpg')">
    <div class="container py-5">
        @yield('counter')
    </div>
</div>
<div class="container cate_card my-5">
    <div class="row">
      @forelse (Category_Des_Icon() as $item)
      <div class="col-md-6 p-4">
          <a class="card p-5 r-bg-green rounded-20px" href="{{ route('category.product', $item->id) }}">
              <h1 class="fw-bold py-3 text-white">{{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</h1>
              <img src="{{ $item->Category_Icon }}"
                  class="position-absolute translate-middle-y" alt="{{ $item->fr_Category_Name }}">
          </a>
      </div>
      @empty

      @endforelse

    </div>
</div>
@if ($allsettings['new_arrival'] == ACTIVE)
<div class="container home_products my-5">
    <div class="d-flex justify-content-between">
        <h3 class="fw-bold">New Arrivals</h3>
        <a href="" class="fw-bold">See All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <hr class="start-border">
    <div class="product-items">
        <div class="row">
            @forelse ($new_arrivals as $product)
                <div class="col-md-3 p-3">
                    <DIV class="card text-center p-3 shadow rounded-10px border-0">
                        <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" class="img-fluid" alt="{{ __('product') }}">
                        <h4 class="w-fit mx-auto"><a class="product-link"
                            href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a></h4>
                        <div class="price-label w-fit small r-bg-green rounded-pill mx-auto py-1 px-2 text-white">
                            <span class="regular-price">
                                {{ currencyConverter($product->Price) }}</span>
                            <span class="price">
                                {{ currencyConverter($product->Discount_Price) }}</span>
                        </div>
                    </DIV>
                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                    data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                        class="icon fas fa-plus-circle"></i></a>
                </div>
                @empty

                @endforelse
            {{-- <div class="col-md-3 p-3">
                <DIV class="card text-center p-3 shadow rounded-10px border-0">
                    <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" class="img-fluid" alt="{{ __('product') }}">
                    <h4 class="w-fit mx-auto"><a class="product-link"
                        href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a></h4>
                    <div class="price-label w-fit small r-bg-green rounded-pill mx-auto py-1 px-2 text-white">
                        <span class="regular-price">
                            {{ currencyConverter($product->Price) }}</span>
                        <span class="price">
                            {{ currencyConverter($product->Discount_Price) }}</span>
                    </div>
                </DIV>
                <input type="hidden" name="quantity" value="1" id="product_quantity">
                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a>
            </div> --}}

        </div>
    </div>
</div>
@endif
@if ($allsettings['best_selling'] == ACTIVE)
<div class="container home_products my-5">
    <div class="d-flex justify-content-between">
        <h3 class="fw-bold">BEST SELLING</h3>
        <a href="" class="fw-bold">See All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <hr class="start-border">
    <div class="product-items">
        <div class="row">
           @forelse ($best_sellings as $product)
            <div class="col-md-3 p-3">
                <DIV class="card text-center p-3 shadow rounded-10px border-0">
                    <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" class="img-fluid" alt="{{ __('product') }}">
                    <h4 class="w-fit mx-auto"><a class="product-link"
                        href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a></h4>
                    <div class="price-label w-fit small r-bg-green rounded-pill mx-auto py-1 px-2 text-white">
                        <span class="regular-price">
                            {{ currencyConverter($product->Price) }}</span>
                        <span class="price">
                            {{ currencyConverter($product->Discount_Price) }}</span>
                    </div>
                </DIV>
                <input type="hidden" name="quantity" value="1" id="product_quantity">
                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a>
            </div>
         @empty

      @endforelse
        </div>
    </div>
</div>
@endif
@if ($allsettings['featured_items'] == ACTIVE)
<div class="container home_products my-5">
    <div class="d-flex justify-content-between">
        <h3 class="fw-bold">Featured Products</h3>
        <a href="" class="fw-bold">See All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <hr class="start-border">
    <div class="product-items">
        <div class="row">
           @forelse ($featured_products as $product)
            <div class="col-md-3 p-3">
                <DIV class="card text-center p-3 shadow rounded-10px border-0">
                    <img src="{{ asset(ProductImage() . $product->Primary_Image) }}" class="img-fluid" alt="{{ __('product') }}">
                    <h4 class="w-fit mx-auto"><a class="product-link"
                        href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a></h4>
                    <div class="price-label w-fit small r-bg-green rounded-pill mx-auto py-1 px-2 text-white">
                        <span class="regular-price">
                            {{ currencyConverter($product->Price) }}</span>
                        <span class="price">
                            {{ currencyConverter($product->Discount_Price) }}</span>
                    </div>
                </DIV>
                <input type="hidden" name="quantity" value="1" id="product_quantity">
                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a>
            </div>
         @empty

      @endforelse
        </div>
    </div>
</div>
@endif

<div class="parallax d-grid place-content-center r-bg-red text-white py-5"
    style="--bg-image: url('https://t3.ftcdn.net/jpg/03/23/24/82/360_F_323248211_HNMfkovpijljYs15WasG0XPCTYY2TKrb.jpg');">
    <div class="container p-5 text-center">
        <h2>Blah bla bla</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quam autem excepturi suscipit eum nisi,
            nihil voluptatem, natus laudantium aspernatur possimus. Numquam cum dolor illum.</p>
        <button class="btn btn-outline-light">Read More</button>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mt-md-5">
            <img src="{{ asset('frontend/assets/images/about/img3.jpeg') }}" alt=""
                class="img-fluid rounded">
        </div>
        <div class="col-md-6 my-auto">
            <h2 class="fs-32 text-capitalize">Unlock Creativity and endless adventures</h2>
            <div class="divider"></div>
            <p>Our team at <span class="r-text-red">RANGO CART</span> is made up of passionate individuals who are
                dedicated to creating the best toys for children. We have designers, engineers, and play experts who
                work together to ensure that our products are both fun and educational.</p>
            <a href="" class="fs-13 fw-bold underline">Explore Our Toys <img
                    src="{{ asset('frontend/assets/images/about/arrow.svg') }}" alt=""></a>

        </div>
    </div>
</div>

<script>
    let hero_tl = gsap.timeline({});
    hero_tl.from('.hero-section .top h2 span', {
        scale: 0,
        ease: "bounce.out",
        duration: 1,
        stagger: 0.2
    }, 'anim0')
    hero_tl.from('.hero-section .bottom h2 span', {
        scale: 0,
        ease: "bounce.out",
        duration: 1,
        stagger: 0.2
    }, 'anim0')
    hero_tl.to('.hero-section .top', {
        top: '-100%',
        ease: "slow(0.7,0.7,false)",
        duration: 1,
        delay: 1.5,
    }, "anim1")
    hero_tl.to('.hero-section .bottom', {
        top: '150%',
        ease: "slow(0.7,0.7,false)",
        duration: 1,
        delay: 1.5,
    }, "anim1")
    hero_tl.from('.center .content *', {
        x: -50,
        opacity: 0,
        ease: "slow(0.7,0.7,false)",
        stagger: 0.1
    }, 'anim_center')
    hero_tl.from('.center img', {
        x: -50,
        scale: 0,
        opacity: 0,
        ease: "slow(0.7,0.7,false)",
    }, 'anim_center')
</script>
