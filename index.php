<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CURA | Your Health, Our Priority</title>

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

/* NAVBAR */

.navbar{
display:flex;
align-items:center;
justify-content:space-between;
padding:15px 6%;
background:#ffffff;
box-shadow:0 2px 8px rgba(0,0,0,0.08);
position:sticky;
top:0;
z-index:100;
}

.logo{
font-size:24px;
font-weight:700;
color:#005da3;
display:flex;
align-items:center;
gap:8px;
}

.nav-links{
list-style:none;
display:flex;
gap:30px;
}

.nav-links a{
text-decoration:none;
color:#005da3;
transition:0.3s;
font-weight:500;
}

.nav-links a:hover{
color:#e45b4c;
}

/* SEARCH BAR */

.search-container{
display:flex;
width:40%;
}

.search-input{
flex:1;
padding:12px 16px;
border:1px solid #d4d9e0;
outline:none;
border-radius:8px 0 0 8px;
background:#ffffff;
color:#333333;
font-size:14px;
}

.search-input::placeholder{
color:#999999;
}

.search-btn{
padding:12px 20px;
border:1px solid #d4d9e0;
background:#005da3;
color:white;
border-radius:0 8px 8px 0;
cursor:pointer;
font-weight:600;
transition:0.3s;
}

.search-btn:hover{
background:#e45b4c;
}

/* HERO */

.hero{
height:70vh;
background:radial-gradient(circle at top left, rgba(255,255,255,0.15), transparent 22%),
linear-gradient(135deg, #005da3 0%, #003d7a 100%);
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
top:-50%;
right:-10%;
width:520px;
height:520px;
background:rgba(255,255,255,0.12);
border-radius:50%;
filter:blur(12px);
animation:float 6s ease-in-out infinite;
}

.hero::after{
content:"";
position:absolute;
bottom:20px;
left:50%;
transform:translateX(-50%);
width:120px;
height:120px;
border:1px solid rgba(255,255,255,0.35);
border-radius:50%;
opacity:0.55;
animation:float 5s ease-in-out infinite;
}

.hero-buttons a{
position:relative;
overflow:hidden;
}

.hero-buttons a::after{
content:"";
position:absolute;
left:50%;
top:50%;
width:0;
height:0;
background:rgba(255,255,255,0.15);
border-radius:50%;
transform:translate(-50%, -50%);
transition:width 0.4s ease, height 0.4s ease;
}

.hero-buttons a:hover::after{
width:220%;
height:220%;
}

@keyframes float{
0%, 100%{transform:translateY(0px);}
50%{transform:translateY(20px);}
}

.hero-content{
position:relative;
z-index:1;
}

.hero h1{
font-size:3.5rem;
margin-bottom:15px;
font-weight:700;
animation:slideDown 0.8s ease-out;
}

@keyframes slideDown{
from{opacity:0;transform:translateY(-30px);}
to{opacity:1;transform:translateY(0);}
}

.hero p{
color:rgba(255,255,255,0.9);
font-size:1.3rem;
margin-bottom:30px;
animation:slideUp 0.8s ease-out 0.2s both;
}

@keyframes slideUp{
from{opacity:0;transform:translateY(30px);}
to{opacity:1;transform:translateY(0);}
}

.hero-buttons{
display:flex;
gap:15px;
justify-content:center;
animation:slideUp 0.8s ease-out 0.4s both;
}

.btn{
display:inline-block;
padding:14px 32px;
background:#e45b4c;
color:#ffffff;
border-radius:8px;
text-decoration:none;
font-weight:600;
transition:0.3s, box-shadow 0.3s;
border:2px solid #e45b4c;
cursor:pointer;
}

.btn:hover{
background:#d84639;
border-color:#d84639;
transform:translateY(-2px);
box-shadow:0 16px 30px rgba(212,70,57,0.18);
}

.btn:active{
transform:translateY(0);
}

.btn-secondary{
background:transparent;
border:2px solid #ffffff;
color:#ffffff;
}

.btn-secondary:hover{
background:#ffffff;
color:#005da3;
}

/* FEATURES SECTION */

.features{
padding:80px 6%;
background:#ffffff;
}

.section-title{
text-align:center;
font-size:2.5rem;
color:#005da3;
margin-bottom:20px;
font-weight:700;
position:relative;
}

.section-title::after{
content:"";
width:90px;
height:4px;
background:#e45b4c;
display:block;
margin:14px auto 0;
border-radius:999px;
}

.section-subtitle{
text-align:center;
color:#666666;
font-size:1.1rem;
margin-bottom:60px;
max-width:600px;
margin-left:auto;
margin-right:auto;
}

.features-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:40px;
max-width:1200px;
margin:0 auto;
}

