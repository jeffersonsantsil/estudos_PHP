<?php

$names = ['a', 'b', 'c', 'd', 'e', 'f'];
$i = 0;
$a = 11;

while ($i < count($names)) {
    echo $names[$i];
    $i++;
};

echo '<hr>';
do {
    echo $a;
    $a++;
} while ($a <= 10);