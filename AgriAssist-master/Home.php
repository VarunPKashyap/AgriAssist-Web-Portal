<link rel="stylesheet" type="text/css" href="Home1.css">

<div id="page-wrapper">
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				<li><a class="nav-link" href="#about">About Us</a></li>
				<li><a class="nav-link" href="#features">Our Promise</a></li>
				<li><a class="nav-link" href="#services">Our Services</a></li>
				<li><a class="nav-link" href="#how-it-works">Get In Touch</a></li>
				<li><a class="nav-link" href="Login.php">Login</a></li>

			</ul>
		</nav>
	</header>

	

	<section id="about">

		<h1>Bridging the Gap between the Farmer and Consumer</h1>
		
		<h4> AgriAssist aims to provide a fair, effective and user-friendly platform for Farmers to sell their produce to the Consumer directly, without the need of intervention from Middlemen. This system not only allows the farmers to gain a reasonable yield
			 to sustain themselves but also provides the consumer the flexibility to choose and buy products of their choice, at a lower price. 
			 Farmers have suffered because of the exploitation by middlemen and brokers leading to economic disparity, plummeting number of people taking up farming and an increase in the farmer suicide rates. This grave danger to the backbone of our society must be stopped. Let us join hands and help our farmers through AgriAssist.</h4>
	 <button id="submit" onclick="window.location.href = 'SignUp.php';">Register Now</button>
	</section>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/slideshow3.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/slideshow2.png" style="height:500px;width:100%;">

</div>

<div class="mySlides fade">
  
  <img src="images/slideshow1.png" style="height:500px;width:100%;">

</div>

</div>
<br>

<div style="text-align:center" id="slide_dot">
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
<section id="features">
    <center>
    <p id ="ProbSt">The AgriAssist web portal system provides an intermediate interface between the farmer and the buyer, eliminating the need for middlemen and brokers. The system enables farmers to quote the price they desire for their produce while the buyer gets to compare and purchase yield from the listed commodities, hence providing a transparent medium during transactions.</p>
	</center>
	<div class="container">
		
			<div class="grid">
				<div class="icon"><i class="fa fa-3x fa-fire"></i></div>
				<div class="desc">
					<h2>Best Quality Produce</h2>
					<p>
						We only source the Best Quality of crops, grains and vegetables from the farmers. All the produce is organic and rich in minerals. Hence ensuring only the most healthy of produce, rich in essential nutrients are sold.
					</p>
				</div>
			</div>
			<div class="grid">
				<div class="icon"><i class="fa fa-3x fa-truck"></i></div>
				<div class="desc">
					<h2>Eliminating Middlemen</h2>
					<p>
We ensure Direct Marketing of the farmers produce to the consumer to ensure only fresh crops are sold at a reasonable rate. This benifits both farmer and consumer.
					</p>
				</div>
			</div>
			<div class="grid">
				<div class="icon">
					<i class="fa fa-3x fa-battery-full" aria-hidden="true"></i>
				</div>
				<div class="desc">
					<h2>User Satisfaction</h2>
					<p>
						We hold User satisaction of both the Farmer and the Consumer to the highest regard. We strive to ensure this by providing a fair interface for the farmer to list crops and the consumer the option to select the right produce.

					</p>
				</div>
			</div>
		</section>
		<div id="services">
		<br><br>
		<section id="pricing">
			<div class="product" id="tenor">
				<div class="level">Farmer Portal</div>
				<h5></i>User-Friendly Platform for Listing Produce.</i></h5>
				<ol>
					<li>List Crop Name, Quantity & Price.</li>
					<li>Dashboard to view Inventory.</li>
					<li>Easily add, update or remove listing.</li>
					<li>Wallet to keep track of Payments made.</li>
				</ol>
				<button class="btn" onclick="window.location.href = 'Login.php';">Login</button>
			</div>
			<div class="product" id="bass">
				<div class="level">Portal Overview </div>
				<h5><i>Connecting the consumer directly to farmers</i></h5>
				<ol>
					<li>Transparency and Unbiased interface medium</li>
					<li>Easy to use for all user</li>
					<li>Vigilant Regulation</li>
					<li>Secure and Effective Wallet Implementation</li>
				</ol><button class="btn" onclick="window.location.href = 'SignUp.php';">Join Us</button>
			</div>
			<div class="product" id="valve">
				<div class="level">Buyer Portal</div>
				<h5><i>Regulating AgriAssist at District Level</i></h5>
				<ol>
					<li>Reasonable Rates for fresh produce</li>
					<li>Fair price listing to promote farmer welfare</li>
					<li>Effecient listing of Produce</li>
					<li>Easy payment interface</li>
				</ol>
				<button class="btn" onclick="window.location.href = 'Login.php';">Login</button>
			</div>
		</section>
		</div>
		<section id="how-it-works">
		<div class="product" id="tenor">
				<div class="level">Address</div>
				
				<ol>
			Post Box No. 7087,<br>
12th Main Road, 27th Cross,<br>
Banashankari II Stage,<br>
Bangalore – 560 070.
				</ol>
				
			</div>
			<div class="product" id="bass">
				<div class="level">Phone Number </div>
				
				<ol>
					Varun : 8105573177<br>
Naman : 7985199972
				</ol>
			</div>
			<div class="product" id="valve">
				<div class="level">Email</div>
				
				<ol>
					agriassist@bnmit.in<br>
					naman786sinha@gmail.com<br>
					varunpkashyap98@gmail.com
				</ol>
				
			</div>
			
			
			
		</section>
		
	
		
		
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