<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/Home  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				
				<li><a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a></li>
				
				<li><a class="nav-link" href="Home.php">Home</a></li>
				<li><a class="nav-link" href="Login.php">Login</a></li>

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
	padding-top: 290px;
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
<body>
<center>
<?php
$con=mysqli_connect( "localhost" ,  "root" , "" , "webtech" );
//phpinfo();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['sbmt']))
{
	$name=$_POST['usrnm'];
	$name=(int)$name;
	//session_destroy();
	session_start();
	$_SESSION['user_id'] = $name;
	$pswd=$_POST['pswd'];
	//echo $pswd=(int)$pswd;
	$role=$_POST['role'];
	$result = mysqli_query($con,"SELECT {$role}_pswd,{$role}_wallet FROM {$role} WHERE {$role}_id={$name}");
	$row = mysqli_fetch_assoc($result);
	//echo $row[''.$role.'_pswd'];
	if ($row[''.$role.'_pswd'] == $pswd && $role=="Farmer")
	//	echo 'Login Successful!';
	header('location: FarmerDashboard.php');
	else if ($row[''.$role.'_pswd'] == $pswd && $role=="Buyer")
	{   $_SESSION['cart']=array_fill(0, 100, 0);
		//$_SESSION['cart_stq_check'] = 0;
		$_SESSION['buyer_pswd'] = $pswd;
		$_SESSION['buyer_wallet'] = $row[''.$role.'_wallet'];
		header('location: BuyerDashboard.php');
	}
	else
	{
		
		
		
	}
}
?>
<h1> LOGIN &nbsp; FAILED</h1>
 <button id="sub" onclick="window.location.href = 'Login.php';">Try Again</button>
</center>
</body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>