<?php
    $elev = [
        'nume' => 'Maria',
        'varsta' => 17,
        'specialitate' => 'Dezvoltarea aplicațiilor web',
        'competente' => ['HTML', 'CSS', 'PHP']
    ];

    #Sarcina 3
    $elev['email'] ??= "necunoscut";

    echo "<pre>";
    var_dump($elev);
    echo "</pre>";

    #Sarcina 4
    $exista = isset($elev['varsta']) ? "Exista" : "Nu exista";
    echo $exista . "<br>";

    #Sarcina 5
    $cheite = array_keys($elev);
    echo "<pre>";
    var_dump($cheite);
    echo "</pre>";
    $valori = array_values($elev);
    echo "<pre>";
    var_dump($valori);
    echo "</pre>";

    #Sarcina 6
    ksort($elev);
    echo "<pre>";
    var_dump($elev);
    echo "</pre>";
    

    