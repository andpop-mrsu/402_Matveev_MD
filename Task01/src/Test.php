<?php

namespace App\Test;

use App\Vector;

function runTest()
{
    $v1 = new Vector(1.5, 2, 3);
    echo "v1 = " . $v1 . "\n"; // (1.5; 2; 3)
    
    $v2 = new Vector(1, 4, -2);
    echo "v2 = " . $v2 . "\n"; // (1; 4; -2)

    $vectorAddition = $v1->add($v2);
    $vectorDifference = $v1->sub($v2);
    $vectorNumberProduct = $v1->product(2);
    $scalarProduct = $v1->scalarProduct($v2);
    $vectorProduct = $v1->vectorProduct($v2);

    echo "Сумма векторов\n";
    echo $vectorAddition; // (2.5; 6; 1)
    echo "\nРазность векторов\n";
    echo $vectorDifference; // (0.5; -2; 5)
    echo "\nПроизведение вектора на число\n";
    echo $vectorNumberProduct; // (3; 4; 6)
    echo "\nСкалярное произведение векторов\n";
    echo $scalarProduct; // 3.5
    echo "\nВекторное произведение\n";
    echo $vectorProduct; // (16; -6; -4)
}
