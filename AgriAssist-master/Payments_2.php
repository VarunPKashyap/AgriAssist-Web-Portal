<html>
<Head>
    <link rel="stylesheet" type="text/css" href="Home1.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<Title>  AgriAssist/Verify  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				
				<li><a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a></li>
				<li><a class="nav-link" href="Home2.php">Home</a></li>
				<li><a class="nav-link" href="BuyerDashboard.php">Dashboard</a></li>
				<li><a class="nav-link" href="SignOut.php">Sign Out</a></li>

			</ul>
		</nav>
	</header>
</Head>
<body>
<style>
#btn {
	width: 100px;

  height: 30px;
  font-size: 0.85em;
  font-weight: 400;
  text-transform: uppercase;
  
  padding: 10px;
border-radius: 15px 50px;
  background: green;
  cursor: pointer;
	color:white;
}
#btn:hover {
  background-color: yellowgreen;
  transition: background-color 1s;
}
h2{
	padding-bottom:5px;
	color:green;
}
#header{
		width:100%;
		height:110px;
		
		
	}
	body {
		width: 100%;
		height: 100%;
		
		font-size: 13px;
		text-align: center;
		background: cornsilk;
	}
	h1{
	padding-top:110px;
	padding-bottom:5px;
	}
	
	footer {
  margin-top: 30px;
  background-color:#127234;
  padding: 10px;
	color:white;
	position:fixed;
	bottom:0px;
	width:95%;
	margin-left:15px;
	align:center;
}

td:hover{
background-color:yellowgreen;

}
table{
	border: 2px solid black;
	border-radius:15px 45px;
	width:20%;
	text-align:center;
	padding:5px;
	margin-top:2px;
}
tr{
	
	width:20%;
	
	text-align:center;
padding:5px;
}

td{
	
	width:20%;
	
	text-align:center;
padding:8px;
}
#btn1 {
	width: 100px;

  height: 30px;
  font-size: 0.75em;
  font-weight: 350;
  text-transform: uppercase;
  
 
border-radius: 15px 50px;
  background: green;
  cursor: pointer;
	color:white;
}

#btn1:hover {
  background-color: red;
  color:white;
  transition: background-color 1s;
}

</style>
<center>
<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['sbmt']))
{
	session_start();
	$pswd=$_POST['pswd'];
	//echo $pswd=(int)$pswd;
	$buyer_pswd=$_SESSION['buyer_pswd'];
	$link='Payments.php';
	if ($buyer_pswd == $pswd)
	{
		header('location: OrderPlaced.php');
	}
	else
	{
		echo "Payment Failed!";
		
		echo '<br><a href="'.$link.'">Pay Again </a>';
	}
}
?>
<h1><font color ="maroon">Payment Failed</font></h1>
<br><h3><a href="Payments.php">Pay Again </a></h3>

</center>
</body>
</html>
<footer id="f">
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>