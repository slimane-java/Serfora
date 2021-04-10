<?php

session_start();
include_once '../racine.php';
include_once RACINE.'/service/PanirService.php';
include_once RACINE.'/service/FormatProduitService.php';
extract($_POST);
$panier=new PanirService();
$formapan=new FormatProduitService();
$qun=$formapan->RechercherBYIdform($_SESSION["produit"])->Getqtestock();

if(!empty($_SESSION["produit"])&&$numproduct<$qun ){
$panier->Ajouter($_SESSION["produit"], $numproduct);
header("location:../product-detail.php?produit=".$_SESSION["produit"]); 
}
else
{
    header("location:../product-detail.php?produit=".$_SESSION["produit"]."&erreur=true"); 
}





?>