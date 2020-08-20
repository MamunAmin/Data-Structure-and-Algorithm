<?php

function GCD($x, $y)
{
	if($y == 0)
		return $x;
	return GCD($y, $x%$y);
}
function LCM($m, $n)
{
	$gcd = GCD($m, $n);
	return ($m/$gcd)*$n;
}

list($a, $b) = explode(' ', readline());
$ans = LCM($a, $b);
echo $ans."\n";

/*
Sample Input:
4 3
Sample Output
12
*/