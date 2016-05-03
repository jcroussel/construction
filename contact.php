<?php 
	require_once("functions/formUtils.php");
	require_once("functions/seoUtils.php");
	addMetaValueSeo('Contactez-nous', 
					'N\'hésitez pas à nous contacter pour avoir plus d\'informations sur le relooking de meubles Bubu Déco et la décoration de votre intérieur',
					'contactez-nous, Bubu Déco, relooking de meubles, décorez votre intérieur, 59113, Seclin',
					'/contact.html');
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
$destinataire = 'contact@bubudeco.fr';
$destinataire2 = 'jcroussel59@gmail.com';
$destinataire3 = 'brunnhilde.dayez@gmail.com';

// Messages de confirmation du mail
$message_envoye = "Votre message est bien envoyé !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
 
// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis<br />et que l'email soit sans erreur.";
 
// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? cleanText($_POST['nom'],true)     : '';
$email   = (isset($_POST['email']))   ? cleanText($_POST['email'],true)   : '';
$objet   = (isset($_POST['objet']))   ? cleanText($_POST['objet'],true)   : '';
$message = (isset($_POST['message'])) ? cleanText($_POST['message'],false) : '';
$newsletter = (isset($_POST['newsletter'])) ? $_POST['newsletter'] : '';
 
// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : '';
$err_formulaire = false;
 
if (isset($_POST['envoi'])) {
	// les 4 variables sont remplies, on génère puis envoie le mail
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')) {
		$cible = $destinataire.';'.$destinataire2.';'.$destinataire3;
 
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('&lt;br&gt;','',$message);
		$message = str_replace('&lt;br /&gt;','',$message);
		$message = str_replace("&lt;","&lt;",$message);
		$message = str_replace("&gt;","&gt;",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail		
		sendEmail($nom, $email, $message, $objet, $cible);
		
		if ( $newsletter == "on") {
			$list = array (
		   		array($nom, $email)
			);
			writeCsvIntoFile($list,'data/newsletter.csv');
		}
		
		echo '<p>'.$message_envoye.'</p>';
		echo '<a href="/" class="button"><i class="fa fa-angle-right"></i> Retour à l\'accueil</a>';
	} else {
		$email   = (isset($_POST['email'])) ? cleanText($_POST['email'])   : '';
		// une des 3 variables (ou plus) est vide ...
		echo '<p class=\'error\'>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
};
 
if (($err_formulaire) || (!isset($_POST['envoi']))) {
	// afficher le formulaire
?>

    <form id="contact" method="post" action="">
    	<h2>Vos coordonnées</h2>
    	<p class="mentions">(* Champs obligatoires)</p>
    	<fieldset>
    		<p><input type="text" id="nom" name="nom" tabindex="1" placeholder="Votre nom*" value="<?php echo $nom; ?>" /></p>
    		<p><input type="text" id="email" name="email" tabindex="2" placeholder="Votre email*" value="<?php echo $email; ?>" /></p>
    	</fieldset>
     
    	<fieldset>
    		<p><input type="text" id="objet" name="objet" tabindex="3" placeholder="Votre objet*" value="<?php echo $objet; ?>" /></p>
    		<p><textarea id="message" name="message" tabindex="4" cols="30" rows="8" placeholder="Votre message*"><?php echo $message; ?></textarea></p>
    	</fieldset>
    	<div class="field">
    		<input type="checkbox" id="newsletter" name="newsletter" /><label for="newsletter">Je souhaite m'inscrire à la newsletter</label>
    	</div>
     
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