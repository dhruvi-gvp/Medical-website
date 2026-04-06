<?php
session_start();

if(!isset($_SESSION["cart"])){
$_SESSION["cart"]=[];
}

if(isset($_POST["add"])){

$name=trim($_POST["name"]);
$price=floatval($_POST["price"]);

if(empty($name) || $price<=0){
exit("Invalid data");
}

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
<html lang="en">
<head>

<title>CURA Medicine Store - Your Health, Our Priority</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Inter',sans-serif;
}

body{
background:#f4f7fb;
color:#333333;
}

/* HEADER */

.header{
background:#ffffff;
color:#333333;
padding:20px 0;
box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

.header-content{
max-width:1200px;
margin:0 auto;
padding:0 20px;
display:flex;
align-items:center;
justify-content:space-between;
}

.logo-section{
display:flex;
align-items:center;
gap:15px;
}

.logo-section i{
font-size:40px;
color:#005da3;
}

.logo-text h1{
font-size:28px;
font-weight:700;
margin-bottom:2px;
color:#005da3;
}

.logo-text p{
font-size:14px;
opacity:0.9;
color:#666666;
}

.search-cart{
display:flex;
align-items:center;
gap:20px;
}

.search-box{
position:relative;
width:400px;
}

.search-box input{
width:100%;
padding:12px 45px 12px 16px;
border:1px solid #d4d9e0;
border-radius:8px;
background:#ffffff;
color:#333333;
font-size:14px;
transition:0.3s;
}

.search-box input:focus{
outline:none;
box-shadow:0 0 0 3px rgba(0, 93, 163, 0.1);
border-color:#005da3;
}

.search-box button{
position:absolute;
right:8px;
top:50%;
transform:translateY(-50%);
background:transparent;
border:none;
border-radius:50%;
width:30px;
height:30px;
cursor:pointer;
color:#005da3;
transition:0.3s;
}

.search-box button:hover{
color:#e45b4c;
}

.cart-btn{
background:#e45b4c;
color:#ffffff;
padding:12px 20px;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:600;
text-decoration:none;
display:flex;
align-items:center;
gap:8px;
transition:0.3s;
}

.cart-btn:hover{
background:#d84639;
transform:translateY(-2px);
}

/* NAVIGATION */

.main-nav{
background:#ffffff;
padding:15px 0;
box-shadow:0 2px 8px rgba(0,0,0,0.08);
border-bottom:1px solid #e0e0e0;
}

.nav-container{
max-width:1200px;
margin:0 auto;
padding:0 20px;
}

.nav-links{
display:flex;
justify-content:center;
gap:30px;
list-style:none;
}

.nav-links a{
color:#005da3;
text-decoration:none;
font-weight:500;
padding:10px 0;
transition:0.3s;
}

.nav-links a:hover,
.nav-links a.active{
color:#e45b4c;
border-bottom:2px solid #e45b4c;
}

/* HERO SECTION */

.hero{
background:radial-gradient(circle at top left, rgba(255,255,255,0.12), transparent 22%),
linear-gradient(135deg, #005da3 0%, #003d7a 100%);
height:380px;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:#ffffff;
position:relative;
overflow:hidden;
}

.hero::before{
content:"";
position:absolute;
left:-20px;
top:20px;
width:260px;
height:260px;
background:rgba(255,255,255,0.08);
border-radius:50%;
filter:blur(12px);
}

.hero::after{
content:"";
position:absolute;
right:-40px;
bottom:-40px;
width:180px;
height:180px;
background:rgba(255,255,255,0.08);
border-radius:50%;
filter:blur(10px);
}

.hero-content{
position:relative;
max-width:700px;
}

.hero-content h1{
font-size:48px;
font-weight:700;
margin-bottom:15px;
color:#ffffff;
letter-spacing:-0.05em;
}

.hero-content p{
font-size:20px;
margin-bottom:30px;
opacity:0.95;
color:rgba(255,255,255,0.95);
line-height:1.6;
}

.cta-btn{
background:#e45b4c;
color:#ffffff;
padding:14px 34px;
border:none;
border-radius:999px;
font-size:16px;
font-weight:700;
cursor:pointer;
text-decoration:none;
display:inline-block;
transition:transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
}

.cta-btn:hover{
background:#ff856f;
transform:translateY(-2px);
box-shadow:0 18px 30px rgba(232,92,76,0.22);
}

.cta-btn i{
margin-left:10px;
transition:transform 0.25s ease;
}

.cta-btn:hover i{
transform:translateX(4px);
}

/* CATEGORIES */

.categories{
padding:60px 20px;
background:#ffffff;
text-align:center;
}

.categories h2{
font-size:32px;
margin-bottom:40px;
color:#005da3;
font-weight:700;
letter-spacing:-0.5px;
}

/* GRID */

.category-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(160px,1fr));
gap:20px;
}

