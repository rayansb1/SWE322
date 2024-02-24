<style>
table{
  background-color:gray;
  width:100%;
}
tr,td,th{
  font-size:30px;
  border-style: solid;
  border-width: 0px 0px 5px 0px;
  border-color:blue;
  text-align:left;
}


</style>


<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$date = $_GET["dob"];
$grade = $_GET["grade"];
$transportation = $_GET["transportation"];
$guardian = $_GET["guardian"];
$address = $_GET["address"];
$phone = $_GET["phone"];
echo"<table>
<tr> <th>Field</th> <th>Value</th> </tr>
<tr> <td>Name: </td> <td>$name</td> </tr>
<tr> <td>Email: </td> <td>$email</td> </tr>
<tr> <td>date: </td> <td>$date</td> </tr>
<tr> <td>Grade: </td> <td>$grade</td> </tr>
<tr> <td>transportation: </td> <td>$transportation</td> </tr>
<tr> <td>guardian: </td> <td>$guardian</td> </tr>
<tr> <td>address: </td> <td>$address</td> </tr>
<tr> <td>phone: </td> <td>$phone</td> </tr>
</table>";

?>