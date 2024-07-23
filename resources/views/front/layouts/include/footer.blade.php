<footer class="r-bg-gradient">
    <div class="container">
        <div class="row align-items-center text-white pt-4">
            <div class="col-md-3">
                <img src="{{ asset('frontend/assets/images/logo/logo-white.png') }}" class="img-fluid w-50" alt="">
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled gap-4 m-0 d-md-flex justify-content-center">
                    <li class="nav-item">
                        <a class="" href="{{route('front')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="{{route('all.product')}}">Categories</a>
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
                </ul>
            </div>
            <div class="col-md-3">
                <div class="wrap d-flex gap-4 justify-content-center">
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest"></i></a>

                </div>
            </div>
        </div>
    </div>
    <hr class="bg-white">
    <div class="bottom-bar pb-3">
        <div class="container py-1">
            <div class="d-flex align-items-center justify-content-between text-white">
                <p class="m-0 small">Copyright &copy; - Developed by <a href="https:codexwriter.com"
                        class="fw-bold">Codexwriter</a></p>
                <div class="wrap">
                    {{-- <a href="{{route('privacy')}}" class="small">Privacy Policy</a> --}}
                    {{-- | --}}
                    <a href="{{route('terms')}}" class="small">Terms & Conditions</a>
                    |
                    <a href="{{route('safety')}}" class="small">Product Safety and Certification</a>
                </div>
            </div>
        </div>
    </div>
</footer>
