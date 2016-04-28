	<?php
		$title = 'Relooking meubles et objets personnalisés';
		if(isset($_GET['titlePage'])) {
			$title = $_GET['titlePage'];
		}
		$desc = 'Bubu Déco vous propose des objets personnalisés : vaisselles en porcelaine, verres, meubles en bois relookés et de décorez votre intérieur avec les meubles relookés par Bubu Déco (59113, Seclin)';
		if(isset($_GET['descPage'])) {
			$desc = $_GET['descPage'];
		}
		$keywords = 'Bubu Déco, objets personnalisés, vaisselles en porcelaine, verres, meubles en bois relookés, décorez votre intérieur, 59113, Seclin';
		if(isset($_GET['keyPage'])) {
			$keywords = $_GET['keyPage'];
		}
		$canonical = '';
		if(isset($_GET['canonicalPage'])) {
			$canonical = $_GET['canonicalPage'];
		}
	?>	
	<head>
		<title><?php echo $title ?> - Bubu Déco</title>
		<meta name="charset" content="utf-8"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="description" content="<?php echo $desc ?>" />
		<meta name="keywords" content="<?php echo $keywords ?>" >
		<link rel="canonical" href="http://www.bubudeco.fr<?php echo $canonical ?>" />
		<meta content="index,follow" name="robots">
		<link rel="alternate" hreflang="fr" href="http://www.bubudeco.fr/" />
		<link rel="shortcut icon" type="image/x-icon" media="all" href="images/favicon.ico" />
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	</head>