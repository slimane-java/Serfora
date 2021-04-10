<?php


class panier {
    private $idforma;
    private $qent;
    
    public function __construct($id,$qen) {
        $this->idforma=$id;
        $this->qent=$qen;
        
    }
    
    public function getidform()
    {
        return $this->idforma;
    }
    public  function getqent()
    {
       return $this->qent;
    }
    
    public function setidform($a)
    {
       $this->idforma=$a;
    }
    public  function setqent($a)
    {
        $this->qent=$a;
    }
    
    public function __toString() {
        return $this->idforma." ".$this->qent;
    }
    
}
