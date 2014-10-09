<?php

$word = "World";
//It will take some time for " to execute - performance issue
echo "Hello $word<br>";

//It's faster to execute with single quote on server
echo 'Hello $word';

echo "<br>";
$word2 = 'World2';

echo 'Hello '.$word2.'<br>';

$num = 1;
if($num == 1)
{
	echo 'Num One';
}
elseif ($num==2)
{
	echo 'Num two';
}
else
{
	echo 'Num Num';
}

?>