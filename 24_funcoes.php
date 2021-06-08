<?php

function factorial(int $number): int
{
    if ($number <= 1)
        $number = $number;
    else
        $number = $number * factorial($number - 1);

    //PODE SER USADO DESSA MANEIRA TAMBÉM
    //$number *= factorial($number -1);

    return $number;
}
echo factorial(14);
