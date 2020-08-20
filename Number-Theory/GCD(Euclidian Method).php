<?php

function GCD($x, $y)
{
	if($y == 0)
		return $x;
	return GCD($y, $x%$y);
}

list($a, $b) = explode(' ', readline());
$ans = GCD($a, $b);
echo $ans."\n";

/*
Sample Input:
4 3
Sample Output
1
*/