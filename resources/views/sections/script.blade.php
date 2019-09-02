<!-- Js -->
<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/modernizr-2.6.2.min.js"></script>
<script src="/frontend/js/jquery.easing.1.3.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.waypoints.min.js"></script>
<script src="/frontend/js/sticky-kit.min.js"></script>
<script src="/frontend/js/main.js"></script>
<script>
    var btn = $('#backtotopbutton');

    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
    });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });
</script>