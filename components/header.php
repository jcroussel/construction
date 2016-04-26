	<?php
		$title = 'Relooking meubles';
		if(isset($_GET['titlePage'])) {
			$title = $_GET['titlePage'];
		}
		$desc = 'Décorez votre intérieur avec les meubles relookés par Bubu Déco';
		if(isset($_GET['descPage'])) {
			$desc = $_GET['descPage'];
		}
	?>	
	<head>
		<title><?php echo $title ?> | Bubu Déco</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="description" content="<?php echo $desc ?>" />
		<link rel="shortcut icon" type="image/x-icon" media="all" href="images/favicon.ico" />
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	</head>