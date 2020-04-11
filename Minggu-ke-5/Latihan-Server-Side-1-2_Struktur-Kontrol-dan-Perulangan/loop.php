<?php
echo "Ini Adalah Perulangan For";
for ($x = 1; $x <= 5; $x++) 
{
    echo "<br>";
    for ($y = 1; $y <= $x; $y++) 
	{
        echo "$x";
    }
}

echo "<br><br>";
echo "Ini Adalah Perulangan While";
$a = 1;
$b = 1;
while ($a <= 5)
{
    echo "<br>";
    while ($b <= $a) 
	{
        echo "$a";
        $b++;
    }
    $a++;
    $b = 1;
}
?>