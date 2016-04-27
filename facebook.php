<!DOCTYPE HTML>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		$_GET['titlePage'] = 'Réseaux sociaux';
		$_GET['descPage'] = 'Retrouvez Bubu Déco sur les différents réseaux sociaux';
		include("components/header.php"); ?>
	<body class="is-loading">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Main -->
			<section id="main">
				<?php include("components/top.php"); ?>
				
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				
				<div class="fb-page" data-href="https://www.facebook.com/Bubu-D&#xe9;co-630107567136751/" data-tabs="timeline" data-height="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>
				
			</section>

			<?php include("components/footer.php"); ?>

		</div>

		<?php include("components/scriptFooter.php"); ?>
		
	</body>
</html>