<?php

$ara = explode(" ", trim(readline()));

$lnth = count($ara);

for($i=0; $i<$lnth-1; $i++)
    for($j=$i+1; $j<$lnth; $j++)
        if($ara[$i] > $ara[$j])
            list($ara[$i], $ara[$j]) = array($ara[$j], $ara[$i]);

for($i=0; $i<$lnth; $i++)
    echo $ara[$i]." ";
echo "\n";

/*
Sample Input:
4 3 2 1
Sample Output
1 2 3 4
*/