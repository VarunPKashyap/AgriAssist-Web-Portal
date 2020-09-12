<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/UpdationSuccessful  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="FarmerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
  $link1='UpdateStock.php';
if(isset($_POST))
{
	session_start();
	$cropCount=$_SESSION['cropCount'];
	$farmer_id=$_SESSION['user_id'];
	$results = mysqli_query($con,"SELECT prod_id FROM products where farmer_id={$farmer_id}");
	while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    $arr[] = $row['prod_id'];
}
	$stq='';
	$rat='';
	$flag=0;
	for($i=0;$i<$cropCount;$i++)
	{
	  $stq=$_POST["stk_qty$i"];
	  $rat=$_POST["rate$i"];
	 $query="UPDATE products SET stk_qty ={$stq},rate={$rat} where prod_id={$arr[$i]}";
	 if (mysqli_query($con,$query))
	{
		$flag=1;
		continue;
	}
	else
	{
		echo "<h1>Oops!There was some error.....Please Try Again!</h1><br>";
		echo '<h2><a href="'.$link1.'"> Try again</a></h2>';
	}
	}
	if($flag==1)
	{
	echo '<h1>Updation Successful!</h1><br>';
	}
	else
	{
		echo '<h1>Oops!There was some error.....Please Try Again!</h1><br>';
	}
}
?>
    <br><b><h4><a href="Farmer_ViewStock.php">VIEW INVENTORY</a></h4><b>

</body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>