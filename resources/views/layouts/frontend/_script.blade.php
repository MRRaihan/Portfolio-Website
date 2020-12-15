<!-- js -->
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!--  light box js -->
<script src="{{asset('assets/frontend/js/lightbox-plus-jquery.min.js')}}"> </script>
<!-- //light box js-->
<!-- for-Testimonials -->
<!-- required-js-files-->
<link href="{{asset('assets/frontend/css/owl.carousel.css')}}" rel="stylesheet">
<script src="{{asset('assets/frontend/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<!--//required-js-files-->
<!-- //for-Testimonials -->


<!-- start-smoth-scrolling -->
<script src="{{asset('assets/frontend/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
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
<!-- start-smoth-scrolling -->
<script>
    setTimeout(function() {
        $('.loader_bg').fadeToggle();
    }, 5000);
</script>
