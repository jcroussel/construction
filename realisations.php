<?php
require_once("functions/seoUtils.php");
//Add image in opengraph
$imageForOpenGraph = array(
    "/images/zoom/150010-z.jpg",
    "/images/zoom/150011-z.jpg",
    "/images/zoom/150012-z.jpg",
    "/images/zoom/110010c-z.jpg",
    "/images/zoom/110010z-z.jpg",
    "/images/zoom/110011-z.jpg",
    "/images/zoom/110013-z.jpg",
    "/images/zoom/160010f-z.jpg",
    "/images/zoom/160010z-z.jpg",
);
addMetaValueSeo('Réalisations et relooking meubles', 'Retrouvez toutes les réalisations de Bubu Déco : relooking meubles, peinture sur porcelaine...', 'réalisations, Bubu Déco, relooking de meubles, peinture sur porcelaine, 59113, Seclin', '/realisations.html', $imageForOpenGraph);
include("components/header.php");
?>

<body class="is-loading">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <section id="main">
            <?php include("components/top.php"); ?>
            <div class="content" id="galleryRea">
                <h1>Réalisations</h1>
                <p>Retrouvez en photo les réalisations de Bubu Déco : relooking meubles, peinture et décoration de porcelaine...</p>
                <div class="row">
                    <h3>Relooking meubles</h3>
                    <ul class="fancybox gallery">
                        <li><a href="images/zoom/150010-z.jpg" data-fancybox-group="relookmeuble" title="Relooking d'un bar"><img src="images/small/150010-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/150011-z.jpg" data-fancybox-group="relookmeuble" title="Relooking d'une commode pour une chambre"><img src="images/small/150011-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/150012-z.jpg" data-fancybox-group="relookmeuble" title="Détournement d'une palette en étagère"><img src="images/small/150012-s.jpg" alt="" /></a></li>
                    </ul>
                    <h3>Peinture sur porcelaine</h3>
                    <ul class="fancybox gallery">
                        <li><a href="images/zoom/110010c-z.jpg" data-fancybox-group="peintCeramic" title="Plateau apéritif, motif 'Pissenlits'"><img src="images/small/110010c-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/110010z-z.jpg" data-fancybox-group="peintCeramic" title="Plateau apéritif, motif 'Pissenlits'"><img src="images/small/110010z-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/110011-z.jpg" data-fancybox-group="peintCeramic" title="Plateau apéritif, motif 'Chats amoureux'"><img src="images/small/110011-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/110013-z.jpg" data-fancybox-group="peintCeramic" title="Tasses à café motifs 'voitures anciennes' : Vespa 400, 2cv, Citroën C4 de 1930"><img src="images/small/110013-s.jpg" alt="" /></a></li>
                    </ul>
                    <h3>Création de meubles</h3>
                    <ul class="fancybox gallery">
                        <li><a href="images/zoom/160010f-z.jpg" data-fancybox-group="reameuble" title="Etagère sur-mesure, livrée à Paris"><img src="images/small/160010f-s.jpg" alt="" /></a></li>
                        <li><a href="images/zoom/160010z-z.jpg" data-fancybox-group="reameuble" title="Etagère sur-mesure, livrée à Paris"><img src="images/small/160010z-s.jpg" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include("components/footer.php"); ?>
    </div>
    <?php include("components/scriptFooter.php"); ?>
</body>
</html>