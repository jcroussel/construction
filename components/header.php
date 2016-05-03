<?php
if ($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/index.html") {
    header("Status: 301 Moved Permanently", false, 301);
    header("Location: http://" . $_SERVER['HTTP_HOST']);
    exit();
}
$title = 'Relooking meubles et objets personnalisés';
if (isset($_GET['titlePage'])) {
    $title = $_GET['titlePage'];
}
$desc = 'Bubu Déco vous propose des objets personnalisés : vaisselles en porcelaine, verres et de décorer votre intérieur avec les meubles relookés par Bubu Déco (59113, Seclin)';
if (isset($_GET['descPage'])) {
    $desc = $_GET['descPage'];
}
$keywords = 'Bubu Déco, objets personnalisés, vaisselles en porcelaine, verres, meubles en bois relookés, décorez votre intérieur, 59113, Seclin';
if (isset($_GET['keyPage'])) {
    $keywords = $_GET['keyPage'];
}
$canonical = '';
if (isset($_GET['canonicalPage'])) {
    $canonical = $_GET['canonicalPage'];
}
?>
<!DOCTYPE HTML>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title ?> - Bubu Déco</title>
        <meta name="charset" content="utf-8"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
        <meta name="description" content="<?php echo $desc ?>" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <link rel="canonical" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $canonical ?>" />
        <meta content="index,follow" name="robots" />
        <link rel="alternate" hreflang="fr" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] ?>" />
        <link rel="shortcut icon" type="image/x-icon" media="all" href="images/favicon.ico" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="css/style.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
        <script src="http://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script src="js/functions.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    </head>