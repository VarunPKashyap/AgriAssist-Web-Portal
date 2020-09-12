<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/History  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;
				
				<a class="nav-link" href="BuyerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>

<Body>
<style>
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
h1{
padding-top:120px;
color: maroon;	
}
td{
	
	width:20%;
	
	text-align:center;
padding:10px;
}
table{
background-color: cornsilk;	
}
</style>
	
	<h1><center>Past Transactions</center></h1> 
	<?php
      
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
     session_start();
	 $buyer_id=$_SESSION['user_id'];
	 $ordArr=array_fill(0, 100, 0);
	 $ordDate=Array();
     $sql = "SELECT order_id,order_date FROM orders where buyer_id = $buyer_id;";
	 $result = $con->query($sql);
     $i=0;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	$ordArr[$i]=$row["order_id"];
	$ordDate[$i]=$row["order_date"];
	$i++;
}
}
else 
{
    echo "<br><br><br><br><center><h3>No orders placed yet!<br> Please place an order to view transaction details!</h3><center><br><br><br><br><br><br><br><br>";
} 
$numOforders=$i;

for($i=0;$i<$numOforders;$i++)
{
	echo ' <center>
			 <table>
			 <tr><td><u><b>Category</b></u></td><td><u><b>Crop</u></b></td><td><u><b>Variety</u></b></td><td><u><b>Rate</u></b></td><td><u><b>Quantity</u></b></td><td><u><b>Farmer Name</b></u></td><td><u><b>Farmer Phone</b></u></td><td><u><b>Farmer Address</b></u></td></tr>';
$sql1 = "SELECT f.farmer_name as farmer_name,f.farmer_phone as farmer_phone,f.farmer_address as farmer_address,p.farmer_id as farmer_id,p.cat_id as cat_id,p.prod_name as prod_name,p.rate as rate,p.variety as variety,d.quantity as quantity 
         FROM products p,order_details d,farmer f 
		 where p.prod_id = d.prod_id 
		 and p.farmer_id=f.farmer_id 
		 and d.order_id=$ordArr[$i];";
	 $result = $con->query($sql1);
     $j=0;
	 $final_bill=0;
if ($result->num_rows > 0) {
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
		echo ' <tr>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["quantity"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["farmer_name"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["farmer_phone"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["farmer_address"].'<div id="div1"></div></b></td>
			 </tr> ';
			 $final_bill=$final_bill+($row["rate"]*$row["quantity"]);
	}
			 echo '</table></center>';
			 
} 
else 
{
    echo "<br><br><br><br><center><h3>No orders placed yet!<br> Please place an order to view transaction details!</h3><center>";
} 
    $r1 = mysqli_query($con,"SELECT date_format( order_date , ' %Y/ %m/ %d ' ) as order_date FROM orders WHERE order_id={$ordArr[$i]}");
	$row = mysqli_fetch_assoc($r1);
  echo '<center><h3> Order No.: <font color="maroon"> '. $ordArr[$i] .'</font> Order Date: <font color="maroon">'. $row['order_date'] .' </font>Total amount: <font color="maroon">'.$final_bill. '</font></h3>';
}

?>
	        
</Body>
</html>
<footer id="f">
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer> 	
