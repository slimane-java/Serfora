<?php
session_start();
include_once '../racine.php';
include_once RACINE.'/service/ClientService.php';
extract($_POST);

$es = new ClientService();
$cli=$es->verifierEmail($Email);

 


 if(empty($cli->GetCin()))
  {
     
    $c=new Client($name,$Prneom,$cin,$DateNai,$tel,$Adr,$Email,$Mdp);
     $es->Ajouter($c);
     $id=$es->verifierEmail($Email);
     $_SESSION["idcli"]=$id->GetIdCli();
   
       $_SESSION["act"]="true";
       header("location:../index.php");
     
     
  }
 else {
        header("location:../InscriptionClient.php?em=Email deja exists");  
    
 }


?>