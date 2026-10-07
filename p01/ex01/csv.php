<?php
/*    $contenu = file_get_contents("ex01.txt");
    echo $contenu . "\n";*/

    $fd = fopen("ex01.txt", "r");
    $lign = 1;

    while($ligne = fgets($fd))
    {
        $mots = 0;
        $tab = explode(",", $ligne, PHP_INT_MAX);

        foreach ($tab as $tronc)
        {
            $mots++;
            echo "$tronc";

            if (strncmp($tronc, "fourth", 6) != 0)
                echo "\n";
        }
        $lign += 1;
    }
?>