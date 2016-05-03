<?php 
	require_once("functions/formUtils.php");
	require_once("functions/seoUtils.php");
	addMetaValueSeo('Inscription newsletter', 
					'N\'hésitez pas à vous inscrire à la newsletter afin d\'en savoir plus sur le relooking de meubles Bubu Déco et la vente d\'objets personnalisés',
					'inscription, newsletter, Bubu Déco, objets personnalisés, meubles en bois relookés, décorez votre intérieur, 59113, Seclin',
					'/newsletter.html');
	include("components/header.php");
?>
	<body class="is-loading">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Main -->
			<section id="main">
				<?php include("components/top.php"); ?>
				
				<div>


<?php
// Messages de confirmation du mail
$message_envoye = "Votre demande a bien été prise en compte !";
 
// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis<br />et que l'email soit sans erreur.";
 
// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? cleanText($_POST['nom'],true)     : '';
$email   = (isset($_POST['email']))   ? cleanText($_POST['email'],true)   : '';
 
// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : '';
$err_formulaire = false;
 
if (isset($_POST['envoi'])) {
	if (($nom != '') && ($email != '') ) {
		
		$list = array (
		   array($nom, $email)
		);
		writeCsvIntoFile($list,'data/newsletter.csv');
		
		echo '<p>'.$message_envoye.'</p>';
		echo '<a href="/" class="button"><i class="fa fa-angle-right"></i> Retour à l\'accueil</a>';
	}
	else
	{
		$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
		// une des 3 variables (ou plus) est vide ...
		echo '<p class=\'error\'>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
};
 
if (($err_formulaire) || (!isset($_POST['envoi']))) {
	// afficher le formulaire
?>

    <form id="contact" method="post" action="">
    	<h2>Inscrivez-vous dès maintenant pour profiter prochainement de la newsletter Bubu Déco.</h2>
    	<p class="mentions">(* Champs obligatoires)</p>
    	<fieldset>
    		<p><input type="text" id="nom" name="nom" tabindex="1" placeholder="Votre nom*" value="<?php echo $nom; ?>" /></p>
    		<p><input type="text" id="email" name="email" tabindex="2" placeholder="Votre email*" value="<?php echo $email; ?>" /></p>
    	</fieldset>
     
    	<div><input type="submit" name="envoi" class="button" value="Envoyer" /></div>
    </form>
	
<?php	
};
?>
				</div>
				
			</section>

			<?php include("components/footer.php"); ?>

		</div>

		<?php include("components/scriptFooter.php"); ?>
		
	</body>
</html>