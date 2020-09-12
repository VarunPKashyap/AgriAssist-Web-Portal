<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/UpdationSuccessful  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="FarmerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>
<style>
#btn {
	width: 120px;

  height: 40px;
  font-size: 0.85em;
  font-weight: 400;
  text-transform: uppercase;
  
  padding: 8px;
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
	padding-bottom:30px;
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
	padding-top:180px;
	align:center;
	padding-bottom:20px;
	}
	a:hover{color:white;}
	a{color:green;}
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
</style>
<body>
<center>
<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['submit']))
{
   $prod_id = $_POST['submit'];
}
  $sql = "DELETE FROM products WHERE prod_id = $prod_id;"; 

  if (mysqli_query($con, $sql)) 
  {
    echo "<h1>Deletion Successful!</h1><br>";
  } 
  else 
  {
    echo "<h1>Oops!There was some error.....Please Try Again!</h1><br>";
  }
?>
    <br><h4><a href="Farmer_ViewStock.php">VIEW INVENTORY</a></h4>
    
	</center>
</body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>