<?php
    #1
    $cursant = [
        "nume" => "Doe",
        "prenume" => "John", 
        "varsta" => 25, 
        "grupa" => "AAW2341",
        "tehnologii" => ["CSS", "HTML", "JS"]
    ];
    #2
    $pretCurs = 1257; 
    $reducereProcente = 15;
    #3
    $sumaReducerii = $pretCurs * ($reducereProcente / 100);
    $sumaFinala = $pretCurs * (1 - $reducereProcente/100);
    #4
    echo "Suma reducerii: " . number_format($sumaReducerii, 2) . "<br>";
    echo "Suma finala: " . number_format($sumaFinala, 2) . "<br>";

