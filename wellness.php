<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CURA | Wellness</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

:root{

--bg-main:#121A12;
--bg-card:#1B2A1B;

--accent-light:#C2DF9F;
--accent-main:#A2DF9F;
--accent-hover:#9FDFBC;

--text-light:#EAF7EA;

}

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:var(--bg-main);
color:var(--text-light);
}

/* NAVBAR */

.navbar{
display:flex;
align-items:center;
justify-content:space-between;
padding:15px 6%;
background:var(--bg-card);
flex-wrap:wrap;
}

.logo{
font-size:24px;
font-weight:700;
color:var(--accent-light);
}

/* SEARCH BAR */

.search-container{
display:flex;
width:40%;
max-width:400px;
}

.search-input{
flex:1;
padding:10px;
border:none;
outline:none;
border-radius:30px 0 0 30px;
background:#263326;
color:white;
}

.search-btn{
padding:10px 20px;
border:none;
background:var(--accent-main);
color:#0f1a0f;
border-radius:0 30px 30px 0;
cursor:pointer;
font-weight:600;
}

.search-btn:hover{
background:var(--accent-hover);
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
color:var(--accent-light);
}

/* HERO */

.hero{
height:350px;
background:
linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
url("https://images.unsplash.com/photo-1544367567-0f2fcb009e0b");
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
font-size:40px;
font-weight:600;
}

/* SECTION */

.container{
padding:70px 6%;
text-align:center;
}

.container h2{
margin-bottom:10px;
color:var(--accent-light);
}

.container p{
margin-bottom:40px;
color:#bbb;
}

/* GRID */

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

/* CARD */

.card{
background:var(--bg-card);
padding:25px;
border-radius:20px;
transition:.4s;
border:1px solid rgba(255,255,255,0.05);
}

.card:hover{
transform:translateY(-10px);
border-color:var(--accent-main);
}

.card h3{
margin-bottom:10px;
color:var(--accent-light);
}

/* BUTTON */

.btn{
margin-top:15px;
padding:10px 25px;
border:none;
border-radius:25px;
background:var(--accent-main);
color:#0f1a0f;
font-weight:600;
cursor:pointer;
}

.btn:hover{
background:var(--accent-hover);
}

/* FOOTER */

footer{
background:#0e150e;
text-align:center;
padding:20px;
margin-top:60px;
font-size:14px;
}

/* RESPONSIVE */

@media(max-width:768px){

.navbar{
flex-direction:column;
gap:15px;
}

.search-container{
width:100%;
}

.nav-links{
flex-wrap:wrap;
justify-content:center;
}

.hero{
font-size:28px;
text-align:center;
padding:20px;
}

}

</style>
</head>

<body>

<nav class="navbar">

<div class="logo">CURA</div>

<div class="search-container">
<input type="text" class="search-input" placeholder="Search wellness products...">
<button class="search-btn">🔍</button>
</div>

<ul class="nav-links">
<li><a href="#">Home</a></li>
<li><a href="#">Medicines</a></li>
<li><a href="#">Wellness</a></li>
<li><a href="#">Contact</a></li>
</ul>

</nav>

<div class="hero">
Your Path to Wellness
</div>

<div class="container">

<h2>Wellness & Lifestyle</h2>
<p>Aesthetic products for your daily health.</p>

<div class="grid">

<div class="card">
<h3>Yoga Mats</h3>
<p>Improve flexibility and balance.</p>
<button class="btn">Explore</button>
</div>

<div class="card">
<h3>Organic Herbal Tea</h3>
<p>Natural detox for your body.</p>
<button class="btn">Shop</button>
</div>

<div class="card">
<h3>Essential Oils</h3>
<p>Aromatherapy for relaxation.</p>
<button class="btn">Buy</button>
</div>

</div>

</div>

<footer>
© 2026 CURA Healthcare
</footer>

<script>

document.querySelector(".search-btn").addEventListener("click",function(){

let value=document.querySelector(".search-input").value;

if(value===""){
alert("Please enter something to search");
}
else{
alert("Searching for: "+value);
}

});

</script>

</body>
</html>