<!-- Scripts -->
		<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
		<script>
			if ('addEventListener' in window) {
				window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
				document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
			}
			
			//Analytics
			var host = "<?php echo $_SERVER['HTTP_HOST']; ?>";
			if ( host != "localhost") {
				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript';
					ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
				
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-76857926-1']);
				_gaq.push(['_trackPageview']);
				_gaq.push(['_trackPageLoadTime']);
			}
						
		</script>