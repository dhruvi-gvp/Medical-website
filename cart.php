<?php
session_start();

if(!isset($_SESSION["cart"])){
$_SESSION["cart"]=[];
}

if(isset($_POST["update"])){

$name=$_POST["name"];
$qty=$_POST["qty"];

if($qty<=0){
unset($_SESSION["cart"][$name]);
}else{
$_SESSION["cart"][$name]["qty"]=$qty;
}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Cart</title>

<style>

body{

font-family:Poppins;
background:#0b140d;
color:white;

}

table{

width:80%;
margin:auto;
margin-top:40px;

border-collapse:collapse;

}

th,td{

padding:12px;

border-bottom:1px solid gray;

text-align:center;

}

button{

padding:6px 15px;

border:none;
background:#7CFC9F;
border-radius:20px;

}

a{

color:#7CFC9F;

text-decoration:none;

display:block;

text-align:center;

margin-top:20px;

}

</style>

</head>

<body>

<h2 align="center">

Your Cart 🛒

</h2>

<table>

<tr>

<th>Medicine</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>

</tr>

<?php

$total=0;

foreach($_SESSION["cart"] as $name=>$item){

$sub=$item["price"]*$item["qty"];

$total+=$sub;

?>

<tr>

<td><?php echo $name; ?></td>

<td>₹<?php echo $item["price"]; ?></td>

<td>

<form method="post">

<input type="hidden" name="name" value="<?php echo $name; ?>">

<input type="number" name="qty" value="<?php echo $item["qty"]; ?>" min="0">

<button name="update">

Update

</button>

</form>

</td>

<td>

₹<?php echo $sub; ?>

</td>

</tr>

<?php } ?>

</table>

<h2 align="center">

Total ₹<?php echo $total; ?>

</h2>

<a href="medicines.php">

⬅ Continue Shopping

</a>

</body>

</html>