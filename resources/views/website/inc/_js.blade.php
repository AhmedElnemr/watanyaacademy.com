

<!--Import jQuery before materialize.js-->
<script src="{{asset('website')}}/js/main.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.min.js"></script>
<script src="{{asset('website')}}/js/materialize.min.js"></script>
<script src="{{asset('website')}}/js/custom.js"></script>
<script src="{{asset('website')}}/js/jquery.countupcircle.min.js"></script>
<script src="{{asset('website')}}/js/owl.carousel.min.js"></script>

<script>
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#num1').CountUpCircle({
            duration: 10000, // In ms, default: 5000
            opacity_anim: false,
            step_divider: 1
        });
        $('#num2').CountUpCircle({
            duration: 10000, // In ms, default: 5000
            opacity_anim: false,
            step_divider: 1
        });
        $('#num3').CountUpCircle({
            duration: 10000, // In ms, default: 5000
            opacity_anim: false,
            step_divider: 1
        });
        $('#num4').CountUpCircle({
            duration: 10000, // In ms, default: 5000
            opacity_anim: false,
            step_divider: 1
        });
    });
</script>
<script>
    $('.home-partentes .owl-carousel').owlCarousel({
        rtl:true,
        loop:false,
        margin:12,
        dots:false,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

</script>
<script>
    $('.owl-carousel.news').owlCarousel({
        rtl:true,
        loop:true,
        margin:12,
        dots:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

</script>

@stack('web_js')
