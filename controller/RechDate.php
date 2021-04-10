<?php
session_start();
include_once '../racine.php';
include_once RACINE.'/service/CommandeService.php';
extract($_POST);

$es = new CommandeService();
$es->RechercheByDate($date1, $date2,$_SESSION["idcli"]);

 
  
 
 



?>
