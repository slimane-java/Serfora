<?php
session_start();
include_once '../racine.php';
include_once RACINE.'/service/ClientService.php';
extract($_POST);

 

 $es= new ClientService();
 $d=new Client($name,$prenom,$cin,$DateNai,$tel,$Adr,$Email,$UserName,$Mdp); 
 $d->SetIdCli($_SESSION["idcli"]);
$es->Modifier($d);


header("location:../ProfilClient.php");

