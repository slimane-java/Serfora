<?php
session_start();
include_once '../racine.php';
include_once RACINE.'/service/ClientService.php';
extract($_POST);

 

 $es= new ClientService();
 $d=$es->RechercheId($_SESSION["idcli"]);
 
  if($d->GetMdp()===$MDP)
     {
      //si le mdp du courant du compte est correct
      if($MDPMO===$CMDPMO)
        { //si la confirmation est bonne 
          $verif = preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $MDPMO);
          /*
          ^: debut
\S*: n'importe quel characters
(?=\S{8,}): longueur au moins 8 characteres
(?=\S*[a-z]): au moin une miniscule
(?=\S*[A-Z]): au moin une majuscule
(?=\S*[\d]): au moin une lettre
(?=\S*[\W]): au moins un charactere special
$: fin
                      */
            if(!$verif)
            {
                $_SESSION["msg"]="Le MDP doit contenir minimum 8 caractères, dont une lettre min, maj et un chiffre et char special";
             
                       
            }
            else
            {
                //si le mdp contient minimum 8 caractères, dont une lettre min, maj et un chiffre et char special

                if($MDPMO!=$d->GetMdp())
                {
                  $es->ModifierMotpass($MDPMO,$_SESSION["idcli"]);
                       
                       $_SESSION["msg"]="succes";
                }
                else
                {
                    $_SESSION["msg"]="Le nouveau Mot de Passe doit etre différent de l'ancien Mot de Passe" ;
                    
                    //mmdp = meme mdp (ancien = nouveau)
                }
            }
        }
         else
        {
             $_SESSION["msg"]="Les champs mot de passe et confirmation mot de passe ne correspondent pas" ;
             
        }

      }
      else
       {
           $_SESSION["msg"]="Mot de Passe incorrect" ;
               
       }
 
 
 header("location:../Uppasword.php");
 





