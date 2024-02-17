<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid;
  border-collapse: collapse;
  width: 50%;
  text-align:left;
}
</style>
</head>
<body>

<?php
$student = array("Name"=>"John Doe","Age"=>20,"Address"=>"USA","Major"=>"Computer Science","PhoneNumber"=>"(613) 799-4328","Email"=>"jdoe@sun.edu","GPA"=>"A");
echo "<h1> Student Details </h1>";
echo "<table>
<tr> <th>Field</th> <th>Value</th> </tr>
<tr> <td>Name: </td> <td>$student[Name]</td> </tr>
<tr> <td>Age: </td> <td>$student[Age]</td> </tr>
<tr> <td>Address: </td> <td>$student[Address]</td> </tr>
<tr> <td>Major: </td> <td>$student[Major]</td> </tr>
<tr> <td>Phone number: </td> <td>$student[PhoneNumber]</td> </tr>
<tr> <td>Email: </td> <td>$student[Email]</td> </tr>
<tr> <td>GPA: </td> <td>$student[GPA]</td> </tr>

</table>";
?> 

</body>
</html>
