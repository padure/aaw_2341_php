<?php
    $products = ["Mere", "Gutui", "Pere", "Struguri", "Nuci"];

    echo $products[2] . "<br>";
    #Adaugare
    array_push($products, "Alune"); //Adauga la sfarsit
    array_unshift($products, "Bostani"); //Adauga la inceput
    #Stergere
    array_pop($products); //Sterge ultima pozitie
    array_shift($products); //Sterge prima pozitie

    $textProducts = implode(",", $products);

    $str = "Eu invat PHP";

    $arrStr = explode(" ", $str);


    #Array asociativ
    $produs = [
        "nume" => "Struguri",
        "cantitate" => 25,
        "pret" => 31,
        "tip" => "alb",
        "zona" => ["Cahul", "Causeni", "Taraclia"],
        "disponibilitate" => true
    ];

    echo "<h1>" . $produs["nume"] . "</h1>";
    echo "<ol>";
    foreach($produs["zona"] as $zona){
        echo "<li>" . $zona . "</li>";
    }
    echo "</ol>";
    
    $frontend = ["HTML", "CSS", "JS"];
    $backend = ["PHP", "C#", "Java"];

    // $fullstack = array_merge($frontend, $backend);
    $fullstack = [...$frontend, ...$backend];

    var_dump($fullstack);

?>