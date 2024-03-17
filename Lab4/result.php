<style>
div{
    background-color:orange;
    margin-top:10%;
    margin-left:5%;
    padding:5%;
    width:30%;
}
</style>
<?php
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$address = $_GET["address"];
$s = $_GET["s"];
$pizza_size = $_GET["pizza_size"];
$expecting = array('cheese','pepperoni','maushrooms');
$quantity = $_GET["quantity"];
$delivery = $_GET["delivery"];

$burger=0;
$pasta=0;
if($s=="Burger"){
    $burger=12;
} else if($s=="Pasta"){
    $pasta=8;
}
$xx='';
$x=0;
$yy='';
$y=0;
$zz='';
$z=0;
if($expecting[0]=='cheese'){
$xx='cheese, ';
$x=3;
}else if($expecting[1]=='pepperoni'){
$yy='pepperoni, ';
$y=2;
}
else{
$zz='maushrooms';
$z=4;
}
$total=($pizza_size+$burger+$pasta+$x+$y+$z)*$quantity;
echo("<div>
<h1> Order Summary </h1>
<p><b>Name:</b> $name </p>
<p><b>Email:</b> $email </p>
<p><b>Phone:</b> $phone </p>
<p><b>Address:</b> $address </p>
<p><b>Food:</b> $s </p>
<p><b>Size:</b> $pizza_size </p>
<p><b>Extra Toppings:</b> $xx $yy $zz</p>
<p><b>Quantity:</b> $quantity </p>
<p><b>Total Price:$ </b> $total </p>
<p><b>Delivery Preference:</b> $delivery </p>
</div>")
?>