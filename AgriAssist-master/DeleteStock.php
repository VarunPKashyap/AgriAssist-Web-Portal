<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/DeleteStock  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="FarmerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>
<style>
#btn {
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
#btn:hover {
  background-color: red;
  color:white;
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
	padding-top:120px;
	padding-bottom:20px;
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
padding:5px;
}
	footer {
  margin-top: 30px;
  background-color:#127234;
  padding: 10px;
	color:white;
	position:relative;
	bottom:0px;
	width:95%;
	margin-left:15px;
	align:center;
}

	
</style>
<Body>
	
	<h1><center>Welcome to AgriAssist</center></h1>
	<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     session_start();
	 $farmer_id=$_SESSION['user_id'];
     $sql = "SELECT * FROM products where farmer_id =$farmer_id;";
	 $result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	$link='DeleteStock_2.php';
echo '<center><form action="'.$link.'" method="POST">
			 <h2><b>Choose the Crop to be removed:</b></h2>
			 <table><tr><td><u><b>Category</u></b></td><td><u><b>Crop</u></b></td><td><u><b>Variety</u></b></td><td><u><b>Rate</u></b></td><td><u><b>Stock Quantity</u></b></td></tr>';
			 $i=0;
    while($row = $result->fetch_assoc()) {
        if($row["cat_id"] == "11")
			$cat_name="Food";
		else if($row["cat_id"] == "12")
			$cat_name="Cash";
		else if($row["cat_id"] == "13")
			$cat_name="Plantation";
		else if($row["cat_id"] == "14")
			$cat_name="Horticulture";
		else
			$cat_name="?";
	    $prod_id=$row["prod_id"];
		echo ' <tr>
			 <td>'.$cat_name.'<div id="div1"></div></td>
	         <td>'.$row["prod_name"].'<div id="div1"></div></td>
	         <td>'.$row["variety"].'<div id="div1"></div></td>
	         <td>'.$row["rate"].'<div id="div1"></div></td>
			 <td>'.$row["stk_qty"].'<div id="div1"></div></td>
			 <td>&nbsp;&nbsp;&nbsp;<b><button id="btn" name="submit" value="'.$prod_id.'">Delete</button><div></div><b></td> 
			 </tr> ';
			 $i=$i+1;
	}
	$_SESSION['cropCount'] = $i;
			 echo '</table>
			 </form></center> ';
			 
} else {
    echo "<h3>No products in the stock</h3>";
}   
?>
   
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>