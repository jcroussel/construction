<?php

/*
 * Inject meta seo (title, description, keyword, canonical)
 */

function addMetaValueSeo($title, $description, $keyword, $canonical, $arrayOG = array()) {
    $_GET['titlePage'] = $title;
    $_GET['descPage'] = $description;
    $_GET['keyPage'] = $keyword;
    $_GET['canonicalPage'] = $canonical;
    $_GET['arrayOG'] = $arrayOG;
}

?>