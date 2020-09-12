<html>
<Head>
	<Title>  AgriAssist/History  </Title>
</Head>

<Body>
<style>
</style>
	
	<h1><center>Welcome to AgriAssist</center></h1> 
	<?php
      
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
     session_start();
	 $farmer_id=$_SESSION['user_id'];
	 $ordArr=array_fill(0, 100, 0);
	 //$ordDate=Array();
     $sql = "SELECT prod_id FROM products where farmer_id = $farmer_id;";
	 $result = $con->query($sql);
     $i=0;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	$prodArr[$i]=$row["prod_id"];
	$i++;
}
}
$numOfprods=$i;
$j=0;
for($i=0;$i<$numOfprods;$i++)
  {
$sql1 = "SELECT order_id FROM order_details where prod_id = $prodArr[$i];";
	 $result = $con->query($sql1);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	$ordArr[$j]=$row["order_id"];
	$j++;
}
}
  }
  
  $numOforders=$j;
  for($p=0;$p<$numOforders;$p++)
  {    
     $sql2 = "SELECT distinct b.buyer_id as buyer_id,b.buyer_name as buyer_name,b.buyer_phone as buyer_phone,b.buyer_address as buyer_address,o.order_id as order_id,p.cat_id as cat_id,p.prod_id as prod_id,p.prod_name as prod_name,p.rate as rate,p.variety as variety,d.quantity as quantity 
FROM products p,order_details d,buyer b,orders o 
where b.buyer_id=o.buyer_id
and o.order_id=d.order_id
and d.order_id=$ordArr[$p];";		 
	 $result = $con->query($sql2);
     //$j=0;
	 //$final_bill=0;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	for($q=0;$q<$numOfprods;$q++)
    {
	echo ' <center>
			 <table>';
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
		if($row["prod_id"]!=$prodArr[$q])
		{
		continue;
		}
		else
		{
		echo ' <tr>
		     <td><b>'.$row["buyer_name"].'<div id="div1"></div></b></td>
		     <td><b>'.$row["buyer_phone"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["buyer_address"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["order_id"].'<div id="div1"></div></b></td>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
			 <td><b>'.$row["prod_id"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["quantity"].'<div id="div1"></div></b></td>
			 </tr> ';
			 //$final_bill=$final_bill+($row["rate"]*$row["quantity"]);
			 
		}
		//echo '<h3> The order number is: '. $ordArr[$k] .'</h3>';
	}
						 
}
echo '</table></center>';
} 
else 
{
    echo "0 results";
} 
  //echo '<center><h3>The total bill to be paid is :'. $final_bill . '</h3>';
 }
?>

	
	         <br><h4><a href="FarmerDashboard.php"> DASHBOARD</a></h4>
			 <br><h4><a href="SignOut.php"> SIGN OUT</a></h4>
</Body>
</html>
