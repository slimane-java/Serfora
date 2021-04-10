<?php



session_start();
include_once '../racine.php';
include_once RACINE.'/service/PanirService.php';
extract($_GET);

 

$panier=new PanirService();
if($idfor>0){
$panier->supprimer($idfor);
}
header("location:../cart.php");  


?>
