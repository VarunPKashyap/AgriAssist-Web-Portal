<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/Crop Added  </Title>
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
<Body>
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
	 
	 //$role=$_POST['role'];
	 
	 function generateRandom() 
	 {
		return rand(1, 9999);
     }
     function insert_table()
	 {
	 $con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
	 $prod_name=$_POST['prod_name'];
	 $stk_qty=$_POST['stk_qty'];
	 $rate=$_POST['rate'];
	 $variety=$_POST['variety'];
	 $category=$_POST['category'];
	 session_start();
	 $farmer_id=$_SESSION['user_id'];
	 
	 $result = mysqli_query($con,"SELECT cat_id FROM category WHERE cat_name='$category';");
	 $row = mysqli_fetch_assoc($result);
	 $cat_id=$row['cat_id'];
		 
	 $results = mysqli_query($con,"SELECT prod_id FROM products");
	 if($results->num_rows === 0) 
		 $prod_id=generateRandom();
	 else
	 {
	 $arr = [];
	 $prod_id=generateRandom();
	 while($row = mysqli_fetch_assoc($results)) {
    $arr[] = $row;
}
	 if (in_array($prod_id, $arr)) 
  {
	  $prod_id=generateRandom();
  }
	 }
	 //$id=generateRandom();
  $query="insert into products(prod_id,farmer_id,cat_id,prod_name,stk_qty,rate,variety) values('$prod_id','$farmer_id','$cat_id','$prod_name','$stk_qty','$rate','$variety')";
  if (mysqli_query($con,$query))
  {
	  echo "<h1>Crop added successfully!</h1>";
  }
  else
  {
	  $link2='AddCrop.php';
	  echo "<h1>Oops!There was some error.....Please Try Again!</h1>";
	  echo '<a href="'.$link2.'">TRY AGAIN</a><br><br>';
  }
	 
     }
	 
		insert_table();
	
}
?>   <br><b><h4><a href="Farmer_ViewStock.php">VIEW INVENTORY</a></h4><b>

	</center>
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>