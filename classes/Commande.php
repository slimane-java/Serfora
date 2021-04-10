<?php

class Commande 
{
    private $IdCom;
    private $Idcli;
    private $Date;
    private $Livrer;
    
    function __construct($idcli,$date,$liver) {
        
        $this->Idcli=$idcli;
        $this->Date=$date;
        $this->Livrer=$liver;
        
    }
    
    function ajouter($idcom,$idcli,$date,$liver)
    {
        $this->IdCom=$idcom;
        $this->Idcli=$idcli;
        $this->Date=$date;
        $this->Livrer=$liver;
    }
            
    function GetIdcom()
    {
        return $this->IdCom;
        
    }
    
    function  SetIdcom($n)
    {
        $this->IdCom=$n;
    }
    
      function GetIdcli()
    {
        return $this->Idcli;
        
    }
    
    function  SetIdcli($n)
    {
        $this->Idcli=$n;
    }
    
      function GetDate()
    {
        return $this->Date;
        
    }
    
    function  SetDate($n)
    {
        $this->Date=$n;
    }
    
      function GetLivrer()
    {
        return $this->Livrer;
        
    }
    
    function  SetLivrer($n)
    {
        $this->Livrer=$n;
    }
    
    public function __toString() 
    {
        return $this->IdCom." ".$this->Idcli." ".$this->Date." ".$this->Livrer;
    }
    
}
?>

