<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
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

	 //$cart=$_SESSION['cart'];
	 $link1='CartShow.php';
  if(isset($_POST['submit']))
{
   $prod_id = $_POST['submit'];
}
$flag=0;
 //$_SESSION['cart'];
for($i=0;$i<Count($prodArr);$i++)
{
	if($prodArr[$i]==$prod_id)
	{
		$query="UPDATE products SET stk_qty = stk_qty + {$_SESSION['cart'][$i]} where prod_id={$prodArr[$i]}";
	 if (mysqli_query($con,$query))
	{
		$flag=1;
        $_SESSION['cart'][$i]=0;
		break;
	}
	else
	{
		echo "<h1>Oops!There was some error.....Please Try Again!</h1><br>";
		echo '<a href="'.$link1.'"> Try again</a>';
	}
	}		

}
  if ($flag==1) 
  {
    echo '<h1><font color="maroon">Item has been Deleted</font></h1>';
	echo '<h2><a href="'.$link1.'"> View Cart</a></h2>';
  } 
  else 
  {
    echo "Error deleting record";
  }
?>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/RemoveCart  </Title>
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
  color:white;

  transition: background-color 1s;
}
h2{
	padding-bottom:5px;
	color:green;
	padding-top:15px;
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
</style>