<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_ORAGE());
switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilORAGE());
        break;
    case "calcDist":
        $ok = true;
        if(isset($_REQUEST["temp"])) {
            if(is_numeric($_REQUEST["temp"])) {
            }
            else {
                $ok = false;
                $msgErreur = "Veuillez renseigner une valeur numérique pour le temps";
            }
        }
        else{
            $ok = false;
            $msgErreur = "Veuillez renseigner le champs temps";
        }
        if ($ok) {
            $temps = $_REQUEST["temp"];
            $distance = $temps * 300;
            $Vue->addToCorps(new \App\Vue\Vue_AfficherORAGE($distance));
        }
        else
        {
            $Vue->addToCorps(new \App\Vue\Vue_AccueilORAGE($msgErreur));

        }

        break;
}