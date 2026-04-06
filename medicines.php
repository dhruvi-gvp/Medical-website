<?php
session_start();

if(!isset($_SESSION["cart"])){
$_SESSION["cart"]=[];
}

if(isset($_POST["add"])){

$name=$_POST["name"];
$price=$_POST["price"];

if(isset($_SESSION["cart"][$name])){
$_SESSION["cart"][$name]["qty"]++;
}else{

$_SESSION["cart"][$name]=[
"price"=>$price,
"qty"=>1
];

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>CURA Medicines</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:Poppins;
background:#0b140d;
color:white;
}

/* NAVBAR */

nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
background:#111;
}

.logo{
font-size:22px;
color:#7CFC9F;
font-weight:bold;
}

.search input{
padding:8px 15px;
width:280px;
border:none;
border-radius:5px;
}

.cart{
color:#7CFC9F;
text-decoration:none;
}

/* FILTER */

.filter{
text-align:center;
padding:15px;
}

.filter button{
margin:5px;
padding:8px 18px;
border:none;
border-radius:20px;
background:#162016;
color:white;
cursor:pointer;
}

.filter button:hover{
background:#7CFC9F;
color:black;
}

/* GRID */

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:25px;
padding:30px;
}

/* CARD */

.card{
background:#162016;
border-radius:15px;
padding:15px;
text-align:center;
transition:.3s;
}

.card:hover{
transform:translateY(-6px);
box-shadow:0 10px 25px black;
}

.card img{
width:100%;
height:160px;
object-fit:cover;
border-radius:10px;
}

/* TEXT */

.name{
margin:10px 0;
}

.price{
color:#7CFC9F;
font-size:18px;
}

/* BUTTON */

button{
margin-top:10px;
padding:8px 15px;
border:none;
border-radius:20px;
background:#7CFC9F;
color:black;
cursor:pointer;
}

</style>

</head>

<body>

<nav>

<div class="logo">
CURA 💊
</div>

<div class="search">
<input type="text" placeholder="Search medicine..." onkeyup="searchMed(this.value)">
</div>

<a href="cart.php" class="cart">
🛒 View Cart
</a>

</nav>

<div class="filter">

<button onclick="filterCat('all')">All</button>
<button onclick="filterCat('tablet')">Tablet</button>
<button onclick="filterCat('syrup')">Syrup</button>
<button onclick="filterCat('vitamin')">Vitamin</button>
<button onclick="filterCat('injection')">Injection</button>

</div>

<div class="grid" id="grid">

<?php

$products=[

["Paracetamol",50,"tablet","https://images.unsplash.com/photo-1585435557343-3b092031a831"],
["Ibuprofen",80,"tablet","https://images.unsplash.com/photo-1587854692152-cbe660dbde88"],
["Aspirin",40,"tablet","https://images.unsplash.com/photo-1471864190281-a93a3070b6de"],
["Vitamin C",90,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["Cetirizine",60,"tablet","https://images.unsplash.com/photo-1584017911766-d451b3d0e843"],
["Amoxicillin",120,"tablet","https://images.unsplash.com/photo-1579165466741-7f35e4755660"],
["Cough Syrup",110,"syrup","https://images.unsplash.com/photo-1580281657521-9bffef0b5b3d"],
["Insulin",350,"injection","https://images.unsplash.com/photo-1580281780460-82d2771a5c3c"],
["Digene",55,"tablet","https://images.unsplash.com/photo-1585435557343-3b092031a831"],
["Dolo 650",35,"tablet","https://images.unsplash.com/photo-1587854692152-cbe660dbde88"],

["ORS Powder",25,"vitamin","https://images.unsplash.com/photo-1580281657521-9bffef0b5b3d"],
["Zinc Tablet",70,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["B Complex",95,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["Crocin",45,"tablet","https://images.unsplash.com/photo-1584017911766-d451b3d0e843"],
["Benadryl",130,"syrup","https://images.unsplash.com/photo-1580281657521-9bffef0b5b3d"],

["Pantoprazole",85,"tablet","https://images.unsplash.com/photo-1585435557343-3b092031a831"],
["Metformin",140,"tablet","https://images.unsplash.com/photo-1587854692152-cbe660dbde88"],
["Azithromycin",160,"tablet","https://images.unsplash.com/photo-1471864190281-a93a3070b6de"],
["Multivitamin",180,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["Liv 52",150,"syrup","https://images.unsplash.com/photo-1580281657521-9bffef0b5b3d"],

["Calcium",120,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["Iron",100,"vitamin","https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2"],
["Rabeprazole",95,"tablet","https://images.unsplash.com/photo-1585435557343-3b092031a831"],
["Domperidone",85,"tablet","https://images.unsplash.com/photo-1587854692152-cbe660dbde88"],
["Norfloxacin",155,"tablet","https://images.unsplash.com/photo-1471864190281-a93a3070b6de"]

];

foreach($products as $p){
?>

<div class="card" data-cat="<?php echo $p[2]; ?>">

<img src="<?php echo $p[3]; ?>">

<div class="name">
<?php echo $p[0]; ?>
</div>

<div class="price">
₹<?php echo $p[1]; ?>
</div>

<form method="post">

<input type="hidden" name="name" value="<?php echo $p[0]; ?>">
<input type="hidden" name="price" value="<?php echo $p[1]; ?>">

<button name="add">
Add to Cart
</button>

</form>

</div>

<?php } ?>

</div>

<script>

function searchMed(v){
v=v.toLowerCase();

document.querySelectorAll(".card").forEach(c=>{
c.style.display=c.innerText.toLowerCase().includes(v)?"block":"none";
});
}

function filterCat(cat){
document.querySelectorAll(".card").forEach(c=>{
c.style.display=(cat=="all"||c.dataset.cat==cat)?"block":"none";
});
}

</script>

</body>
</html>