/* CARD */

.category-card{
background:#f9fafb;
padding:25px 15px;
border-radius:18px;
cursor:pointer;
position:relative;
transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
border:1px solid #e5e7eb;
text-align:center;
overflow:hidden;
}

.category-card::before{
content:"";
position:absolute;
left:50%;
top:0;
width:120%;
height:100%;
background:radial-gradient(circle at top, rgba(0,93,163,0.08), transparent 40%);
transform:translateX(-50%) translateY(-20%);
opacity:0;
transition:opacity 0.3s ease, transform 0.3s ease;
}

.category-card:hover::before{
opacity:1;
transform:translateX(-50%) translateY(0);
}

.category-card:hover{
transform:translateY(-8px);
box-shadow:0 20px 35px rgba(0,0,0,0.08);
border-color:#005da3;
background:#ffffff;
}

/* ICON */

.category-icon{
font-size:32px;
color:#ffffff;
background:#005da3;
width:64px;
height:64px;
line-height:64px;
border-radius:8px;
margin:0 auto 12px;
display:block;
transition:all 0.2s ease;
}

.category-card:hover .category-icon{
background:#e45b4c;
}

/* TITLE */

.category-card h3{
font-size:15px;
margin-bottom:6px;
color:#1f2937;
font-weight:600;
}

/* DESCRIPTION */

.category-card p{
font-size:12px;
color:#6b7280;
margin-bottom:0;
line-height:1.4;
}

/* COUNT */

.category-count{
background:#e5e7eb;
color:#374151;
padding:5px 10px;
border-radius:4px;
font-size:11px;
font-weight:600;
display:inline-block;
border:none;
margin-top:8px;
}

/* ACTIVE EFFECT */

.category-card:active{
transform:scale(0.96);
}

/* MOBILE */

@media(max-width:768px){

.category-card{
padding:25px 15px;
}

.categories h2{
font-size:28px;
}

}

/* PRODUCTS SECTION */

.products-section{
padding:60px 0;
background:#f9fafb;
}

.products-section h2{
text-align:center;
font-size:32px;
margin-bottom:15px;
color:#1f2937;
font-weight:700;
letter-spacing:-0.5px;
}

.section-subtitle{
text-align:center;
color:#6b7280;
margin-bottom:45px;
font-size:16px;
}

.products-container{
max-width:1200px;
margin:0 auto;
padding:0 20px;
}

.filter-bar{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
flex-wrap:wrap;
gap:15px;
}

.filter-buttons{
display:flex;
gap:12px;
flex-wrap:wrap;
}

.filter-btn{
padding:10px 20px;
border:1px solid #d1d5db;
background:#ffffff;
border-radius:999px;
cursor:pointer;
font-weight:600;
color:#374151;
transition:all 0.25s ease;
font-size:14px;
}

.filter-btn:hover{
border-color:#005da3;
color:#005da3;
transform:translateY(-2px);
box-shadow:0 14px 28px rgba(0,93,163,0.08);
}

.filter-btn.active{
background:#005da3;
border-color:#005da3;
color:#ffffff;
box-shadow:0 18px 35px rgba(0,93,163,0.18);
}

.search-small{
display:flex;
gap:8px;
}

.search-small input{
padding:9px 14px;
border:1px solid #d1d5db;
border-radius:6px;
width:240px;
background:#ffffff;
color:#1f2937;
transition:all 0.2s ease;
font-size:14px;
}

.search-small input:focus{
outline:none;
border-color:#005da3;
box-shadow:0 0 0 3px rgba(0, 93, 163, 0.1);
}

.search-small button{
padding:9px 14px;
background:#005da3;
border:none;
border-radius:6px;
cursor:pointer;
color:#ffffff;
transition:all 0.2s ease;
font-weight:500;
}

