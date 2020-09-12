<html>
<Head>
    <link rel="stylesheet" type="text/css" href="Home1.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<Title>  AgriAssist/CheckOut</Title>
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
	color:navy;
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
	 
	 function generateRandom() 
	 {
		return rand(1, 9999);
     }

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
	 
	 //$_SESSION['cart'];
	 
	 $results = mysqli_query($con,"SELECT order_id FROM orders;");
	 if($results->num_rows === 0) 
		 $order_id=generateRandom();
	 else
	 {
	 $arr = [];
	 $order_id=generateRandom();
	 while($row = mysqli_fetch_assoc($results)) {
    $arr[] = $row;
}
	 if (in_array($order_id, $arr)) 
  {
	  $order_id=generateRandom();
  }
	 }
	 //$id=generateRandom();
	 $today=date('Y-m-d');
  $query="insert into orders(order_id,buyer_id,order_date) values({$order_id},{$buyer_id},'$today')";
  if (mysqli_query($con,$query))
  {
	  $flag=1;
  }
$final_bill=0;
$status='Done';
$fX=0;
for($i=0;$i<Count($prodArr);$i++)
{
  if($_SESSION['cart'][$i]!=0)
  {
  $query="insert into order_details(order_id,prod_id,quantity,status) values ({$order_id},{$prodArr[$i]},{$_SESSION['cart'][$i]},'{$status}');";
if (mysqli_query($con,$query))
  {
	  echo " ";
  }
else
{
echo "Error";
}
$result = mysqli_query($con,"SELECT rate FROM products where prod_id = {$prodArr[$i]};");
	 //$row = mysqli_fetch_assoc($result);
	 echo '<center>
			 <table>';
    while($row = $result->fetch_assoc()) {
        $final_bill=$final_bill+($row["rate"]*$_SESSION['cart'][$i]);
	}
  $final_bill=$final_bill+($row["rate"]*$_SESSION['cart'][$i]);
  }
} 
  
  $_SESSION['buyer_wallet']=$_SESSION['buyer_wallet']-$final_bill;
  echo "<h1>Order placed successfully!</h1>";
  echo "<h2>Your Order number is:&nbsp;&nbsp;<font color='maroon'>".$order_id."</font></h2>";
  echo "<h2>The total amount is: &nbsp;&nbsp;<font color='maroon'>".$final_bill."</font></h2>";
  echo "<h2>The remaining wallet balance is: <font color='maroon'>&nbsp;&nbsp;".$_SESSION['buyer_wallet']."</font></h2>";
	
  $q2="UPDATE buyer SET buyer_wallet = buyer_wallet - {$final_bill} where buyer_id={$buyer_id}";
	 if (mysqli_query($con,$q2))
	{
		echo " ";
	}	
	for($i=0;$i<Count($prodArr);$i++)
    {
	$result = mysqli_query($con,"SELECT farmer_id,rate FROM products where prod_id = {$prodArr[$i]};");
    while($row = $result->fetch_assoc()) 
	{
        $fX=($row["rate"]*$_SESSION['cart'][$i]);
		$q1="UPDATE farmer SET farmer_wallet = farmer_wallet + {$fX} where farmer_id={$row["farmer_id"]}";
	    if (mysqli_query($con,$q1))
		{
			echo " ";
		}
		else
		{
			echo "Farmer Error!";
		}
	}
	
    }
	
	$_SESSION['cart']=array_fill(0,100,0);
?>
	</center>
</Body>
</html>
        <footer id="f">
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>