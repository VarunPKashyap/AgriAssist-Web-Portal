<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/AddCrop  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="FarmerDashboard.php">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>
<style>
#btn {
	width: 100px;

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
  transition: background-color 1s;
}
h2{
	padding-bottom:8px;
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
	padding-top:100px;
	align:center;
	padding-bottom:2px;
	}
	a:hover{color:white;}
	a{color:green;}
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
	width:30%;
	text-align:center;
padding:15px;
}
tr{
	
	width:20%;
	
	text-align:center;
padding:10px;
}

td{
	
	width:20%;
	
	text-align:center;
padding:10px;
}
</style>
<Body>

	<h1><center>Welcome to AgriAssist</center></h1>
	
	<form action="AddCrop_2.php" method="POST">
     <center>
	 <h2><b>Enter details for the new crop:</b></h2> 
			 <table>
			 
			 
			 <tr>
			 <td><b>Crop Name:</b></td>
			 <td><b><input type="text"  placeholder="" required="required" name="prod_name" id='prod_name' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>Variety:</b></td>
			 <td><b><input  type="text"  placeholder="" required="required" name="variety" id='variety' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr> 
			 
			 <tr>
			 <td><b>Quantity(in kgs):</b></td>
			 <td><b><input type="number"  placeholder="" min='1' max='1000' required="required" name="stk_qty" id='stk_qty' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>Rate(per kg):</b></td>
			 <td><b><input  type="number"  placeholder="" min='1' required="required" name="rate" id='rate' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>Category:</b></td>
			 <td><b><select name="category" required="required"  value="">
                     <option>Food</option>
                     <option>Cash</option>
					 <option>Plantation</option>
					 <option>Horticulture</option>
                     </select><div id="div1"></div></b>
			 </td>
			 </tr>
			 </table><br>
             <input type="submit" value="SUBMIT" name="sbmt" id="btn"/><br>
			
    <br/>
	</form>
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>