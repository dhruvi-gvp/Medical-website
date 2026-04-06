<?php
session_start();

if(!isset($_SESSION["cart"]) || empty($_SESSION["cart"])){
    header("Location: cart.php");
    exit;
}

$discount = 0;
if(!isset($_SESSION["first_order_discount"])){
    $discount = 10; // 10% discount for first order
    $_SESSION["first_order_discount"] = true;
}

$total = 0;
foreach($_SESSION["cart"] as $name => $item){
    $total += $item["price"] * $item["qty"];
}

$discounted_total = $total * (1 - $discount / 100);

if(isset($_POST["place_order"])){
    // Here you can add order processing logic, like saving to database, sending email, etc.
    // For now, just clear the cart and show success message
    unset($_SESSION["cart"]);
    $message = "Order placed successfully! Total paid: ₹" . $discounted_total;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Summary</title>
<style>
body{
font-family:Poppins,sans-serif;
background:#0b140d;
color:white;
margin:0;
padding:40px;
}

h2{
text-align:center;
}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:25px;
padding:40px;
}

.card{
background:#162016;
border-radius:15px;
overflow:hidden;
padding:15px;
text-align:center;
}

.price{
color:#7CFC9F;
font-weight:bold;
margin:10px 0;
}

.total{
text-align:center;
margin:20px 0;
font-size:18px;
}

.discount{
color:#FFD700;
font-weight:bold;
}

button{
padding:10px 20px;
border:none;
background:#7CFC9F;
color:black;
border-radius:20px;
cursor:pointer;
font-size:16px;
}

.msg{
text-align:center;
background:#7CFC9F;
color:black;
padding:10px;
margin:20px 0;
}
</style>
</head>
<body>

<h2>Order Summary</h2>

<?php if(isset($message)){ ?>
<div class="msg"><?php echo $message; ?></div>
<?php } ?>

<?php if(!isset($_POST["place_order"])){ ?>

<div class="grid">
<?php
foreach($_SESSION["cart"] as $name => $item){
    // Assuming we have images, but since cart doesn't store images, use a placeholder or find from products
    $image = "images/" . strtolower(str_replace(" ", "-", $name)) . ".jpg"; // approximate
?>
<div class="card">
<h3><?php echo $name; ?></h3>
<div class="price">₹<?php echo $item["price"]; ?> x <?php echo $item["qty"]; ?> = ₹<?php echo $item["price"] * $item["qty"]; ?></div>
</div>
<?php } ?>
</div>

<div class="total">
Original Total: ₹<?php echo $total; ?><br>
<?php if($discount > 0){ ?>
Discount (<?php echo $discount; ?>% First Order): -₹<?php echo $total * $discount / 100; ?><br>
<?php } ?>
Final Total: ₹<?php echo $discounted_total; ?>
</div>

<form method="post">
<button name="place_order">Place Order</button>
</form>

<?php } ?>

<a href="cart.php">Back to Cart</a>

</body>
</html>