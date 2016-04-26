<!DOCTYPE HTML>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		$_GET['titlePage'] = 'Newsletter';
		$_GET['descPage'] = 'N\'hésitez pas à vous inscrire à la newsletter sur le relooking de meubles Bubu Déco';
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
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'contact@bubudeco.fr';
$destinataire2 = 'jcroussel59@gmail.com';
$destinataire3 = 'brunnhilde.dayez@gmail.com';
 
// Messages de confirmation du mail
$message_envoye = "Votre demande a bien été prise en compte !";
 
// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis<br />et que l'email soit sans erreur.";
  
/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text,$replaceBr)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}
 
	if( $replaceBr == true ) {
		$text = nl2br($text);
	}
	return $text;
};  
  
/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}
 
// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'],true)     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'],true)   : '';
//$ville   = (isset($_POST['ville']))   ? Rec($_POST['ville'],true)   : '';
 
// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin
 
if (isset($_POST['envoi']))
{
	if (($nom != '') && ($email != '') )
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();
 
		$cible = $destinataire.';'.$destinataire2.';'.$destinataire3;
 
		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
		$message = "Une demande d'inscription à la newsletter a été faite !\n\n".$nom."\n".$email;
		/*foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, "Inscription newsletter ".$email, $message, $headers))
				$num_emails++;
		}*/
		
		$list = array (
		   array($nom, $email)
		);

		$fp = fopen('data/newsletter.csv', 'a');

		foreach ($list as $fields) {
			fputcsv($fp, $fields,";");
		}

		fclose($fp);
		
		
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
 
if (($err_formulaire) || (!isset($_POST['envoi'])))
{
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