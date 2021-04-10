<?php
session_start();
include_once '../racine.php';
include_once RACINE.'/service/ClientService.php';
extract($_POST);

$es = new ClientService();
$cli=$es->verifierauthen($email,$password);
$_SESSION["idcli"]=$cli->GetIdCli();
 echo $_SESSION["idcli"];
 if(empty($cli->GetCin()))
  {
    
    
     
      header("location:".$_SESSION["url"]."?em=erreur Email&pass=erreur password");
  }
 else {
       header("location:".$_SESSION["url"]);
       $_SESSION["client"]=$cli->GetNom();
       $_SESSION["act"]="true";
 
 }
  
 
 



?>
