<?php
/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function cleanText($text,$replaceBr)
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
}

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

/*
 * Write text into file path
 */
function writeCsvIntoFile($list,$pathToFile) {
	$fp = fopen($pathToFile, 'a');

	foreach ($list as $fields) {
		fputcsv($fp, $fields,";");
	}

	fclose($fp);
}

/*
 * Send email
 */
function sendEmail($nom, $fromEmail, $message, $objet, $emails) {
	$headers  = 'From:'.$nom.' <'.$fromEmail.'>' . "\r\n";
	
	$listEmail = explode(';', $emails);
	foreach($listEmail as $email_destinataire)
	{
		mail($email_destinataire, $objet, $message, $headers);
	}
}
 
?>