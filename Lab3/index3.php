<style>
div{
    margin-top:5%;
    margin-right:30%;
    margin-left:20%;
    background-color:rgb(113, 211, 187);
    box-shadow: 2px 1px 20px 2px red;
    width:35%;
    height:85%;
    font-size:30px;
    padding-left:5px;
}

</style>


<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$type = $_POST["type"];
$size = $_POST["size"];
$Quanity = $_POST["Quanity"];
$resulte=$type*$Quanity;
$t;
$date=date('d-m-y h:i:s');
$number=rand(10000,90000);
if($type==15){
    $t="T-shirt";
}else if($type==20){
    $t="Shirt";
}else if($type==25){
    $t="Pants";
}else if($type==30){
    $t="Dress";
}else if($type==35){
    $t="Jacket";
};
echo "
<div>
<h1>Purchise Detailse</h1>
<b>Name:</b> $name <br> <br> 
<b>Email:</b> $email<br> <br> 
<b>Address:</b> $text<br> <br> 
<b>Cloth Type:</b> $t<br> <br> 
<b>Cloth Size:</b> $size<br> <br> 
<b>Quanity:</b> $Quanity<br> <br> 
<b>The total price</b> $resulte <br> <br>
<b>Configrition Number:</b> $number <br> <br>
<b>Date and Time:</b> $date <br> <br>
<p>Thank you for shopping with us</p>
</div>
";
?>