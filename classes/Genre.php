<?php

class Genre{
    private $Idgen;
    private $LibelleGenr;
    
    function __construct($libelleGenr) {
       
       $this->LibelleGenr=$libelleGenr;
    }


    function GetIdgen()
    {
        return $this->Idgen;
    }
    
    function SetIdgen($n)
    {
        $this->Idgen=$n;
    }
    
    function GetLibelleGenr()
    {
        return $this->LibelleGenr;
    }
    
    function SetLibelleGen($n)
    {
        $this->LibelleGenr=$n;
    }
    
   public function __toString() {
        
        return  $this->Idgen." ".$this->LibelleGenr;
    }
}
?>
