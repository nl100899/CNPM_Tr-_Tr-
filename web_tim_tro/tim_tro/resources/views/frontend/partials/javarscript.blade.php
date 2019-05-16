
<!-- Banner Slider js script file-->
<script src="{{asset('frontend_assets/js/JiSlider.js')}}"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({
            color: '#fff',
            start: 1,
            reverse: false
        }).addClass('ff')
    })
</script>
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- //Banner Slider js script file-->
<!-- simpleLightbox -->
<script src="{{asset('frontend_assets/js/simpleLightbox.js')}}"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();
</script>
<!-- //simpleLightbox -->
<!--  Testimonials js-->
<script defer src="{{asset('frontend_assets/js/jquery.flexslider.js')}}"></script>
<!--Start-slider-script-->
<script type="text/javascript">

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!--End-slider-script-->
<!--  //Testimonials js-->
<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="{{asset('frontend_assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/counterup.min.js')}}"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->


<!-- start-smoth-scrolling -->
<script  src="{{asset('frontend_assets/js/move-top.js')}}"></script>
<script  src="{{asset('frontend_assets/js/easing.js')}}"></script>
<script >
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script src="{{asset('frontend_assets/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