.feature-card{
text-align:center;
padding:40px 30px;
border-radius:18px;
border:1px solid rgba(0,0,0,0.08);
transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
background:linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
}

.feature-card:hover{
transform:translateY(-10px);
box-shadow:0 18px 35px rgba(0,93,163,0.15);
background:#ffffff;
border-color:#e45b4c;
}

.feature-icon{
font-size:3rem;
color:#005da3;
margin-bottom:20px;
transition:0.3s;
}

.feature-card:hover .feature-icon{
color:#e45b4c;
transform:scale(1.1);
}

.feature-card h3{
font-size:1.3rem;
color:#005da3;
margin-bottom:15px;
font-weight:600;
}

.feature-card p{
color:#666666;
line-height:1.6;
font-size:0.95rem;
}

/* CATEGORIES */

.categories{
padding:80px 6%;
background:#f4f7fb;
}

.category-grid{
max-width:1200px;
margin:0 auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
gap:25px;
}

.category-card{
background:#ffffff;
padding:25px 15px;
border-radius:16px;
cursor:pointer;
transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
border:1px solid #f0f0f0;
text-align:center;
position:relative;
overflow:hidden;
}

.category-card::before{
content:"";
position:absolute;
left:50%;
top:0;
width:140%;
height:100%;
background:radial-gradient(circle at top, rgba(228,91,76,0.08), transparent 45%);
transform:translateX(-50%) scale(0.85);
opacity:0;
transition:opacity 0.3s ease, transform 0.3s ease;
}

.category-card:hover::before{
opacity:1;
transform:translateX(-50%) scale(1);
}

.category-card:hover{
transform:translateY(-6px);
box-shadow:0 20px 40px rgba(0,0,0,0.08);
border-color:#e45b4c;
}

.category-icon{
font-size:2.5rem;
color:#005da3;
margin-bottom:10px;
transition:0.3s;
}

.category-card:hover .category-icon{
color:#e45b4c;
transform:scale(1.15);
}

.category-card h3{
font-size:0.95rem;
color:#005da3;
margin-bottom:5px;
font-weight:600;
}

.category-card p{
font-size:0.8rem;
color:#999999;
}

/* STATS SECTION */

.stats{
padding:80px 6%;
background:linear-gradient(135deg, #005da3 0%, #003d7a 100%);
color:#ffffff;
}

.stats-grid{
max-width:1200px;
margin:0 auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:40px;
text-align:center;
}

.stat-item h2{
font-size:2.5rem;
font-weight:700;
margin-bottom:10px;
transition:0.3s;
}

.stat-item:hover h2{
transform:scale(1.1);
color:#e45b4c;
}

.stat-item p{
font-size:1.1rem;
opacity:0.9;
}

/* PRODUCTS */

.products{
padding:80px 6%;
text-align:center;
background:#ffffff;
}

.products h2{
color:#005da3;
font-size:2.5rem;
margin-bottom:50px;
}

.product-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:30px;
margin-top:40px;
max-width:1200px;
margin-left:auto;
margin-right:auto;
}

.card{
background:linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
padding:30px 20px;
border-radius:18px;
transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
border:1px solid #f0f0f0;
cursor:pointer;
}

.card:hover{
transform:translateY(-10px);
box-shadow:0 18px 30px rgba(0,93,163,0.15);
border:1px solid #e45b4c;
background:#ffffff;
}

.card-icon{
font-size:2.5rem;
color:#005da3;
margin-bottom:15px;
}

.card h3{
color:#005da3;
margin-bottom:10px;
font-size:1.1rem;
font-weight:600;
}

.card p{
color:#666666;
font-size:0.95rem;
margin-bottom:20px;
line-height:1.5;
}

.buy-btn{
margin-top:10px;
padding:10px 20px;
border:2px solid #e45b4c;
background:transparent;
color:#e45b4c;
border-radius:10px;
cursor:pointer;
font-weight:600;
transition:0.3s, transform 0.3s, box-shadow 0.3s;
}

.buy-btn:hover{
background:#e45b4c;
color:#ffffff;
transform:translateY(-2px);
box-shadow:0 12px 20px rgba(228,69,57,0.18);
}

/* TESTIMONIALS */

.testimonials{
padding:80px 6%;
background:#f4f7fb;
}

