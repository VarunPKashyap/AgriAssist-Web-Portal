<link rel="stylesheet" type="text/css" href="Home1.css">

<div id="page-wrapper">
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			
				
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="BuyerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>

			
		</nav>
	</header>
<style>
#ss
{
	margin-top: 100px;
	border: 10px solid maroon;
    padding-top:4px;
	
}
</style>
<div class="slideshow-container" id="ss">

<div class="mySlides fade">
  
  <img src="images/HorticultureProdStats.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/GrainContents.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/CerealNutrients.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/FertilizerUse.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/ChemUsage.png" style="height:500px;width:100%;">

</div>

</div>
<br>

<div style="text-align:center" id="slide_dot">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

		<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>
	</div>
</div>
</div>