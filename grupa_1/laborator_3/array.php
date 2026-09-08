<?php
    echo "Sarcini practice cu array <br>";
    
    $tehnologii = ['HTML', 'CSS', 'PHP'];
    
    #Sarcina 1
    echo "Sarcina 1 <br>";
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";

    #Sarcina 2
    echo "Sarcina 2 <br>";
    echo "Elementul cu indexul 1 este: " . $tehnologii[1] . "<br>";
    $tehnologii[0] = "SQL";
    echo "Elementul modificat este: " . $tehnologii[0] . "<br>";
    
    #Sarcina 3
    echo "Sarcina 3 <br>";
    if(isset($tehnologii[2])){
        echo "Numarul elementelor este: " . count($tehnologii) . "<br>";
    }

    #Sarcina 4
    echo "Sarcina 4 <br>";
    $tehnologii = [...$tehnologii, "HTML"];
    array_push($tehnologii, "JS");
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";

    #Sarcina 5
    echo "Sarcina 5 <br>";
    array_pop($tehnologii); //Sterge ultimul element
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    
    #Sarcina 6
    echo "Sarcina 6 <br>";
    array_unshift($tehnologii, "ASP.Net"); //Adauga primul element
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    array_shift($tehnologii); //Sterge primul element

    #Sarcina 7
    echo "Sarcina 7 <br>";
    $str = "PHP,JavaScript,SQL";
    $arrayStr = explode(",", $str);
    echo "<pre>";
    var_dump($arrayStr);
    echo "</pre>";

    #Sarcina 8
    echo "Sarcina 8 <br>";
    $strTehnologii = implode("|", $tehnologii);
    echo $strTehnologii . "<br>";

    #Sarcina 9
    echo "Sarcina 9 <br>";
    $exist = in_array("PHP", $tehnologii) ? "Exista" : "Nu exista";
    echo "Textul PHP: " . $exist . "<br>";
    echo "Indexul este: " . array_search("PHP", $tehnologii) . "<br>";

    #Sarcina 10
    echo "Sarcina 10 <br>";
    $instrumente = ["vscode", 'Atom'];
    $response = array_merge($tehnologii, $instrumente);
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";

    #Sarcina 11
    echo "Sarcina 11 <br>";
    sort($tehnologii);
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";

?>