.search-small button:hover{
background:#003d7a;
}

/* PRODUCTS GRID */

.products-grid{
display:grid;
grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
gap:24px;
}

/* PRODUCT CARD */

.product-card{
background:#ffffff;
border-radius:18px;
overflow:hidden;
box-shadow:0 12px 25px rgba(0,0,0,0.08);
transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
border:1px solid #e5e7eb;
}

.product-card:hover{
transform:translateY(-10px);
box-shadow:0 20px 40px rgba(0,0,0,0.15);
border:1px solid #005da3;
}

.product-image{
height:190px;
overflow:hidden;
position:relative;
background:#f3f4f6;
}

.product-image::after{
content:"";
position:absolute;
left:0;
top:0;
width:100%;
height:100%;
background:linear-gradient(180deg, rgba(255,255,255,0.12), rgba(0,0,0,0));
pointer-events:none;
}

.product-image img{
width:100%;
height:100%;
object-fit:cover;
transition:transform 0.2s ease;
}

.product-card:hover .product-image img{
transform:scale(1.05);
}

.product-badge{
position:absolute;
top:10px;
right:10px;
background:#e45b4c;
color:#ffffff;
padding:6px 12px;
border-radius:999px;
font-size:11px;
font-weight:700;
text-transform:capitalize;
box-shadow:0 10px 25px rgba(228,69,57,0.18);
}

.product-info{
padding:16px;
}

.product-name{
font-size:15px;
font-weight:600;
margin-bottom:6px;
color:#1f2937;
line-height:1.4;
}

.product-price{
font-size:17px;
font-weight:700;
color:#e45b4c;
margin-bottom:4px;
}

.product-mrp{
font-size:12px;
color:#9ca3af;
text-decoration:line-through;
margin-bottom:12px;
}

.product-category{
color:#6b7280;
font-size:12px;
margin-bottom:12px;
text-transform:capitalize;
}

.add-to-cart{
width:100%;
padding:10px;
background:#f3f4f6;
color:#005da3;
border:1px solid #e5e7eb;
border-radius:6px;
font-weight:600;
cursor:pointer;
transition:all 0.2s ease;
font-size:14px;
}

.add-to-cart:hover{
background:#005da3;
color:#ffffff;
border-color:#005da3;
}

/* FOOTER */

.footer{
background:#ffffff;
color:#1f2937;
padding:40px 0 20px;
border-top:1px solid #e5e7eb;
}

.footer-content{
max-width:1200px;
margin:0 auto;
padding:0 20px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:32px;
}

.footer-section h3{
color:#005da3;
margin-bottom:16px;
font-size:16px;
font-weight:600;
}

.footer-section p,
.footer-section a{
color:#6b7280;
text-decoration:none;
line-height:1.6;
transition:color 0.2s ease;
font-size:14px;
}

.footer-section a:hover{
color:#005da3;
}

.footer-bottom{
text-align:center;
margin-top:32px;
padding-top:20px;
border-top:1px solid #e5e7eb;
color:#6b7280;
font-size:13px;
}

/* RESPONSIVE */

@media (max-width:768px){
.header-content{
flex-direction:column;
gap:20px;
}

.search-box{
width:100%;
}

.nav-links{
flex-wrap:wrap;
gap:15px;
}

.category-grid{
grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
}

.products-grid{
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
}

.hero-content h1{
font-size:32px;
}

.filter-bar{
flex-direction:column;
align-items:stretch;
}
}

