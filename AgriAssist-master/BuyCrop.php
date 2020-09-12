<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css" onsubmit="return checkForNull()";>
	<Title>  AgriAssist/BuyCrop  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="BuyerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>
	<?php session_start(); ?> 

<Body>
<style>
	#header{
		width:100%;
		height:120px;
		z-index:10;
	}
	
	* {
		margin-top: 0px;
		box-sizing: border-box;
	}

	body {
		width: 100%;
		height: 100%;
		
		font-size: 13px;
		text-align: center;
		background: cornsilk;
	}
	h2{
		color:green;
		padding-bottom:10px;
	}
	
	ul {
		margin: 30px auto;
		text-align: center;
	}

	li {
		list-style: none;
		position: relative;
		display: inline-block;
		width: 100px;
		height: 100px;
	}

	@-moz-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@-webkit-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@-o-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	.round {
		display: block;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		padding-top:35px;	
		text-decoration: none;		
		text-align: center;
		font-size: 15px;		
		text-shadow: 0 1px 0 rgba(255,255,255,.7);
		letter-spacing: -.065em;
		
		-webkit-transition: all .25s ease-in-out;
		-o-transition: all .25s ease-in-out;
		-moz-transition: all .25s ease-in-out;
		transition: all .25s ease-in-out;
		box-shadow: 2px 2px 7px rgba(0,0,0,.2);
		border-radius: 300px;
		z-index: 1;
		border-width: 4px;
		border-style: solid;

	}

	.round:hover {
		width: 130%;
		height: 130%;
		left: -15%;
		top: -15%;
		font-size: 0px;
		padding-top: 38px;
		-webkit-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		-o-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		-moz-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		z-index: 2;
		border-size: 10px;
		-webkit-transform: rotate(-360deg);
		-moz-transform: rotate(-360deg);
		-o-transform: rotate(-360deg);
		transform: rotate(-360deg);
	}
    a.blue {
		background-color: green;
		color: white;
		border-color: yellowgreen;
	}

	a.blue:hover {
		color: yellowgreen;
	}
	
	a.red {
		background-color: green;
		color: white;
		border-color: yellowgreen;
	}

	a.red:hover {
		color: yellowgreen;
	}

	a.green {
		background-color: green;
		color: white;
		border-color: yellowgreen;
	}

	a.green:hover {
		color: yellowgreen;
	}

	a.yellow {
		background-color: green;
		color: white;
		border-color: yellowgreen;
	}

	a.yellow:hover {
		color: yellowgreen;
	}

	.round span.round {
		display: block;
		opacity: 0;
		-webkit-transition: all .5s ease-in-out;
		-moz-transition: all .5s ease-in-out;
		-o-transition: all .5s ease-in-out;
		transition: all .5s ease-in-out;
		font-size: 1px;
		border: none;
		padding: 40% 20% 0 20%;
		color: #fff;
	}
	h1{
	padding-top:110px;}
	.round span:hover {
		opacity: .85;
		font-size: 16px;
		-webkit-text-shadow: 0 1px 1px yellowgreen;
		-moz-text-shadow: 0 1px 1px yellowgreen;
		-o-text-shadow: 0 1px 1px yellowgreen;
		text-shadow: 0 1px 1px yellowgreen;	
	}

    .blue span {
		background:yellowgreen;		
	}
	.green span {
		background: yellowgreen;		
	}

	.red span {
		background: yellowgreen;		
	}

	.yellow span {
		background: yellowgreen;	

	}
	
#btn:hover {
  background-color: green;
  border-radius:15px;
  align:center;
  transition: background-color 1s;
}
	td:hover{
background-color:yellowgreen;
color:white;

}
table{
	border: 2px solid black;
	border-radius:15px 45px;
	width:20%;
	text-align:center;
padding:15px;
}
tr{
	
	width:20%;
	
	text-align:center;
padding:10px;
}

td{
	
	width:20%;
	
	text-align:center;
padding:10px;
}
#btn {
	width: 100px;

  height: 30px;
  font-size: 0.85em;
  font-weight: 400;
  text-transform: uppercase;
  
  padding-top: 2px;
border-radius: 15px 50px;
  background: green;
  cursor: pointer;
	color:white;
}
#btn:hover {
  background-color: yellowgreen;
  transition: background-color 1s;
}

	</style>
	
	<h1><center>Welcome to the Marketplace</center></h1>
	<ul>
      <li><a href="BuyCrop_Food.php" class="round blue">Food Crops<span class="round">Food Crops such as Rice,Wheat, Ragi and so on</span></a></li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href="BuyCrop_Cash.php" class="round green">Cash Crops<span class="round">Cash Crops such as Cotton,Spices and Dry Fruits </span></a></li><br><br>
	  <li><a href="BuyCrop_Plantation.php" class="round yellow">Plantation Crops<span class="round">Plantation Crops such as Tea, Coffee, Cocoa, Rubber and so on</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li><a href="BuyCrop_Horticulture.php" class="round red">Horticulture Crops<span class="round">Horticulture such as Fruits and Vegetables</span></a></li>
    </ul> 


<p><br><font  size="4"color="green"><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Selling Made Quicker &nbsp; &nbsp; &nbsp; &nbsp; Farming Made Easier &nbsp; &nbsp; &nbsp; &nbsp;
            Payments At Your Finger Tip &nbsp; &nbsp; &nbsp; &nbsp; Growing Faster &nbsp; &nbsp; &nbsp; &nbsp; Conquering Challenges &nbsp; &nbsp; &nbsp; &nbsp; Providing Farmer Welfare</font></p>
<br><br>

</Body>
</html>

