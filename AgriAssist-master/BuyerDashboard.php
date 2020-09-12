<html>
<Head>
    <link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/BuyerDashboard  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			
				
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home2.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>

			
		</nav>
	</header>
	
</Head>

<Body>
	<style>
#header{
		width:100%;
		height:120px;
		font-size: 15px;
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
		padding-bottom:50px;
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
		padding-top: 30px;		
		text-decoration: none;		
		text-align: center;
		font-size: 25px;		
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
	padding-top:100px;}
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
	
	</style>
	<h1>Buyer Dashboard</h2>
	<?php
	$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
    if (mysqli_connect_errno())
    {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	session_start();
	 $buyer_id=$_SESSION['user_id'];
	 $result = mysqli_query($con,"SELECT buyer_name from buyer WHERE buyer_id={$buyer_id}");
	 $row = mysqli_fetch_assoc($result);
	 $buyer_name=$row['buyer_name'];?>
	 <h2>Welcome to the Dashboard <font color="blue"><?php echo $buyer_name;?></font></h2>
	<ul id="bounce"><center>
     <li><a href="BuyerHistory.php" class="round blue">History<span class="round">View previous Purchases</span></a></li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <li><a href="CropInfo.php" class="round blue"><font size = "4px">N u t r i o n a l<br> I n f o</font><span class="round">View Nutrional Facts about the Crops</span></a></li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href="BuyCrop.php" class="round green">Buy Now<span class="round">Choose from crops and which farmer to buy from </span></a></li><br><br>
    </center></ul> 
	  <p><br><br><font  size="4"color="green"><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Selling Made Quicker &nbsp; &nbsp; &nbsp; &nbsp; Farming Made Easier &nbsp; &nbsp; &nbsp; &nbsp;
            Payments At Your Finger Tip &nbsp; &nbsp; &nbsp; &nbsp; Growing Faster &nbsp; &nbsp; &nbsp; &nbsp; Conquering Challenges &nbsp; &nbsp; &nbsp; &nbsp; Providing Farmer Welfare</font></p>
</Body>
</html>

