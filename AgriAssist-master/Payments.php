<html>
<Head>
    <link rel="stylesheet" type="text/css" href="Home1.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<Title>  AgriAssist/Payments  </Title>
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
	<h1><center>Payment Confirmation</center></h1>
	<form action="Payments_2.php" method="POST">
     <center>
			 
			 <h3><font color="navy"><b>Please confirm your password to proceed: </b></font></h3>
			 
			 
			 <h3><b><input type="password" type="number"  min='1' max='9999' pattern="[1-9]{1}[0-9]{3}" placeholder="1-4 digits" required="required" name="pswd" id='pswd' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b>
			 <br><input id="btn"type="submit" value="SUBMIT" name="sbmt"/><br>
    <br/>
	</form>
	<script>
	function checkForPswd()
            {
           
			 var regex = /^[1-9]{1}[0-9]{3}$/;
				var value = regex.test(document.getElementById("pswd").value);
				if (value===false) 
				{
			        alert("Enter 4 didts as password");
					return false;        
				} 
				return true;        
            }
	</script>
</Body>
</html>
<footer id="f">
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>