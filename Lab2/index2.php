<!DOCTYPE html>
<html>
<body>

<?php
echo ("the first array");
echo "<br>";
$x= array(1,2,3,4,5);
print_r($x);
$j = count($x);
echo "<br>";
$y= array();
for($i=0; $i<$j; $i++){
$y[$i]=$x[$i]*2;
}
echo ("the second array");
echo "<br>";
print_r($y);
?> 

</body>
</html>
