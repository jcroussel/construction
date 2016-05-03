<?php
require_once("functions/seoUtils.php");
addMetaValueSeo('Etude de besoin d\'une boutique de décoration', 'Dans le cadre de l\'ouverture d\'une boutique de décoration à Seclin (meubles, accessoires, vaisselles, relooking meubles...), nous réalisons une étude afin de répondre au mieux à vos besoins.', 'étude, boutique, décoration, Bubu Déco, objets personnalisés, meubles en bois relookés, décorez votre intérieur, 59113, Seclin', '/form.html');
include("components/header.php");
?>
<body class="is-loading">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main">
            <?php include("components/top.php"); ?>
            <iframe src="https://docs.google.com/forms/d/1MFSTjaHb6LziHbyPW6HaeBuQqd6Tpv2eoVhI2w4o390/viewform?embedded=true" width="760" height="1800" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
            <p><a href="/" class="button"><i class="fa fa-angle-right"></i> Revenir à l'accueil</a></p>
        </section>
        <?php include("components/footer.php"); ?>
    </div>
    <?php include("components/scriptFooter.php"); ?>
</body>
</html>