<?php

function seivePrime(&$seive)
{
    for($i=4; $i<=$GLOBALS['till']; $i+=2)
        $seive[$i] = true;
    $limit = floor(sqrt($GLOBALS['till']))+1;
    for($i=3; $i<=$limit; $i+=2)
    {
        if(!$seive[$i])
            for($j=$i*$i; $j<=$GLOBALS['till']; $j+=($i*2))
                $seive[$j] = 1;
    }
}

$till = 1000000; //input  here - $till > 2
$seive = array();
$seive = array_fill(0, $till+5 , false);
seivePrime($seive);
echo '2 ';
for($i=3; $i<=$till; $i+=2)
    if(!$seive[$i])
        echo $i.' ';
