@section('counter')

@php
$specialoffer = SpecialOffer();
@endphp
@if($specialoffer->status == ACTIVE)


    <style>
        #countdown {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        #countdown .cd {
            font-size: 3vw
        }

        #countdown>div {
            margin: 0 10px;
            text-align: center;
        }

        #countdown>div span {
            background-color: var(--color-red);
            color: #fff;
            padding: 10px;
            border-radius: 5px
        }
    </style>
    <div class="py-5 r-bg-blue text-white parallax"
    style="--bg-image:url('https://www.proglobalevents.com/wp-content/uploads/bigstock-People-Planning-Concept-Entre-327380749-1-1024x576.jpg')">
    <div class="container py-5">
    <div id="countdown">
        <div class="cd">
            <span id="days"></span> Days
        </div>
        <div class="cd">
            <span id="hours"></span> Hours
        </div>
        <div class="cd">
            <span id="minutes"></span> Minutes
        </div>
        <div class="cd">
            <span id="seconds"></span> Seconds
        </div>
    </div>

</div>
</div>
@php
$specialoffer = SpecialOffer();
@endphp
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{ $specialoffer->start_date }}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="days", "hours", "minutes", and "seconds"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = `
                <div class="wrap">
                <h4>{{ $specialoffer->en_title }}</h4>
                <p{{ $specialoffer->description }}</p>
                <a href="{{ $specialoffer->url }}" class="btn btn-outline-light">Click Here</a>
                </div>
                `;
            }
        }, 1000);
    </script>
@endif
@endsection
