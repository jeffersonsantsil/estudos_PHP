<?php

function pt($value)
{
    echo $value;
}

//$teste = 123;
//pt($teste);

function sum(int $n1, int $n2)
{
    return $n1 + $n2;
}
echo sum(12, 50);


echo '<hr>';

function sumTwo(int $n1, int $n2, int $rate = 3)
{
    return ($n1 + $n2) * $rate;
}

echo sumTwo(2, 2);
