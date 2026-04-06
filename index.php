<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CURA | Your Health, Our Priority</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#121a12;
color:#e0eee0;
}

/* NAVBAR */

.navbar{
display:flex;
align-items:center;
justify-content:space-between;
padding:15px 6%;
background:#1a241a;
flex-wrap:wrap;
}

.logo{
font-size:24px;
font-weight:700;
color:#C2DF9F;
}

/* NAV LINKS */

.nav-links{
list-style:none;
display:flex;
gap:20px;
}

.nav-links a{
text-decoration:none;
color:white;
transition:.3s;
}

.nav-links a:hover{
color:#A2DF9F;
}

/* SEARCH BAR */

.search-container{
display:flex;
width:35%;
}

.search-input{
flex:1;
padding:10px;
border:none;
outline:none;
border-radius:30px 0 0 30px;
background:#2a362a;
color:white;
}

.search-btn{
padding:10px 20px;
border:none;
background:#A2DF9F;
color:#121a12;
border-radius:0 30px 30px 0;
cursor:pointer;
}

/* HERO */

.hero{
height:70vh;

background:
linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
url("images/hero.jpg");

background-size:cover;
background-position:center;

display:flex;
align-items:center;
justify-content:center;
text-align:center;
}

.hero h1{
font-size:3rem;
margin-bottom:10px;
}

.btn{
display:inline-block;
margin-top:20px;
padding:12px 25px;
background:#A2DF9F;
color:#121a12;
border-radius:25px;
text-decoration:none;
font-weight:600;
}

/* PRODUCTS */

.products{
padding:60px 6%;
text-align:center;
}

.product-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
margin-top:30px;
}

.card{
background:#1e291e;
padding:25px;
border-radius:20px;
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.buy-btn{
margin-top:10px;
padding:10px 20px;
border:none;
background:#A2DF9F;
color:#121a12;
border-radius:20px;
cursor:pointer;
}

/* FOOTER */

footer{
background:#1a241a;
text-align:center;
padding:20px;
margin-top:40px;
}

</style>

</head>

<body>

<header>

<nav class="navbar">

<div class="logo">CURA</div>

<div class="search-container">
<input type="text" class="search-input" placeholder="Search medicines...">
<button class="search-btn">🔍</button>
</div>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="medicines.php">Medicines</a></li>
<li><a href="wellness.php">Wellness</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="orders.php">Orders</a></li>
<li><a href="cart.php">Cart</a></li>
</ul>

</nav>

</header>


<section class="hero">

<div>

<h1>Healthcare Simplified</h1>

<p>Get your medicines delivered safely</p>

<a href="#shop" class="btn">Shop Now</a>

</div>

</section>


<section id="shop" class="products">

<h2>Trending Categories</h2>

<div class="product-grid">

<div class="card">
<h3>Essential Meds</h3>
<p>Explore Range</p>
<button class="buy-btn">View More</button>
</div>

<div class="card">
<h3>Skincare</h3>
<p>Explore Range</p>
<button class="buy-btn">View More</button>
</div>

<div class="card">
<h3>Supplements</h3>
<p>Explore Range</p>
<button class="buy-btn">View More</button>
</div>

<div class="card">
<h3>First Aid</h3>
<p>Explore Range</p>
<button class="buy-btn">View More</button>
</div>

</div>

</section>


<footer>

<p>&copy; 2026 CURA Healthcare</p>

</footer>


<script>

document.querySelectorAll(".buy-btn").forEach(btn=>{

btn.addEventListener("click",function(){

let name=this.parentElement.querySelector("h3").innerText;

alert("Opening "+name);

});

});

</script>

</body>
</html>