<?php
    $tehnologii = ['HTML', 'CSS', 'PHP'];
    #Sarcina 1
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    #Sarcina 2
    echo "Elementul cu indexul 1 este: " . $tehnologii[1] . "<br>";
    $tehnologii[0] = "JS"; //Modificarea elementului 0
    echo "Elementul modificat este: " . $tehnologii[0] . "<br>";
    #Sarcina 3
    if(isset($tehnologii[2])){
        echo "Numarul de elemente este: " . count($tehnologii) . "<br>";
    }
    #Sarcina 4
    $tehnologii = [...$tehnologii, "HTML"];
    array_push($tehnologii, "SQL");
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    #Sarcina 5
    array_pop($tehnologii);
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    #Sarcina 6
    array_unshift($tehnologii, "SQL");
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    array_shift($tehnologii);
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
    #Sarcina 7
    $str = "PHP,JavaScript,SQL";
    $strArray = explode(",", $str);
    echo "<pre>";
    var_dump($strArray);
    echo "</pre>";
    #Sarcina 8
    $tehnologiiStr = implode("|", $tehnologii);
    echo $tehnologiiStr . "<br>";
    #Sarcina 9
    $exista = in_array("PHP", $tehnologii) ? "Exista" : "Nu exista";
    echo $exista . "<br>";
    #Sarcina 10
    $instrumente = ["VSCode", "PHP Stoorm", "Atom"];
    $response = array_merge($tehnologii, $instrumente);
    echo "<pre>";
    var_dump($response);
    echo "</pre>";
    #Sarcina 11
    sort($tehnologii);
    echo "<pre>";
    var_dump($tehnologii);
    echo "</pre>";
?>