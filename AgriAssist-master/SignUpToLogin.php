<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/SignUp Successful  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				
				<li><a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a></li>
				
				<li><a class="nav-link" href="Home.php">Home</a></li>
				<li><a class="nav-link" href="SignUp.php">Login</a></li>

			</ul>
		</nav>
	</header>
</Head>
<style>
@import "https://fonts.googleapis.com/css?family=Lato:400,700";
footer {
  margin-top: 30px;
  background-color:#127234;
  padding: 10px;
	color:white;
	position:fixed;
	bottom:0px;
	width:90%;
	margin-left:50px;
	align:center;
}
#loginPg{
	 display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  
  margin-top: 60px;
	padding-top:85px;
}
h1{
	margin-top:40px;
	padding-top: 20px;
	margin:20px;
	color:maroon;
}
#sub {
	width: 120px;

  height: 40px;
  font-size: 0.85em;
  font-weight: 400;
  text-transform: uppercase;
  
  padding: 8px;
border-radius: 15px 50px;
  background: maroon;
  cursor: pointer;
	color:white;
}
input{
color:black;
width:100px;
border-radius:10%;
background-color:yellowgreen;
}
#sub:hover {
  background-color: green;
  transition: background-color 1s;
}
#pswd{

background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
#usrnm{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	

#role{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
tr:nth-child(even){
background-color:sugarcane;
}
tr:nth-child(odd){
background-color:sugarcane;
}
td:hover{
background-color:yellowgreen;

}
body{

background-color:sugarcane;
}
table{
background-color:sugarcane;
}
h3{
	color:green;
}
#sbtn{
	color: green;
  transition:background-color 1s;
  font-weight:bold;
 }
</style>
<Body>
<center>
	<h1>Welcome to AgriAssist</h1>
	<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['sbmt']))
{
	 
	 $role=$_POST['role'];
	 
	 function generateRandom() 
	 {
		return rand(1, 9999);
     }
     function insert_table($role)
	 {
	 $con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
	 $name=$_POST['name'];
	 $pswd=$_POST['pswd'];
	 $phone=$_POST['phone'];
	 $address=$_POST['address'];
	 //Wallet_bal, status and id have to decided upon and inserted
	 if ($role=="Farmer")
	 $bal=10000;
     else
     $bal=100000;
	 $status="Approved";
	 $results = mysqli_query($con,"SELECT {$role}_id FROM {$role}");
	 if($results->num_rows === 0) 
		 $id=generateRandom();
	 else
	 {
	 $arr = [];
	 $id=generateRandom();
	 while($row = mysqli_fetch_assoc($results)) {
    $arr[] = $row;
}
	 if (in_array($id, $arr)) 
  {
	  $id=generateRandom();
  }
	 }
	 //$id=generateRandom();
  $query="insert into {$role}({$role}_id,{$role}_pswd,{$role}_name,{$role}_phone,{$role}_address,{$role}_wallet,status) values('$id','$pswd','$name','$phone','$address','$bal','$status')";
  if (mysqli_query($con,$query))
  {
	  echo "<h1>You have registered successfully!</h1>";
	  echo "<h3>Your ".$role." id is ".$id."</h3>";
  }
  else{
	   echo "<h1>Oops!There was some error.....Please Try Again!</h1>";
      }
     }
		insert_table($role);
	
}
?>
	    <br><br/><a href="Login.php" >LOGIN</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Home.php" >HOME</a>
	</center>
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>