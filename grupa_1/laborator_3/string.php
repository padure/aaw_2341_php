<?php
    $prenume = 'Ana';
    $specialitate = 'Dezvoltarea aplicațiilor web';
    $text = '   invat php pentru dezvoltare web   ';
    
    #Sarcina 1
    echo "Sarcina 1 <br>";
    echo $prenume . " studiaza " . $specialitate . "." . "<br>";
    
    #Sarcina 2
    echo "Sarcina 2 <br>";
    echo "Lungimea textului este: " . strlen($text) . "<br>";
    $textTrim  = trim($text);
    echo "Lungimea textului este: " . strlen($textTrim) . "<br>";
    
    #Sarcina 3
    echo "Sarcina 3 <br>";
    echo strtoupper($text) . "<br>";
    echo strtolower($text) . "<br>";

    #Sarcina 4
    echo "Sarcina 4 <br>";
    echo "Textul transformat este: " . ucwords($text) . "<br>";
    
    #Sarcina 5
    echo "Sarcina 5 <br>";
    $position = stripos($text, "Php");
    echo "Pozitia cuvantului este: " . $position . "<br>";
    
    #Sarcina 6
    echo "Sarcina 6 <br>";
    $textModificat = str_replace("php", "PHP 8", $text);
    echo "Textul modificat este: " . $textModificat . "<br>";
    
    #Sarcina 7
    echo "Sarcina 7 <br>";
    $textSubStr = substr($text, 3, 5);
    echo "Textul extras este: " . $textSubStr . "<br>";
    
    #Sarcina 8
    echo "Sarcina 8 <br>";
    $nrFisa = 27;
    echo "Numarul modificat este: " . str_pad($nrFisa, 6, 0, STR_PAD_LEFT) . "<br>";
    
    #Sarcina 9
    echo "Sarcina 9 <br>";
    $textBR = "Eu invat
    PHP 8 si 
    SQL pentru baze
    
    
    de date";
    
    echo nl2br($textBR);

?>