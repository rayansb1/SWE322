<style>
p{
 color:red;
}

</style>


<?php 

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$email = $_POST["email"];
$Idate = $_POST["Idate"];
$Odate = $_POST["Odate"];
$Rtype = $_POST["Rtype"];
$Ftype = $_POST["Ftype"];
echo"Name: $Fname  $Lname <br>";
echo"Email: $email <br>";
echo"Check In Date: $Idate <br>";
echo"Check Out Date: $Odate <br>";
echo"Room Type: $Rtype <br>";
echo"Food Type: $Ftype <br>";

?>