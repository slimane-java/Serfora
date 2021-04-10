<?php

class Categorie{
    private $IdCat;
    private $NomCat;
    
    function __construct($nomcat) {
       
       $this->NomCat=$nomcat;
    }


    function GetIdCat()
    {
        return $this->IdCat;
    }
    
    function SetIdCat($n)
    {
        $this->IdCat=$n;
    }
    
    function GetNomCatt()
    {
        return $this->NomCat;
    }
    
    function SetNomCat($n)
    {
        $this->NomCat=$n;
    }
    
   public function __toString() {
        
        return  $this->IdCat." ".$this->NomCat;
    }
}
?>