.testimonials h2{
text-align:center;
color:#005da3;
font-size:2.5rem;
margin-bottom:50px;
}

.testimonial-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
max-width:1200px;
margin:0 auto;
}

.testimonial-card{
background:#ffffff;
padding:30px;
border-radius:10px;
border:1px solid #f0f0f0;
transition:0.3s;
}

.testimonial-card:hover{
box-shadow:0 8px 20px rgba(0,93,163,0.1);
transform:translateY(-4px);
}

.stars{
color:#e45b4c;
font-size:1.2rem;
margin-bottom:15px;
}

.testimonial-text{
color:#666666;
margin-bottom:15px;
line-height:1.6;
font-size:0.95rem;
}

.testimonial-author{
font-weight:600;
color:#005da3;
}

.testimonial-role{
font-size:0.85rem;
color:#999999;
}

/* WHY CHOOSE US */

.why-us{
padding:80px 6%;
background:#ffffff;
}

.why-us h2{
text-align:center;
color:#005da3;
font-size:2.5rem;
margin-bottom:50px;
}

.why-us-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
max-width:1200px;
margin:0 auto;
}

.why-item{
padding:30px;
background:#f8fafc;
border-radius:10px;
border-left:4px solid #e45b4c;
transition:0.3s;
}

.why-item:hover{
background:#ffffff;
box-shadow:0 8px 20px rgba(0,93,163,0.1);
}

.why-item h3{
color:#005da3;
margin-bottom:15px;
font-weight:600;
}

.why-item p{
color:#666666;
line-height:1.6;
}

/* FAQ SECTION */

.faq{
padding:80px 6%;
background:#f4f7fb;
}

.faq h2{
text-align:center;
color:#005da3;
font-size:2.5rem;
margin-bottom:50px;
}

.faq-container{
max-width:700px;
margin:0 auto;
}

.faq-item{
background:#ffffff;
margin-bottom:15px;
border-radius:10px;
border:1px solid #f0f0f0;
overflow:hidden;
transition:0.3s;
}

.faq-item:hover{
box-shadow:0 4px 12px rgba(0,93,163,0.1);
}

.faq-question{
padding:20px;
background:#ffffff;
cursor:pointer;
display:flex;
justify-content:space-between;
align-items:center;
transition:0.3s;
font-weight:600;
color:#005da3;
}

.faq-item.active .faq-question{
background:#f8fafc;
}

.faq-item:hover .faq-question{
color:#e45b4c;
}

.faq-icon{
font-size:1.2rem;
transition:0.3s;
}

.faq-item.active .faq-icon{
transform:rotate(180deg);
}

.faq-answer{
padding:0 20px;
max-height:0;
overflow:hidden;
transition:max-height 0.3s ease-out;
color:#666666;
line-height:1.6;
}

.faq-item.active .faq-answer{
padding:20px;
max-height:500px;
transition:max-height 0.3s ease-in;
}

/* NEWSLETTER */

