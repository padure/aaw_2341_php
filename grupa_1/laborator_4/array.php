<?php
//ARRAY ASOCIATIV
$elev = [
    'nume' => 'Maria',
    'varsta' => 17,
    'specialitate' => 'Dezvoltarea aplicațiilor web',
    'competente' => ['HTML', 'CSS', 'PHP']
];

#Sarcina 1
echo "Nume: " . $elev["nume"] . " si Specialitatea: " . $elev["specialitate"] . "<br>";

#Sarcina 2
$elev["grupa"] = "AAW2341";
echo "<pre>";
var_dump($elev);
echo "</pre>";

#Sarcina 3
$elev["email"] ??= "necunoscut";
echo "<pre>";
var_dump($elev);
echo "</pre>";

#Sarcina 4
$exista = isset($elev["varsta"]) ? "Exista" : "Nu exista";
echo $exista . "<br>";

#Sarcina 5
$valori = array_values($elev);
$cheite = array_keys($elev);
echo "Lista cheitelor: <br>";
foreach ($cheite as $valoare) {
    echo $valoare . "<br>";
    echo gettype($valoare);
}

echo "<h2>Lista valorilor: </h2>";
echo "<ol>";
foreach ($valori as $valoare) {
    if (gettype($valoare) == "array") {
        echo "<ol>";
        foreach ($valoare as $info) {
            echo "<li>" . $info . "</li>";
        }
        echo "</ol>";
    } else {
        echo "<li>" . $valoare . "</li>";
    }
}
echo "</ol>";

#Sarcina 6
ksort($elev);

echo "<pre>";
var_dump($elev);
echo "</pre>";