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
            <div class="content">
                <h1>Le projet Bubu Déco</h1>
                <p>Depuis toute petite, mes loisirs sont les travaux manuels, principalement la peinture sur toile, la peinture sur porcelaine, le dessin...<br />Depuis quelques années, c'est le relooking meubles et la décoration d'objets qui ont fait parti de mes passe-temps. Le DIY est devenu une mode de plus en plus pratiquée et accessible.</p>
                <p>Aujourd'hui, je souhaite ouvrir une boutique de décoration dans les environs de Seclin et vous proposer, en plus d'articles neufs, des meubles relookés et de la porcelaine personnalisée.</p>
                <p>Pour mener à bien ce projet, je réalise une enquête permettant de connaître au mieux vos besoins.<br />Merci de prendre 5 minutes de votre temps pour répondre au questionnaire ci-dessous.</p>
                <p>Bubu Déco</p>
            </div>
            
            <iframe src="https://docs.google.com/forms/d/1MFSTjaHb6LziHbyPW6HaeBuQqd6Tpv2eoVhI2w4o390/viewform?embedded=true" width="100%" height="1800" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
            <p><a href="/" class="button"><i class="fa fa-angle-right"></i> Revenir à l'accueil</a></p>
        </section>
        <?php include("components/footer.php"); ?>
    </div>
    <?php include("components/scriptFooter.php"); ?>
</body>
</html>