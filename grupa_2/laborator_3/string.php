<?php
    $prenume = 'Ana';
    $specialitate = 'Dezvoltarea aplicațiilor web';
    $text = '   invat php pentru dezvoltare web   ';
    #Sarcina 1
    echo $prenume . " studiază " . $specialitate . ".";
    #Sarcina 2
    echo "<br>";
    echo "Lungimea pana la trim";
    echo strlen($text) . "<br>";
    echo "Lungimea dupa trim";
    echo strlen(trim($text)) . "<br>";
    #Sarcina 3
    $textToUpperCase = strtoupper($text);
    $textToLowerCase = strtolower($text);
    echo "Textul cu majuscule este: " . $textToUpperCase . "<br>";
    echo "Textul cu minuscule este: " . $textToLowerCase . "<br>";
    #Sarcina 4
    $textUCWords = ucwords($text);
    echo "Prima litera a fiecarui cuvant: " . $textUCWords . "<br>";
    #Sarcina 5
    $pozitia = stripos($text, "Php");
    echo "Pozitia gasita este: " . $pozitia . "<br>";
    #Sarcina 6
    $textModificat = str_ireplace("Php", "PHP 8", $text);
    echo "Textul modificat este: " . $textModificat . "<br>";
    #Sarcina 7
    $subString = substr($text, 3, 5);
    echo "Textul extras este: " . $subString;
    #Sarcina 8 
    $numarFisa = 27;
    echo "Numarul este: " . str_pad($numarFisa, 6, "0", STR_PAD_LEFT) . "<br>";
    #Sarcina 9 
    $textnl2br = "Eu invat
    PHP 8
    in anul 2026";
    echo "Textul este: " . nl2br($textnl2br);
?>