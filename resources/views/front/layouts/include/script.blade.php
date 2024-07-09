<!-- Js file  -->
<script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/common.js') }}"></script>
@if (@$errors->any())
    <script>
        "use strict";
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    </script>
@endif
@if (env('APP_DEMO') == true)
    {{-- for sandbox sslcommerz --}}
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@else
    {{-- for live sslcommerz --}}
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endif
