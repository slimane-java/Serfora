<?php



class Produit 
{
   
    private $idpro;
    private $idcat;
    private $idmarq;
    private $idgen;
    private $nompro;
    private $discription;
   
    
    
     
    
    function __construct($idpro,$idcat, $idmarq, $idgen,$nompro,$discription) {
        
        
        $this->idpro=$idpro;
        $this->idcat=$idcat;
        $this->idmarq=$idmarq;
        $this->idgen=$idgen;
        $this->nompro=$nompro;
        $this->discription=$discription;
       
    }
    
    function  GetIdpro()
    {
        return $this->idpro;
    }
    function  SetIdpro()
    {
        $this->idpro=$n;
    }
    function Getcat()
    {
        return $this->idcat;
    }
    
    function Setcat($n)
    {
        $this->idcat=$n;
    }
            
    function Getmarq()
    {
        return   $this->idmarq;
    }
    
    function Setmarq($n)
    {
          $this->idmarq=$n;
    }
    
    function Getgen()
    {
        return $this->idgen;
    }
    
    function Setgen($n)
    {
        $this->idgen=$n;
    }
    
    function Getnompro()
    {
        return $this->nompro;
    }
    
    function Setnompro($n)
    {
        $this->nompro=$n;
    }
    
     function Getdiscription()
    {
        return $this->discription;
    }
    
    function Setdiscription($n)
    {
        $this->discription=$n;
    }
    

    
   
    public function __toString() {
        
        return  $this->idpro." ".$this->idcat." ".$this->idmarq." ".$this->idgen." ".$this->nompro." ".$this->discription;   
        
    }
}

?>

