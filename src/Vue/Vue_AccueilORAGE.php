<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilORAGE extends Vue_Composant
{

    private string $msgErreur;
    public function __construct(string $msgErreur="")
    {
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <h1>Calcul distance de l'orage</h1>
        <form>
            <input type='hidden' name='case' value='orage'>
            <label for='temp'>Temps</label>
            <input type='number' name='temp' id='temp'>
            <button type='submit' name='action' value='calcDist'>
                Calculer distance de l'orage
            </button>
            
 
             <p>$this->msgErreur</p>
        
        </form>
        ";
        return $str;
    }
}