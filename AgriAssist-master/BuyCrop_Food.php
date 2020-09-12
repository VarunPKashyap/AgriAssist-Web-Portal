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
	

	<?php 
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	 $buyer_id=$_SESSION['user_id'];
     $sql = "SELECT * FROM products;";
	 $result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	$link='BuyCrop_2.php';
echo ' <form action="'.$link.'" method="POST">
     <center><h2><b>Enter the quantity</b></h2>
			 <table><tr><td><u><b>Category</b></u></td><td><u><b>Crop</u></b></td><td><u><b>Variety</u></b></td><td><u><b>Rate</u></b></td><td><u><b>Stock Quantity</u></b></td></tr>
			  ';
			 $i=0;
			 $prodArr=array_fill(0, 100, 0);
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
		    $mystk='stk_qty'.$i;
		    $prodArr[$i]=$row["prod_id"]; 
			if($cat_name!="Food")
			{
				$i=$i+1;
				continue;
			}
		echo ' <tr>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["stk_qty"].'<div id="div1"></div></b></td>
			 <td><b><input type="number" name="'.$mystk.'" required="required" value="0" min="0" max="'.$row["stk_qty"].'" size="5""/><div id="div1"></div></b></td>
			 </tr> ';
			 $i=$i+1;
	}        
			 echo '</table>
             <br><input type="submit" id="btn" value="Add To Cart" name="sbmt"/><br>
			 </center> </form>';
			 
} else {
    echo "0 results";
}   
?>
<p><br><font  size="4"color="green"><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Selling Made Quicker &nbsp; &nbsp; &nbsp; &nbsp; Farming Made Easier &nbsp; &nbsp; &nbsp; &nbsp;
            Payments At Your Finger Tip &nbsp; &nbsp; &nbsp; &nbsp; Growing Faster &nbsp; &nbsp; &nbsp; &nbsp; Conquering Challenges &nbsp; &nbsp; &nbsp; &nbsp; Providing Farmer Welfare</font></p>
<br><br>

</Body>
</html>

