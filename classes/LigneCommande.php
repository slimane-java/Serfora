<?php

class Commande 
{
    private $IdFormat;
    private $Idcom;
    private $Qntcom;
    
    
    function __construct($IdFormat,$Idcom,$Qntcom) {
        $this->IdFormat=$IdFormat;
        $this->Idcom=$Idcom;
        $this->Qntcom=$Qntcom;
        
        
    }
    
    function GetIdcom()
    {
        return $this->Idcom;
        
    }
    
    function  SetIdcom($n)
    {
        $this->Idcom=$n;
    }
    
      function GetIdFormat()
    {
        return $this->IdFormat;
        
    }
    
    function  SetIdFormat($n)
    {
        $this->IdFormat=$n;
    }
    
      function GetQntcom()
    {
        return $this->Qntcom;
        
    }
    
    function  SetQntcom($n)
    {
        $this->Qntcom=$n;
    }
    
      
    
    public function __toString() 
    {
        return $this->IdFormat." ".$this->Idcom." ".$this->Qntcom;
    }
    
}
?>

