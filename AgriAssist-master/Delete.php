<html>
<Head>
	<Title>  AgriAssist/DeleteStock  </Title>
</Head>

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
echo ' <form action="'.$link.'" method="POST">
     <center>
			 <table>
			 <th><font color="red" face="comic sans ms" size="5"><b>Update crop quantities</b></th> ';
			 $i=0;
    while($row = $result->fetch_assoc()) {
        if($row["cat_id"] == "11")
			$cat_name="Food";
		else if($row["cat_id"] == "12")
			$cat_name="Cash";
		else
			$cat_name="?";
		echo $mystk='stk_qty'.$i;
		echo $myrate='rate'.$i;
		echo ' <tr>
			 <td><b>'.$cat_name.'<div id="div1"></div></b></td>
	         <td><b>'.$row["prod_name"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["variety"].'<div id="div1"></div></b></td>
			 <td><b>'.$row["stk_qty"].'<div id="div1"></div></b></td>
	         <td><b>'.$row["rate"].'<div id="div1"></div></b></td>
		     <td><b><input type="submit" value="DELETE" name="'.$row["prod_id"].'"/><div id="div1"></div></b></td>
			 </tr> ';
			 $i=$i+1;
	}
	$_SESSION['cropCount'] = $i;
			 echo '</table>
			 </center> </form>';
			 
} else {
    echo "0 results";
}   
?>

	
	
</Body>
</html>