.newsletter{
padding:60px 6%;
background:linear-gradient(135deg, #005da3 0%, #003d7a 100%);
color:#ffffff;
text-align:center;
}

.newsletter h2{
font-size:2rem;
margin-bottom:15px;
}

.newsletter p{
font-size:1.1rem;
margin-bottom:30px;
opacity:0.9;
}

.newsletter-form{
display:flex;
max-width:500px;
margin:0 auto;
gap:10px;
}

.newsletter-input{
flex:1;
padding:12px 16px;
border:none;
border-radius:8px 0 0 8px;
background:#ffffff;
color:#333333;
}

.newsletter-btn{
padding:12px 30px;
background:#e45b4c;
color:#ffffff;
border:none;
border-radius:0 8px 8px 0;
cursor:pointer;
font-weight:600;
transition:0.3s;
}

.newsletter-btn:hover{
background:#d84639;
}

/* FOOTER */

footer{
background:#ffffff;
text-align:center;
padding:40px 6%;
margin-top:40px;
border-top:1px solid #e0e0e0;
color:#666666;
}

footer p{
margin-bottom:10px;
}

/* RESPONSIVE */

@media (max-width:768px){
.hero h1{
font-size:2rem;
}

.search-container{
width:100%;
}

.nav-links{
gap:15px;
font-size:0.9rem;
}

.hero-buttons{
flex-direction:column;
}

.features-grid,
.stats-grid,
.why-us-grid,
.testimonial-grid{
grid-template-columns:1fr;
}

.newsletter-form{
flex-direction:column;
}

.newsletter-input,
.newsletter-btn{
border-radius:8px;
}

.faq-question{
font-size:0.95rem;
}
}

/* DARK THEME OVERRIDES */
body{
 background:#0c121a;
 color:#e9eef5;
}
body::selection{background:rgba(111, 189, 255, 0.35);color:#ffffff;}
.navbar{background:#111827;box-shadow:0 2px 20px rgba(0,0,0,0.45);}
.logo{color:#7fb7ff;}
.nav-links a{color:#c8d8ff;}
.nav-links a:hover,.nav-links a.active{color:#ff8a65;border-bottom-color:#ff8a65;}
.search-input{background:#111d2d;border-color:#22334f;color:#e9eef5;}
.search-input::placeholder{color:#8da3c4;}
.search-btn{border-color:#22334f;background:#2c4f7d;color:#ffffff;}
.search-btn:hover{background:#ff8a65;}
.hero{background:radial-gradient(circle at top left, rgba(255,255,255,0.12), transparent 24%), linear-gradient(135deg, #10213a 0%, #0c1529 100%); position:relative;}
.hero::before{content:"";position:absolute;top:-30px;left:-30px;width:260px;height:260px;background:rgba(255,255,255,0.1);border-radius:50%;filter:blur(20px);}
.hero::after{content:"";position:absolute;bottom:-30px;right:-20px;width:180px;height:180px;background:rgba(255,255,255,0.08);border-radius:50%;filter:blur(16px);}
.hero-content{position:relative;}
.features, .categories, .products, .testimonials, .why-us, .faq, .contact, .cart-content, .order-content, .admin-content{background:#0d1722;}
.feature-card, .category-card, .card, .testimonial-card, .faq-item, .why-item, .contact form, .order-card, .order-summary, .total-section, .add-form, .medicines-table, .cart-table{background:#111c2e;border:1px solid #22334f;}
.feature-card:hover, .category-card:hover, .card:hover, .testimonial-card:hover, .faq-item:hover, .why-item:hover, .add-btn:hover, .btn:hover, .update-btn:hover, .continue-btn:hover, .back-btn:hover, .order-btn:hover, .cart-btn:hover, .button:hover{background:#1f2f4d;}
footer{background:#0f1720;color:#9fb8d7;border-top-color:#22334f;}
footer p{color:#9fb8d7;}
input, textarea, .newsletter-input, .qty-input, .form-group input, .form-group select{background:#0d1724;color:#e9eef5;border:1px solid #22344f;}
button, .add-btn, .cart-btn, .btn, .buy-btn, .newsletter-btn, .order-btn, .update-btn, .continue-btn, .back-btn{background:#ff7a66;color:#ffffff;border-color:#ff7a66;}
button:hover, .add-btn:hover, .cart-btn:hover, .btn:hover, .buy-btn:hover, .newsletter-btn:hover, .order-btn:hover, .update-btn:hover, .continue-btn:hover, .back-btn:hover{background:#ff8d7d;}
.feature-icon, .category-icon, .card-icon, .testimonial-author, .why-item h3, .faq-question, .stats-grid .stat-item h2, .section-title, .products h2, .testimonials h2, .why-us h2, .faq h2, .contact h2{color:#b8d3ff;}
.feature-card p, .category-card p, .card p, .testimonial-text, .faq-answer, .why-item p, .section-subtitle{color:#b7c9e6;}
.empty-cart, .empty-state{background:#111c2e;color:#a5b7d5;border:1px solid #22334f;}
</style>

</head>

<body>

<header>

<nav class="navbar">

<div class="logo"><i class="fas fa-pills"></i>CURA</div>

<div class="search-container">
<input type="text" class="search-input" placeholder="Search medicines...">
<button class="search-btn">🔍</button>
</div>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="medicines.php">Medicines</a></li>
<li><a href="wellness.php">Wellness</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>

</nav>

</header>

<!-- HERO SECTION -->
<section class="hero">

<div class="hero-content">

<h1>Your Health, Our Priority</h1>

<p>Get instant access to quality medicines with fast delivery</p>

<div class="hero-buttons">
<a href="medicines.php" class="btn"><i class="fas fa-shopping-cart"></i> Shop Medicines</a>
<a href="wellness.php" class="btn btn-secondary"><i class="fas fa-heart"></i> Wellness</a>
</div>

</div>

</section>

<!-- FEATURES SECTION -->
<section class="features">

<h2 class="section-title">Why Choose CURA?</h2>
<p class="section-subtitle">Experience healthcare like never before with our premium services</p>

<div class="features-grid">

<div class="feature-card">
<div class="feature-icon"><i class="fas fa-truck"></i></div>
<h3>Fast Delivery</h3>
<p>Same-day delivery available in selected areas. Get your medicines within 24 hours.</p>
</div>

<div class="feature-card">
<div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
<h3>100% Genuine</h3>
<p>All medicines are sourced directly from authorized manufacturers. 100% authentic guaranteed.</p>
</div>

<div class="feature-card">
<div class="feature-icon"><i class="fas fa-headset"></i></div>
<h3>24/7 Support</h3>
<p>Our customer support team is available round the clock to assist you with any queries.</p>
</div>

<div class="feature-card">
<div class="feature-icon"><i class="fas fa-lock"></i></div>
<h3>Secure Payment</h3>
<p>Multiple payment options with SSL encryption. Your data is always safe with us.</p>
</div>

</div>

</section>

<!-- CATEGORIES SECTION -->
<section class="categories">

<h2 class="section-title">Shop by Category</h2>

<div class="category-grid">

<div class="category-card">
<div class="category-icon"><i class="fas fa-pills"></i></div>
<h3>Tablets</h3>
<p>Pain Relief & More</p>
</div>

<div class="category-card">
<div class="category-icon"><i class="fas fa-flask"></i></div>
<h3>Syrups</h3>
<p>Cough & Wellness</p>
</div>

<div class="category-card">
<div class="category-icon"><i class="fas fa-apple-alt"></i></div>
<h3>Vitamins</h3>
<p>Immunity & Health</p>
</div>

<div class="category-card">
<div class="category-icon"><i class="fas fa-syringe"></i></div>
<h3>Injections</h3>
<p>Medical Grade</p>
</div>

<div class="category-card">
<div class="category-icon"><i class="fas fa-heart-pulse"></i></div>
<h3>Heart Care</h3>
<p>Cardiac Health</p>
</div>

<div class="category-card">
<div class="category-icon"><i class="fas fa-brain"></i></div>
<h3>Mental Health</h3>
<p>Wellness Support</p>
</div>

</div>

</section>

<!-- STATS SECTION -->
<section class="stats">

<div class="stats-grid">

<div class="stat-item">
<h2>50K+</h2>
<p>Happy Customers</p>
</div>

<div class="stat-item">
<h2>10K+</h2>
<p>Products</p>
</div>

<div class="stat-item">
<h2>100%</h2>
<p>Genuine Medicines</p>
</div>

<div class="stat-item">
<h2>24 Hours</h2>
<p>Delivery Service</p>
</div>

</div>

</section>

<!-- TRENDING CATEGORIES -->
<section class="products">

<h2>Trending Categories</h2>

<div class="product-grid">

<?php

$categories = [
["name" => "Essential Meds", "icon" => "fas fa-prescription-bottle", "desc" => "Explore our range of essential medications for daily health needs"],
["name" => "Skincare", "icon" => "fas fa-spa", "desc" => "Premium skincare and dermatology products"],
["name" => "Supplements", "icon" => "fas fa-apple-alt", "desc" => "Vitamins and nutritional supplements"],
["name" => "First Aid", "icon" => "fas fa-bandage", "desc" => "Complete first aid kits and emergency supplies"]
];

foreach($categories as $cat){
echo "
<div class='card'>
<div class='card-icon'><i class='{$cat['icon']}'></i></div>
<h3>{$cat['name']}</h3>
<p>{$cat['desc']}</p>
<button class='buy-btn' onclick=\"window.location.href='medicines.php'\">Explore Now</button>
</div>
";
}

?>

</div>

</section>

<!-- TESTIMONIALS SECTION -->
<section class="testimonials">

<h2>What Our Customers Say</h2>

<div class="testimonial-grid">

<div class="testimonial-card">
<div class="stars">⭐⭐⭐⭐⭐</div>
<p class="testimonial-text">"CURA made buying medicines so easy. Fast delivery and authentic products. Highly recommended!"</p>
<div class="testimonial-author">Priya Singh</div>
<div class="testimonial-role">Delhi</div>
</div>

<div class="testimonial-card">
<div class="stars">⭐⭐⭐⭐⭐</div>
<p class="testimonial-text">"Great customer service and affordable prices. I've been a loyal customer for months now."</p>
<div class="testimonial-author">Rajesh Kumar</div>
<div class="testimonial-role">Mumbai</div>
</div>

<div class="testimonial-card">
<div class="stars">⭐⭐⭐⭐⭐</div>
<p class="testimonial-text">"The medicines arrived next day and everything was packaged so carefully. Perfect experience!"</p>
<div class="testimonial-author">Anjali Sharma</div>
<div class="testimonial-role">Bangalore</div>
</div>

</div>

</section>

<!-- WHY CHOOSE US -->
<section class="why-us">

<h2>Why CURA is Your Best Choice</h2>

<div class="why-us-grid">

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Verified Sellers</h3>
<p>All sellers are licensed and verified by health authorities. We only work with trusted distributors.</p>
</div>

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Prescription Support</h3>
<p>Upload your prescription or chat with our pharmacists. Professional guidance every step of the way.</p>
</div>

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Price Comparison</h3>
<p>Get the best prices with our price match guarantee. Save more on your medicine purchases.</p>
</div>

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Easy Returns</h3>
<p>Not satisfied? Easy 30-day return policy with full refunds. Your satisfaction is our priority.</p>
</div>

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Medicine Reminders</h3>
<p>Get timely reminders for your medications. Never miss a dose with our smart notification system.</p>
</div>

<div class="why-item">
<h3><i class="fas fa-check-circle"></i> Home Delivery</h3>
<p>Convenient doorstep delivery across India. Easy, safe, and hygienic delivery at your home.</p>
</div>

</div>

</section>

<!-- FAQ SECTION -->
<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-container">

<div class="faq-item">
<div class="faq-question">
<span>How do I order medicines on CURA?</span>
<i class="fas fa-chevron-down faq-icon"></i>
</div>
<div class="faq-answer">
Simply browse our medicines, add them to your cart, and proceed to checkout. Upload your prescription if required, and we'll deliver to your doorstep.
</div>
</div>

<div class="faq-item">
<div class="faq-question">
<span>What is the delivery timeframe?</span>
<i class="fas fa-chevron-down faq-icon"></i>
</div>
<div class="faq-answer">
We offer same-day delivery in selected areas and next-day delivery in most cities. The exact timeline will be provided at checkout.
</div>
</div>

<div class="faq-item">
<div class="faq-question">
<span>Are all medicines 100% genuine?</span>
<i class="fas fa-chevron-down faq-icon"></i>
</div>
<div class="faq-answer">
Yes, we source all medicines from authorized manufacturers and licensed distributors. Each product is verified for authenticity before dispatch.
</div>
</div>

<div class="faq-item">
<div class="faq-question">
<span>Do you require a prescription?</span>
<i class="fas fa-chevron-down faq-icon"></i>
</div>
<div class="faq-answer">
For scheduled and prescription medicines, we require a valid prescription. You can upload it during checkout or email it to us.
</div>
</div>

<div class="faq-item">
<div class="faq-question">
<span>What if I'm not satisfied with my purchase?</span>
<i class="fas fa-chevron-down faq-icon"></i>
</div>
<div class="faq-answer">
We offer a 30-day return policy. If you're not satisfied, simply contact our customer support and we'll process your return.
</div>
</div>

</div>

</section>

<!-- NEWSLETTER SECTION -->
<section class="newsletter">

<h2>Subscribe to Our Newsletter</h2>
<p>Get exclusive deals, health tips, and updates delivered to your inbox</p>

<form class="newsletter-form" onsubmit="subscribeNewsletter(event)">
<input type="email" class="newsletter-input" placeholder="Enter your email" required>
<button type="submit" class="newsletter-btn">Subscribe</button>
</form>

</section>

<!-- FOOTER -->
<footer>

<p>&copy; <?php echo date("Y"); ?> CURA Healthcare. All rights reserved.</p>
<p>Delivering health and wellness to your doorstep.</p>

</footer>

<script>

// FAQ Toggle
document.querySelectorAll('.faq-question').forEach(question => {
  question.addEventListener('click', function() {
    this.parentElement.classList.toggle('active');
  });
});

// Newsletter Subscription
function subscribeNewsletter(e) {
  e.preventDefault();
  alert('Thank you for subscribing! Check your email for exclusive offers.');
  document.querySelector('.newsletter-form').reset();
}

// Smooth scroll for Shop Now button
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
  e.preventDefault();
  const target = document.querySelector(this.getAttribute('href'));
  if(target) {
    target.scrollIntoView({behavior: 'smooth'});
  }
  });
});

// Category Card Click
document.querySelectorAll('.category-card').forEach(card => {
  card.addEventListener('click', function() {
  window.location.href = 'medicines.php';
  });
});

</script>

</body>
</html>

