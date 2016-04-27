<!DOCTYPE HTML>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<?php 
		$_GET['titlePage'] = 'Contactez-nous';
		$_GET['descPage'] = 'N\'hésitez pas à nous contacter pour avoir plus d\'informations sur le relooking de meubles Bubu Déco';
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
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'contact@bubudeco.fr';
$destinataire2 = 'jcroussel59@gmail.com';
$destinataire3 = 'brunnhilde.dayez@gmail.com';
 
// copie ? (envoie une copie au visiteur)
$copie = 'non';
 
// Messages de confirmation du mail
$message_envoye = "Votre message est bien envoyé !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
 
// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis<br />et que l'email soit sans erreur.";
 
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
 
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
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'],true)   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message'],false) : '';
$newsletter = (isset($_POST['newsletter'])) ? $_POST['newsletter'] : '';
 
// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin
 
if (isset($_POST['envoi']))
{
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();
 
		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$destinataire2.';'.$email.';'.$destinataire3;
		}
		else
		{
			$cible = $destinataire.';'.$destinataire2.';'.$destinataire3;
		};
 
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		//$message = str_replace('&lt;br&gt;','',$message);
		//$message = str_replace('&lt;br /&gt;','',$message);
		$message = str_replace("&lt;","&lt;",$message);
		$message = str_replace("&gt;","&gt;",$message);
		$message = str_replace("&amp;","&",$message);
 
		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, $objet, $message, $headers))
				$num_emails++;
		}
		
		if ( $newsletter == "on") {
			$list = array (
		   		array($nom, $email)
			);

			$fp = fopen('data/newsletter.csv', 'a');

			foreach ($list as $fields) {
				fputcsv($fp, $fields,";");
			}

			fclose($fp);
		}
		
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
}; // fin du if (!isset($_POST['envoi']))
 
if (($err_formulaire) || (!isset($_POST['envoi'])))
{
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