<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AfficherORAGE extends Vue_Composant
{
    private int $distance;

    private mixed $msgErreur;


    public function __construct($distance, $msgErreur="")
    {
        $this->distance = $distance;
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <p>La distance de l'orage est de $this->distance</p>
        ";
        return $str;
    }

}