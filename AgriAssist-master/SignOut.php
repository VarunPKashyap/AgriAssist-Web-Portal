<html>
<Head>
	<Title>  AgriAssist/SignOut  </Title>
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
  session_destroy();
  header('location: Home.php');
		 
?>	
</Body>
</html>
