<?php
    require_once(__DIR__."/include/init_twig.php");
    $twig=init_twig();
    $template=$twig->load("contact.twig");

    $employees_file = file_get_contents(__DIR__."/json/employes.json");
    $employees = json_decode($employees_file);

    echo $template->render(["employees"=>$employees]);
?>