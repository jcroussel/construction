<!-- Scripts -->
<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function () {
            document.body.className = document.body.className.replace(/\bis-loading\b/, '');
        });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }

    //Analytics
    var host = "<?php echo $_SERVER['HTTP_HOST']; ?>";
    if (host != "localhost") {

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76857926-1', 'auto');
        ga('send', 'pageview');
    }
</script>