<?php
    declare(strict_types=1);

    $cos = [
        "prod_1" => ["Rosii", 25, 4],
        "prod_2" => ["Gutui", 55, 2],
        "prod_3" => ["Lapte", 25, 3]
    ];

    function getNumeProduse (array $cos): array {
        return array_values( array_map(fn($produs) => $produs[0], $cos) );
    }

    function total (array $cos) : float{
        return array_reduce($cos, function($acc, $item){
            return $acc += $item[1]*$item[2];
        }, 0);
    }
    echo "<pre>";
    var_dump( getNumeProduse($cos) );
    echo "</pre>";
    echo "<pre>";
    var_dump( total($cos) );
    echo "</pre>";