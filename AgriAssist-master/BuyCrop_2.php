<html>
<Head>
        <link rel="stylesheet" type="text/css" href="Home1.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<Title>  AgriAssist/UpdationSuccessful  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers & consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="BuyerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>&nbsp;&nbsp;&nbsp;
			
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
  
  padding: 2px;
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
	color:maroon;
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

  $link3='Remove_Cart.php'; 
  $link1='BuyCrop.php';
  $flag=0;
  $EmptyCart=0;
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
    if(isset($_POST['sbmt']))
    {
	for($i=0;$i<Count($prodArr);$i++)
	{     
            if(isset($_POST["stk_qty$i"]))
			 $stq[$i]=$_POST["stk_qty$i"];
		    else
			 $stq[$i]=0;
			 $_SESSION['cart'][$i]=$_SESSION['cart'][$i]+$stq[$i];
	}
	//By here,prodArr contains prod_id for each selected product and the stq array has quantity of it
	for($i=0;$i<Count($prodArr);$i++)
	{
	 $query="UPDATE products SET stk_qty = stk_qty - {$stq[$i]} where prod_id={$prodArr[$i]}";
	 if (mysqli_query($con,$query))
	{
		$flag=1;
		continue;
	}
	else
	{
		echo "<h1>Oops!There was some error.....Please Try Again!</h1><br>";
		echo '<a href="'.$link1.'"> Try again</a>';
	}
	}
	$tmp = array_filter($_SESSION['cart']);
	    if(!empty($tmp))
		{
		//$_SESSION['cart'] = $stq;
		//unset($_SESSION['cart']); 
		//$_SESSION['cart'] = $cart;
	if($flag==1)
	{
     echo '<center><h1><b>Shopping Cart</b></h1></center>';
	 echo '<center><form action="'.$link3.'" method="POST">
			 <table>';
	 echo '<tr><td><u><b>Category</u></b></td><td><u><b>Crop</u></b></td><td><u><b>Variety</u></b></td><td><u><b>Rate</u></b></td><td><u><b>In Cart</u></b></td></tr> ';
	for($i=0;$i<Count($prodArr);$i++)
	{
	 $result = mysqli_query($con,"SELECT farmer_id,cat_id,prod_name,rate,variety FROM products where prod_id = {$prodArr[$i]};");
	 //$row = mysqli_fetch_assoc($result);
	 
			 
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
		    $prod_id=$prodArr[$i];
			if($_SESSION['cart'][$i]==0)
				continue;
		echo ' <tr>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
			 <td><b>'.$_SESSION['cart'][$i].'<div id="div1"></div></b></td>
             <td><b><button name="submit" id="btn1" value="'.$prod_id.'">Delete</button><div id="div1"></div><b></td>
			 </tr> ';
	}
			 
	 
	}
	echo '</table>
             <br></form>
			 </center>';
	}
	echo '<h4><a href="BuyCrop.php">ADD MORE</a></h4>';
	echo '<h4><a href="CheckOut.php">CHECKOUT</a></h4>';
		}
		else
		{
			echo '<br><br><br><br><br><br><h1>Cart Empty!</h1>';
	        echo '<h3><a href="BuyCrop.php">ADD</a></h3>';
		}		
}
?>               
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