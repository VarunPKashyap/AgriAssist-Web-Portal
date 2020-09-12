<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $buyer_id=$_SESSION['user_id'];
	 $prod_arr=$_SESSION['prod_arr'];
	 $cart=$_SESSION['cart'];
  
  
  if(isset($_POST['submit']))
{
   $prod_id = $_POST['submit'];
}
  $sql = "DELETE FROM products WHERE prod_id = $prod_id;"; 

  if (mysqli_query($con, $sql)) 
  {
    echo "Over";
  } 
  else 
  {
    echo "Error deleting record";
  }
?>