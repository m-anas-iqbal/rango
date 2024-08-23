(function ($) {
    "use strict";

    let sizeid;
    $(document).ready(function () {
        //size value
        $('.activeSize').on('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
            sizeid = $(this).attr("data-size");
        });
    });


})(jQuery)
