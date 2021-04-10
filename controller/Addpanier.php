<?php
  session_start();
        include_once '../racine.php';
        include_once RACINE . '/service/FormatProduitService.php';
        include_once RACINE . '/service/ProduitService.php';
  extract($_POST);
  
 
  
  $produitformat = new FormatProduitService();
  $prodd= $produitformat->RechercherBYIdProduit($_SESSION["produit"]);
 
  function idfome($tappro,$x)
  {
  foreach ($tappro as $x4)
  {
      if($x4->GetFormet()==$x)
      {
      return $x4->GetIdformat();
      }
  }
  }
  

  
  
  
  
  
  
  
        function ajouter($x)
        {
            $_SESSION["tab"][count($_SESSION["tab"])]=$x;
        }
        
       
        
        
        
        if(!isset($_COOKIE["tab"]))
        {
        
        $tab= array();
        
        $_SESSION["tab"]=$tab;
        
        }
        else
        {
            $_SESSION["tab"]= unserialize($_COOKIE["tab"]);
        }
        
        ajouter(idfome($prodd,$idforme));
        
        setcookie("tab",serialize($_SESSION["tab"]), time() + (86400 * 30), "/");
        
        if(!isset($_COOKIE["tab"])) {
    echo "Cookie named [tab] is not set!";
} else {
    echo "Cookie [tab]  is set!<br>";
    $data= unserialize($_COOKIE["tab"]);
    for($i=0;$i<count($data);$i++)
    {
        echo $data[$i];
    }
}

?>