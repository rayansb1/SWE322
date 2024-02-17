<!DOCTYPE html>
<html>
<body>

<?php
$numbers=array(10, 40, 50, 100, 80, 90, 30, 60);
print_r($numbers);
echo("<br>");
$x=count($numbers);
$sum=array_sum($numbers);
echo("the sum is: ".$sum);
echo("<br>");
echo("the average: ".$sum/$x);
echo("<br>");
sort($numbers);
echo("the ascending order of the array is: ");
print_r($numbers);
echo("<br>");
rsort($numbers);
echo("the descending order of the array is: ");
print_r($numbers);
echo("<br>");
echo("the reverse of the array is: ");
print_r(array_reverse($numbers));
?> 

</body>
</html>
