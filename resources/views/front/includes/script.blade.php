
<!-- COMMON SCRIPTS -->
<script src="{{ asset('front/js/common_scripts.js') }}"></script>
<script src="{{ asset('front/js/functions.js') }}"></script>
<script src="{{ asset('front/assets/validate.js') }}"></script>
<!-- Masonry Filtering -->
<script src="{{ asset('front/js/isotope.min.js') }}"></script>
<script>
    $(window).on('load',function(){
        var $container = $('.isotope-wrapper');
        $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
    });

    $('.date_filter').on( 'click', 'input', 'change', function(){
        var selector = $(this).attr('data-filter');
        $('.isotope-wrapper').isotope({ filter: selector });
    });
</script>
