<?php



class FormatProduit 
{
   
    private $idformat;
    private $idproduit;
    private $format;
    private $photo;
    private $prix;
    private $qtestock;
   
    
    
     
    
    function __construct($idproduit,$format,$photo,$prix,$qtestock) {
        
        
    
    $this->idproduit=$idproduit;
    $this->format=$format;
    $this->photo=$photo;
    $this->prix=$prix;
    $this->qtestock=$qtestock;
       
    }
    
    function  GetIdformat()
    {
        return $this->idformat;
    }
    function  SetIdformat($n)
    {
        $this->idformat=$n;
    }
    function GetIDproduit()
    {
        return $this->idproduit;
    }
    
    function SetIDproduit($n)
    {
        $this->idproduit=$n;
    }
           
    function GetFormet()
    {
        return $this->format;
    }
    function SetFormat($n)
    {
        $this->format=$n;
    }
            function Getphoto()
    {
        return   $this->photo;
    }
    
    function Setphoto($n)
    {
          $this->photo=$n;
    }
    
    function Getprix()
    {
        return $this->prix;
    }
    
    function Setprix($n)
    {
        $this->prix=$n;
    }
    
    function Getqtestock()
    {
        return $this->qtestock;
    }
    
    function Setqtestock($n)
    {
        $this->qtestock=$n;
    }
    
     
    

    
   
    public function __toString() {
        
        return  $this->idformat." ".$this->idproduit." ".$this->format." ".$this->photo." ".$this->prix." ".$this->qtestock;   
        
    }
}

?>

