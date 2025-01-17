<script src="/global/js/jquery.min.js"></script>
<script src="/global/js/jquery-migrate.js"></script>

<script src="/frontend/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/js/scrollUp.min.js"></script>

<script src="/frontend/js/owl.carousel.min.js"></script>
<script src="/global/js/waypoints.min.js"></script>
<script src="/frontend/js/jquery.counterup.min.js"></script>
<script src="/frontend/js/jquery.nice-select.min.js"></script>
<script src="/frontend/js/lucide.min.js"></script>
<script src="/frontend/js/magnific-popup.min.js"></script>
<script src="/frontend/js/aos.js"></script>
<script src="/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="/frontend/js/main.js?var=5"></script>
<script src="/frontend/js/cookie.js"></script>
<script src="/global/js/custom.js?var=5"></script>
@if(setting('site_animation','permission'))
    <script>
        (function ($) {
            'use strict';
            // AOS initialization
            AOS.init();
        })(jQuery);
    </script>
@endif


@if(setting('back_to_top','permission'))
    <script>
        (function ($) {
            'use strict';
            // To top
            $.scrollUp({
                scrollText: '<i class="fas fa-caret-up"></i>',
                easingType: 'linear',
                scrollSpeed: 500,
                animation: 'fade'
            });
        })(jQuery);
    </script>
@endif

@notifyJs
@yield('script')
@stack('script')

@php
    $googleAnalytics = plugin_active('Google Analytics');
    $tawkChat = plugin_active('Tawk Chat');
@endphp
@if($googleAnalytics)
    @include('frontend.plugin.google_analytics',['GoogleAnalyticsId' => json_decode($googleAnalytics?->data,true)['app_id']])
@endif

@if($tawkChat)
    @include('frontend.plugin.tawk',['data' => json_decode($tawkChat->data, true)])
@endif
