<?php
    #Sarcina 1
    $cursant = [
        "nume" => "Ionescu",
        "prenume" => "Ilie",
        "varsta" => 28,
        "grupa" => "AAW2341",
        "tehnologii" => ["C#", "SQL", "Android"]
    ];
    #Sarcina 2
    $pretCurs = 580;
    $reducereProcente = 10;
    $sumaReducerii = $pretCurs * $reducereProcente / 100;
    $suma = $pretCurs * (1 - $reducereProcente/100) ;
    #Sarcina 3
    echo number_format($suma, 2);