/* DARK THEME OVERRIDES */
body{background:#0c121a;color:#e9eef5;}
body::selection{background:rgba(111,189,255,0.35);color:#ffffff;}
.navbar{background:#111827;box-shadow:0 2px 20px rgba(0,0,0,0.45);}
.logo{color:#7fb7ff;}
.nav-links a{color:#c8d8ff;}
.nav-links a:hover,.nav-links a.active{color:#ff8a65;border-bottom-color:#ff8a65;}
.search-box input{background:#111d2d;border:1px solid #22334f;color:#e9eef5;}
.search-box input:focus{box-shadow:0 0 0 3px rgba(111,189,255,0.12);border-color:#2c517f;}
.search-box button{color:#c8d8ff;}
.search-box button:hover{color:#ff8a65;}
.hero{background:radial-gradient(circle at top left, rgba(255,255,255,0.08), transparent 25%), linear-gradient(135deg, rgba(12,18,26,0.95), rgba(12,18,26,0.95)),url("images/wellness-hero.jpg");position:relative;}
.hero::before{content:"";position:absolute;top:-30px;left:-30px;width:220px;height:220px;background:rgba(255,255,255,0.1);border-radius:50%;filter:blur(18px);}
.hero::after{content:"";position:absolute;bottom:-20px;right:-20px;width:180px;height:180px;background:rgba(255,255,255,0.08);border-radius:50%;filter:blur(16px);}
.hero-content{position:relative;}
.card, .feature-card, .category-card, .testimonial-card, .faq-item, .why-item, .product-card, .add-form, .medicines-table, .footer, footer{background:#111c2e;border:1px solid #22334f;}
.hero-content, .header, .main-nav, .filter-bar, .search-box input, .search-box button{background:transparent;}
input, select, button{background:#0d1724;color:#e9eef5;border:1px solid #22344f;}
button, .buy-btn, .cart-btn, .update-btn, .continue-btn{background:#ff7a66;color:#ffffff;border-color:#ff7a66;}
button:hover, .buy-btn:hover, .cart-btn:hover, .update-btn:hover, .continue-btn:hover{background:#ff8d7d;}
footer{background:#0f1720;color:#9fb8d7;border-top:1px solid #22334f;}
.feature-icon, .category-icon, .card h3, .logo-text h1, .logo-text p, .nav-links a, .hero-content h1, .hero-content p, .section-title, .products h2, .testimonials h2, .why-us h2, .faq h2{color:#b8d3ff;}
.feature-card p, .category-card p, .card p, .testimonial-text, .faq-answer, .why-item p, .section-subtitle{color:#b7c9e6;}
</style>

</head>

<body>

<!-- HEADER -->
<header class="header">
<div class="header-content">
<div class="logo-section">
<i class="fas fa-pills"></i>
<div class="logo-text">
<h1>CURA</h1>
<p>Your Health, Our Priority</p>
</div>
</div>
<div class="search-cart">
<div class="search-box">
<input type="text" placeholder="Search medicines..." onkeyup="searchMedicines(this.value)">
<button><i class="fas fa-search"></i></button>
</div>
<a href="cart.php" class="cart-btn">
<i class="fas fa-shopping-cart"></i>
Cart (<?php echo count($_SESSION["cart"]); ?>)
</a>
</div>
</div>
</header>

<!-- NAVIGATION -->
<nav class="main-nav">
<div class="nav-container">
<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="medicines.php" class="active">Medicines</a></li>
<li><a href="wellness.php">Wellness</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>
</div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
<div class="hero-content">
<h1>Complete Medicine Store</h1>
<p>Find all your healthcare needs in one place</p>
<a href="#products" class="cta-btn">Shop Now <i class="fas fa-arrow-down"></i></a>
</div>
</section>

<!-- CATEGORIES -->
<section class="categories">
<h2>Shop by Category</h2>
<div class="category-grid">
<div class="category-card" onclick="filterMedicines('all')">
<i class="fas fa-th-large category-icon"></i>
<h3>All Medicines</h3>
<p>Complete range of healthcare products</p>
<span class="category-count" id="total-count">0 items</span>
</div>
<div class="category-card" onclick="filterMedicines('tablet')">
<i class="fas fa-pills category-icon"></i>
<h3>Tablets</h3>
<p>Pain relief, antibiotics, and more</p>
<span class="category-count" id="tablet-count">0 items</span>
</div>
<div class="category-card" onclick="filterMedicines('syrup')">
<i class="fas fa-flask category-icon"></i>
<h3>Syrups</h3>
<p>Cough syrups and liquid medicines</p>
<span class="category-count" id="syrup-count">0 items</span>
</div>
<div class="category-card" onclick="filterMedicines('vitamin')">
<i class="fas fa-apple-alt category-icon"></i>
<h3>Vitamins</h3>
<p>Supplements for better health</p>
<span class="category-count" id="vitamin-count">0 items</span>
</div>
<div class="category-card" onclick="filterMedicines('injection')">
<i class="fas fa-syringe category-icon"></i>
<h3>Injections</h3>
<p>Medical injections and vaccines</p>
<span class="category-count" id="injection-count">0 items</span>
</div>
</div>
</section>

<!-- PRODUCTS SECTION -->
<section class="products-section" id="products">
<h2>Our Products</h2>
<p class="section-subtitle">Quality medicines at affordable prices</p>

<div class="products-container">
<div class="filter-bar">
<div class="filter-buttons">
<button class="filter-btn active" onclick="filterMedicines('all')">All</button>
<button class="filter-btn" onclick="filterMedicines('tablet')">Tablets</button>
<button class="filter-btn" onclick="filterMedicines('syrup')">Syrups</button>
<button class="filter-btn" onclick="filterMedicines('vitamin')">Vitamins</button>
<button class="filter-btn" onclick="filterMedicines('injection')">Injections</button>
</div>
<div class="search-small">
<input type="text" placeholder="Search..." onkeyup="searchMedicines(this.value)">
<button><i class="fas fa-search"></i></button>
</div>
</div>

<div class="products-grid" id="products-grid">

<?php

// Load default products
$products=[

["Paracetamol",50,"tablet","data:image/webp;base64,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"],
["Ibuprofen",80,"tablet","https://th.bing.com/th/id/OIP.S7G5SeLyp_2s_AZWvHIoyAHaHT?w=181&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Aspirin",40,"tablet","https://th.bing.com/th/id/OIP.S2ri0JX9z7OwwdozOYTLSgHaGT?w=222&h=189&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Dolo 650",35,"tablet","https://th.bing.com/th/id/OIP.m1XtOMW7fJKWK6dB-htXQwHaGd?w=217&h=189&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Crocin",45,"tablet","https://th.bing.com/th/id/OIP.IRUFSXzuzmqCRPhmj2fzlwHaHC?w=183&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Cetirizine",60,"tablet","https://th.bing.com/th/id/OIP.9eC2_EQZk7XERjs0p0UFhQHaHa?w=173&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Amoxicillin",120,"tablet","https://th.bing.com/th/id/OIP.MWOn2OhuhIRPQ0CdChsIJAHaFj?w=252&h=189&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Azithromycin",160,"tablet","data:image/webp;base64,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"],
["Metformin",140,"tablet","https://th.bing.com/th/id/OIP.6a7hZFaJ5AUA7OVG5ZK-JwAAAA?w=158&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Rabeprazole",95,"tablet","https://th.bing.com/th/id/OIP.sx_F5L4aFzRdAQff7V_NCwHaH-?w=198&h=214&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Pantoprazole",85,"tablet","https://th.bing.com/th/id/OIP.c-ERu5ijBMChom7oPyh0yAHaIs?w=170&h=199&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Domperidone",85,"tablet","https://th.bing.com/th/id/OIP.aLExwLjcsUF8fagbU9_YGAHaHa?w=205&h=205&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Diclofenac",70,"tablet","https://th.bing.com/th/id/OIP.WKgfoBDe-D0zDCiW2y9kWgHaHa?w=177&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Naproxen",125,"tablet","https://th.bing.com/th/id/OIP.FDVnBDSVNwXmE2w38XRTYAHaHa?w=207&h=207&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Loratadine",95,"tablet","https://th.bing.com/th/id/OIP.6A55JVCD_AEtErFQrOZcvQAAAA?w=199&h=199&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Montelukast",115,"tablet","https://th.bing.com/th/id/OIP.832VENCvo1wWogSzk1W9TQHaH3?w=181&h=192&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Ranitidine",85,"tablet","https://th.bing.com/th/id/OIP.z50R_l-tG5tdGT-Tw46coAHaG4?w=192&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Ibucold",65,"tablet","https://th.bing.com/th/id/OIP.j6e46NiSDBotL5xvE82ozQHaHa?w=176&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Augmentin",210,"tablet","https://th.bing.com/th/id/OIP.JRrZHAR3f5BRP-aRwD-lxgHaHa?w=175&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Antacid",55,"tablet","https://th.bing.com/th/id/OIP.BrYWRPvDmp3GRA3cIl75aAHaHa?w=192&h=192&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Vitamin C",90,"vitamin","https://th.bing.com/th/id/OIP.JARE-L-e-7AD_YW57UNDRgHaHa?w=185&h=185&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Zinc Tablet",70,"vitamin","https://th.bing.com/th/id/OIP.fgtt-pVyCmGxX7oxaYXwZwHaHa?w=178&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["B Complex",95,"vitamin","https://th.bing.com/th/id/OIP.DtvhMxK43GJVwh00hvQjTwHaHa?w=180&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Multivitamin",180,"vitamin","https://th.bing.com/th/id/OIP.KXgfGnekKFmkd2aF5t6JmwHaHa?w=212&h=212&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Calcium",120,"vitamin","https://th.bing.com/th/id/OIP.Oy8PQTKb9IODWk2jw8JsAgHaHa?w=190&h=190&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Iron",100,"vitamin","https://th.bing.com/th/id/OIP.dkxQo6T0HQuSVvHWURQlIAHaHa?w=171&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Folic Acid",90,"vitamin","https://th.bing.com/th/id/OIP.NtDXuB2TKD20BbXbzSgUZAHaHa?w=209&h=209&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Vitamin D",200,"vitamin","https://th.bing.com/th/id/OIP.i3XYMzfgpLszv5v8CHhyCAHaHa?w=186&h=186&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Protein Powder",550,"vitamin","https://th.bing.com/th/id/OIP.vRHMvQrV9wnHrSgaH3Vt3QHaHa?w=187&h=187&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Electral",35,"vitamin","https://th.bing.com/th/id/OIP.ys3AnWj2rQi4IH9HQOrisgHaGK?w=226&h=188&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["ORS Powder",25,"vitamin","https://th.bing.com/th/id/OIP.YgfPv9Ed7RP1ycmghzbL9wHaHa?w=167&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Glucose",50,"vitamin","https://th.bing.com/th/id/OIP.1Ckz1YLk2qMgEgii1eFMAwHaHa?w=195&h=195&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Cough Syrup",110,"syrup","https://th.bing.com/th/id/OIP.6eEgax172fOQLEg73rlM0wHaIE?w=154&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Benadryl",130,"syrup","https://th.bing.com/th/id/OIP.-KVmhDG4---ScU7zY8eaUwHaHa?w=183&h=184&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Liv 52",150,"syrup","https://th.bing.com/th/id/OIP.cieC1hM-sdlluhq4W5vOlQHaHa?w=195&h=195&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["ORS Liquid",45,"syrup","data:image/webp;base64,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"],
["Betadine",90,"syrup","https://th.bing.com/th/id/OIP.NxJfZd5KQuP2tUyWZvztvQHaHa?w=201&h=200&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Dextromethorphan",120,"syrup","https://th.bing.com/th/id/OIP._e3WRcABAOb2RLcJpa8mXgHaHa?w=207&h=208&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Cetrimide",40,"syrup","https://th.bing.com/th/id/OIP.221WFWwUbcp7jMFzk3-lwgHaHa?w=188&h=189&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],

["Insulin",350,"injection","https://th.bing.com/th/id/OIP.yVsx11OM6u0-ZT5u_0yxzAHaE8?w=255&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Insulin Pen",450,"injection","https://th.bing.com/th/id/OIP.LM2JixfOCETuQo8FiqiqoAHaE8?w=247&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Saline",60,"injection","https://th.bing.com/th/id/OIP.6H9Y8vlxTHFelA-SrK5uawHaFW?w=274&h=198&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"],
["Heparin",280,"injection","data:image/webp;base64,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"],
["Adrenaline",320,"injection","https://th.bing.com/th/id/OIP.RMaTilF4KGXqC1CQi65wvAHaFT?w=245&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"]

];

// Load admin-added products from data.json
if(file_exists("data.json")){
$admin_products = json_decode(file_get_contents("data.json"), true);
if(is_array($admin_products)){
foreach($admin_products as $admin_product){
$products[] = [$admin_product["name"], $admin_product["price"], $admin_product["category"], $admin_product["img"]];
}
}
}

foreach($products as $p){

?>

<div class="product-card" data-category="<?php echo htmlspecialchars($p[2]); ?>">

<div class="product-image">
<img src="<?php echo htmlspecialchars($p[3]); ?>" alt="<?php echo htmlspecialchars($p[0]); ?>">
<span class="product-badge"><?php echo htmlspecialchars($p[2]); ?></span>
</div>

<div class="product-info">
<div class="product-name"><?php echo htmlspecialchars($p[0]); ?></div>
<div class="product-price">₹<?php echo htmlspecialchars($p[1]); ?></div>
<div class="product-category"><?php echo htmlspecialchars($p[2]); ?> medicine</div>

<form method="post">
<input type="hidden" name="name" value="<?php echo htmlspecialchars($p[0]); ?>">
<input type="hidden" name="price" value="<?php echo htmlspecialchars($p[1]); ?>">
<button type="submit" name="add" class="add-to-cart">
<i class="fas fa-cart-plus"></i> Add to Cart
</button>
</form>

</div>

</div>

<?php } ?>

</div>

</div>

</section>

<!-- FOOTER -->
<footer class="footer">
<div class="footer-content">
<div class="footer-section">
<h3>CURA</h3>
<p>Your trusted partner for quality medicines and healthcare products. We ensure authentic medicines at affordable prices.</p>
</div>
<div class="footer-section">
<h3>Quick Links</h3>
<p><a href="index.php">Home</a></p>
<p><a href="medicines.php">Medicines</a></p>
<p><a href="wellness.php">Wellness</a></p>
<p><a href="contact.php">Contact</a></p>
<p><a href="cart.php">Shopping Cart</a></p>
</div>
<div class="footer-section">
<h3>Categories</h3>
<p><a href="#" onclick="filterMedicines('tablet')">Tablets</a></p>
<p><a href="#" onclick="filterMedicines('syrup')">Syrups</a></p>
<p><a href="#" onclick="filterMedicines('vitamin')">Vitamins</a></p>
<p><a href="#" onclick="filterMedicines('injection')">Injections</a></p>
</div>
<div class="footer-section">
<h3>Contact Info</h3>
<p><i class="fas fa-phone"></i> +91 98765 43210</p>
<p><i class="fas fa-envelope"></i> info@cura.com</p>
<p><i class="fas fa-map-marker-alt"></i> Your City, India</p>
</div>
</div>
<div class="footer-bottom">
<p>&copy; 2024 CURA Medicine Store. All rights reserved.</p>
</div>
</footer>

<script>

let currentCategory = 'all';

// Count products by category
function countProductsByCategory(){
const categories = {all: 0, tablet: 0, syrup: 0, vitamin: 0, injection: 0};
document.querySelectorAll('.product-card').forEach(card => {
const cat = card.dataset.category;
if(categories.hasOwnProperty(cat)){
categories[cat]++;
categories.all++;
}
});
return categories;
}

// Update category counts
function updateCategoryCounts(){
const counts = countProductsByCategory();
document.getElementById('total-count').textContent = counts.all + ' items';
document.getElementById('tablet-count').textContent = counts.tablet + ' items';
document.getElementById('syrup-count').textContent = counts.syrup + ' items';
document.getElementById('vitamin-count').textContent = counts.vitamin + ' items';
document.getElementById('injection-count').textContent = counts.injection + ' items';
}

// Filter medicines
function filterMedicines(category){
currentCategory = category;

// Update active button
document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
document.querySelectorAll('.category-card').forEach(card => card.style.borderColor = 'transparent');

if(category === 'all'){
document.querySelector('.filter-btn:first-child').classList.add('active');
document.querySelector('.category-card:first-child').style.borderColor = '#A2DF9F';
} else {
document.querySelector(`[onclick="filterMedicines('${category}')"]`).classList.add('active');
document.querySelector(`[onclick="filterMedicines('${category}')"]`).style.borderColor = '#A2DF9F';
}

// Show/hide products
document.querySelectorAll('.product-card').forEach(card => {
if(category === 'all' || card.dataset.category === category){
card.style.display = 'block';
} else {
card.style.display = 'none';
}
});
}

// Search medicines
function searchMedicines(query){
query = query.toLowerCase();
document.querySelectorAll('.product-card').forEach(card => {
const name = card.querySelector('.product-name').textContent.toLowerCase();
const category = card.dataset.category.toLowerCase();
const matchesSearch = name.includes(query) || category.includes(query);
const matchesCategory = currentCategory === 'all' || card.dataset.category === currentCategory;

if(matchesSearch && matchesCategory){
card.style.display = 'block';
} else {
card.style.display = 'none';
}
});
}

// Initialize
document.addEventListener('DOMContentLoaded', function(){
updateCategoryCounts();
filterMedicines('all');
});

</script>

</body>
</html>
