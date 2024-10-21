<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$h = 2;       // Integer
$i = 2.24;    // Float
$j = "14 meters"; 
$k = "meters 14"; // String
$l = "zahra"; // String
$m = true;    // Boolean
$n = NULL;    // NULL

$h = (int) $h;
$i = (int) $i;
$j = (int) $j;
$k = (int) $k;
$l = (int) $l;
$m = (int) $m;
$n = (int) $n;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($h);
var_dump($i);
var_dump($j);
var_dump($k);
var_dump($l);
var_dump($m);
var_dump($n);
?> 
</pre>

<p>Note that when casting a string that starts with a number, the (int) function uses that number. 
    If it does not start with a number, the (int) function convert strings into the number 0.</p>

</body>
</html>