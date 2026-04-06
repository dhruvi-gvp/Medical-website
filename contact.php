<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CURA | Contact</title>

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
font-weight:500;
}

.nav-links a:hover{
color:#A2DF9F;
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
font-weight:600;
}

.search-btn:hover{
background:#C2DF9F;
}

/* CONTACT SECTION */

.contact{
padding:70px 6%;
text-align:center;
}

.contact h2{
margin-bottom:30px;
font-size:32px;
color:#C2DF9F;
}

/* FORM */

form.contact-form{
max-width:500px;
margin:0 auto;
background:#1e291e;
padding:35px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

input, textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border:none;
border-radius:10px;
background:#2a362a;
color:white;
outline:none;
}

input:focus, textarea:focus{
border:1px solid #A2DF9F;
}

/* BUTTON */

button{
padding:12px 25px;
border:none;
background:#A2DF9F;
color:#121a12;
border-radius:25px;
cursor:pointer;
font-weight:600;
transition:0.3s;
}

button:hover{
background:#C2DF9F;
}

/* FOOTER */

footer{
background:#1a241a;
text-align:center;
padding:20px;
margin-top:60px;
font-size:14px;
color:#ccc;
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

}

</style>

</head>

<body>

<header>

<nav class="navbar">

<div class="logo">CURA</div>

<!-- SEARCH FORM FIX -->
<form class="search-container" action="search.php" method="GET">

<input type="text" name="q" class="search-input" placeholder="Search medicines..." required>

<button class="search-btn" type="submit">🔍</button>

</form>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="medicines.php">Medicines</a></li>
<li><a href="wellness.php">Wellness</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

</nav>

</header>

<section class="contact">

<h2>Contact Us</h2>

<form class="contact-form" action="" method="post">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" rows="5" placeholder="Your Message" required></textarea>

<button type="submit">Send Message</button>

</form>

</section>

<footer>

<p>&copy; <?php echo date("Y"); ?> CURA Healthcare. All Rights Reserved.</p>

</footer>

</body>
</html>