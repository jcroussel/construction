<?php

/*
 * Inject meta seo (title, description, keyword, canonical)
 */

function addMetaValueSeo($title, $description, $keyword, $canonical) {
    $_GET['titlePage'] = $title;
    $_GET['descPage'] = $description;
    $_GET['keyPage'] = $keyword;
    $_GET['canonicalPage'] = $canonical;
}

?>