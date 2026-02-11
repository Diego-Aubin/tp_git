<?php
    require_once(__DIR__."/include/init_twig.php");
    $twig=init_twig();
    $template=$twig->load("accueil.twig");
    $produits_file = file_get_contents(__DIR__."/json/produits.json");
    $produits = json_decode($produits_file);
    echo $template->render(["produits"=>$produits]);
?>