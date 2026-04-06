<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CURA | Contact</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
}

.logo{
font-size:24px;
font-weight:700;
color:#005da3;
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

/* CONTACT FORM */

.contact{
padding:60px 6%;
text-align:center;
background:#f4f7fb;
}

.contact h2{
margin-bottom:30px;
color:#005da3;
font-size:1.8rem;
}

form{
max-width:500px;
margin:0 auto;
background:#ffffff;
padding:40px;
border-radius:10px;
border:1px solid #f0f0f0;
box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

input, textarea{
width:100%;
padding:12px 16px;
margin-bottom:20px;
border:1px solid #d4d9e0;
border-radius:8px;
background:#ffffff;
color:#333333;
outline:none;
font-size:14px;
font-family:'Inter',sans-serif;
transition:0.3s;
}

input:focus, textarea:focus{
border-color:#005da3;
box-shadow:0 0 0 3px rgba(0, 93, 163, 0.1);
}

input::placeholder, textarea::placeholder{
color:#999999;
}

button{
padding:12px 30px;
border:none;
background:#e45b4c;
color:#ffffff;
border-radius:8px;
cursor:pointer;
font-weight:600;
transition:0.3s;
width:100%;
}

button:hover{
background:#d84639;
}

/* FOOTER */

footer{
background:#ffffff;
text-align:center;
padding:30px;
margin-top:40px;
border-top:1px solid #e0e0e0;
color:#666666;
}

/* DARK THEME OVERRIDES */
body{background:#0c121a;color:#e9eef5;}
body::selection{background:rgba(111,189,255,0.35);color:#ffffff;}
.navbar{background:#111827;box-shadow:0 2px 20px rgba(0,0,0,0.45);}
.logo{color:#7fb7ff;}
.nav-links a{color:#c8d8ff;}
.nav-links a:hover{color:#ff8a65;}
.search-container{background:transparent;}
.search-input{background:#111d2d;border:1px solid #22334f;color:#e9eef5;}
.search-input::placeholder{color:#8da3c4;}
.search-btn{background:#2c4f7d;border:1px solid #22334f;}
.search-btn:hover{background:#ff8a65;}
.contact{background:#0d1722;}
form{background:#111c2e;border:1px solid #22334f;}
input, textarea{background:#0d1724;color:#e9eef5;border:1px solid #22334f;}
button{background:#ff7a66;color:#ffffff;}
button:hover{background:#ff8d7d;}
footer{background:#0f1720;color:#9fb8d7;border-top:1px solid #22334f;}
footer p{color:#9fb8d7;}
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
<li><a href="cart.php">Cart</a></li>
<li><a href="admin.php">Admin</a></li>
</ul>

</nav>

</header>

<section class="contact">
<h2>Contact Us</h2>
<form action="#" method="post">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
<button type="submit">Send Message</button>
</form>
</section>

<footer>
<p>&copy; <?php echo date("Y"); ?> CURA Healthcare</p>
</footer>

</body>
</html>
