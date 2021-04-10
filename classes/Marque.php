<?php

class Marque{
    private $IdMarq;
    private $NomMarq;
    
    function __construct($NomMarq) {
     
       $this->NomMarq=$NomMarq;
    }


    function GetIdMarq()
    {
        return $this->IdMarq;
    }
    
    function SetIdMarq($n)
    {
        $this->IdMarq=$n;
    }
    
    function GetNomMarq()
    {
        return $this->NomMarq;
    }
    
    function SetNomMarq($n)
    {
        $this->NomMarqr=$n;
    }
    
   public function __toString() {
        
        return  $this->IdMarq." ".$this->NomMarq;
    }
}
?>
