<html>
<Head>
        <link rel="stylesheet" type="text/css" href="Home1.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<Title>  AgriAssist/CheckOut  </Title>
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

<Body>
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
	padding-bottom:10px;
	color:green;
}
#header{
		width:100%;
		height:110px;
		color:black;
		
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
	width:40%;
	text-align:center;
padding:5px;
}
tr{
	
	width:20%;
	
	text-align:center;
padding:5px;
}

td{
	
	width:20%;
	
	text-align:center;
padding:5px;
}
</style>
	<h1><center>Shopping Cart Checkout</center></h1>
	<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $link1='BuyCrop.php';
  $link2='Payments.php';
  $link3='SignOut.php';
     $final_bill=0;
     session_start();
	 $buyer_id=$_SESSION['user_id'];
	 $sql = "SELECT * FROM products;";
	 $result = $con->query($sql);  
     $i=0;
	 while($row = $result->fetch_assoc()) 
	 {
		$prodArr[$i]=$row["prod_id"];
		$i++;
     }
	 $cart=$_SESSION['cart'];
	//echo $cart_stq_check = $_SESSION['cart_stq_check'];
	echo '<center><h2><b>Cart Items</b></h2></center>';
	echo '<center><table>
<tr><td><u><b>Category</u></b></td><td><u><b>Crop</u></b></td><td><u><b>Variety</u></b></td><td><u><b>Rate</u></b></td><td><u><b>In Cart</u></b></td></tr> 	';
	for($i=0;$i<Count($prodArr);$i++)
	{
	 $result = mysqli_query($con,"SELECT farmer_id,cat_id,prod_name,rate,variety FROM products where prod_id = {$prodArr[$i]};");
	 //$row = mysqli_fetch_assoc($result);
	 
			 
    while($row = $result->fetch_assoc()) {
        if($row["cat_id"] == "11")
			$cat_name="Food Crop";
		else if($row["cat_id"] == "12")
			$cat_name="Cash Crop";
		else if($row["cat_id"] == "13")
			$cat_name="Plantation Crop";
		else if($row["cat_id"] == "14")
			$cat_name="Horticulture Crop";
		else
			$cat_name="?"; 
		if($cart[$i]==0)
			continue;
		echo ' <tr>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
			 <td><b>'.$cart[$i].'<div id="div1"></div></b></td>
			 </tr> ';
			 //Computing the bill:::::::::
			 $final_bill=$final_bill+($row["rate"]*$cart[$i]);
	}
			 
	}
	echo '</table></center>';
	        if($_SESSION['buyer_wallet']>=$final_bill+1000)
			{
	        echo '<center><h2><font color="maroon">Checkout Cart Amount : Rs. '. $final_bill . '</h2>';
			echo '<h2><a href="'.$link1.'"> Add more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			echo '<a href="'.$link2.'"> Pay Now</a></center></h2>';
			}
			else
			{
				echo '<center><h3><font color="maroon">Insufficient Balance. Maintain Minimum Balance of Rs. 1000 </h3>';
				echo '<h3><font color="navy">Available Balance : Rs. '. $_SESSION['buyer_wallet'] . ' &nbsp;&nbsp;  Cart Amount : Rs. '. $final_bill . '</h3>';
				echo '<br><h3><a href="'.$link1.'"> Add more</a></h3></center>';
			}
			 
?>	
</Body>
</html>
