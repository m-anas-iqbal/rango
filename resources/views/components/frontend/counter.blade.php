@section('counter')
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

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jul 12, 2024 02:33:00").getTime();

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
                <h4>Lorem, ipsum dolor.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor mollitia, aperiam est quos cum nisi explicabo, id
                    debitis officia necessitatibus, iste a rem non nesciunt.</p>
                <a href="" class="btn btn-outline-light">Click Here</a>
                </div>
                `;
            }
        }, 1000);
    </script>
@endsection
