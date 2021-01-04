<html lang="hu">
<head>
	<meta charset="utf-8">
  	<title>Sándorné Feke Réka - Webáruháza</title>
    <link href="taki.ICO" rel="shortcut icon" >
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css.css">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
	<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<div class="container">
<ul class="nav nav-tabs">
			<li class="nav-item">
			  <a href="http://users.atw.hu/fekereka/" target="_self" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
			  <a href="http://users.atw.hu/fekereka/webaruhaz/" target="_self" class="nav-link">Webáruház</a>
			</li>
			<li class="nav-item">
			  <a href="https://atw.hu/" target="_blank">atw.hu</a>
			</li>
			<li class="nav-item">
			  <a href="https://tavoktatas.kando.takinfo-taki.hu/">tavoktatas.kando.takinfo-taki.hu</a>
			</li>
			<li class="nav-item">
			  <a href="http://kkszki.hu/" target="_blank" class="nav-link">kkszki.hu</a>
			</li>
			<li class="nav-item">
			  <a href="https://mszc-kando.e-kreta.hu/Adminisztracio/Login">Kréta</a>
			</li>
			<li class="nav-item">
			  <a href="https://github.com/">GitHub </a>
			</li>
			<li class="nav-item">
			  <a href="https://www.w3schools.com/">w3schools.com</a>
			</li>
		</ul>
	</div>	
<div class="container">
	<h2><img alt="" src="taki.ICO">&nbsp;<img alt="" src="logo_32.jpg">&nbsp; Sándorné Feke Réka - Webáruháza</h2>
	<p>
		Miskolci SZC Kandó Kálmán Informatikai Technikum
	</p>                  
	<ul class="nav nav-pills" role="tablist">
		<li class="active"><a href="http://users.atw.hu/fekereka/webaruhaz/">Webáruház</a></li> 
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/minden.php">Minden termék</a></li> 
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/alaplapok.php">Alaplapok</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/monitorok.php">Monitorok</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/szamitogepek.php">Számítógépek</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/videokartyak.php">Videókártyák</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/memoriak.php">Memóriák</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/merevlemezek.php">Merevlemezek</a></li>
		<li><a href="http://users.atw.hu/fekereka/webaruhaz/kereses.php">Keresés</a></li>
	</ul>
<hr>
<h3>Üdvözöllek a webáruházamban!</h3>
<hr>
  <h4>1/13.C 2. csoport IKT Projekmunka I.</h4>
  <br><br>
   <div class="slideshow-container">

<div class="mySlides fade">
   <img src="./img/hardver1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
   <img src="./img/hardver2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
    <img src="./img/hardver3.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#60;</a>
<a class="next" onclick="plusSlides(1)">&#62;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
<br>
<br>
</body>
<footer>
	<style>
footer {
  position: relative;
  height: 100px;
  margin-left: 190px;
  padding: 20px;
  background: linear-gradient(150deg, #0ebeff, #ffdd40, #ae63e4, #47cf73);
  bottom: 0;
  width: 75%;
}
footer p {
	text-align: center;
	background: none;
	font-size: 20px;
	font-weight: bold;
	color: black;
	bottom: 0;
}
p a {
	color: blue;
}
</style>
	<p>Készítette: Sándorné Feke Réka</p>
	<p><a href="mailto:sandornef@kkszki.hu">e-mail: sandornef@kkszki.hu</a></p>
</footer>
</html>
