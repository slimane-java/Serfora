<?php



class Client 
{
   
    private $idcli;
    private $nom;
    private $prenom;
    private $cin;
    private $daten;
    private $tel;
    private $adr;
    private $email;
    private $mdp;
    
    
     
    
    function __construct($nom,$prenom, $cin, $daten,$tel,$adr,$email,$mdp) {
        
        
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->cin=$cin;
        $this->daten=$daten;
        $this->tel=$tel;
        $this->adr=$adr;
        $this->email=$email;
        $this->mdp=$mdp;   
    }
    
    function  GetIdCli()
    {
        return $this->idcli;
    }
    function  SetIdCli($n)
    {
        $this->idcli=$n;
    }
    function GetNom()
    {
        return $this->nom;
    }
    
    function SetNom($n)
    {
        $this->nom=$n;
    }
            
    function GetPrenom()
    {
        return $this->prenom;
    }
    
    function SetPrenom($n)
    {
        $this->prenom=$n;
    }
    
    function GetCin()
    {
        return $this->cin;
    }
    
    function SetCin($n)
    {
        $this->cin=$n;
    }
    
    function GetDate()
    {
        return $this->daten;
    }
    
    function SetDate($n)
    {
        $this->daten=$n;
    }
    
     function GetTel()
    {
        return $this->tel;
    }
    
    function SetTel($n)
    {
        $this->tel=$n;
    }
    
     function GetAdr()
    {
        return $this->adr;
    }
    
    function SetAdr($n)
    {
        $this->adr=$n;
    }
    
     function GetEmail()
    {
        return $this->email;
    }
    
    function SetEmail($n)
    {
        $this->email=$n;
    }
    

    

    
     function GetMdp()
    {
        return $this->mdp;
    }
    
     function SetMdp($n)
    {
        $this->mdp=$n;
    }
    
    public function __toString() {
        
        return  $this->idcli." ".$this->nom." ".$this->prenom." ".$this->cin." ".$this->daten." ".$this->tel." ".$this->adr." ".$this->email." ".$this->mdp;   
        
    }
}

?>

