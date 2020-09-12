<html>
    <head>
		<link rel="stylesheet" type="text/css" href="Home1.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AgriAssist/SignUp</title>
		<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png"" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				
				<li><a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a></li>
				
				<li><a class="nav-link" href="Home.php">Home</a></li>
				<li><a class="nav-link" href="Login.php">Login</a></li>

			</ul>
		</nav>
	</header>
       
    </head>
	<style>
	@import "https://fonts.googleapis.com/css?family=Lato:400,700";
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

background-color: sugarcane;
}
table{
background-color:sugarcane;
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
input{
color:black;
width:100px;
border-radius:10%;
background-color:yellowgreen;
}
#btn:hover {
  background-color: yellowgreen;
  transition: background-color 1s;
}
#pswd{

background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
#name{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
#phone{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
#address{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
#role{
background-color:whitesmoke;
border-radius: 15px 50px;
border:2px solid green;
}	
h2{
	color:green;
	border = 2.5px solid black;
}
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
table{
	tablsize:200px;
}
</style>
    <body>
	<section id="about">
	<div id="loginPg">
        <form action="SignUpToLogin.php" method="POST" onsubmit="return checkForNull();">
     <center>
	 <h2 ><b>SIGN UP</b></h2>
	 <table> 
			 
			 <tr>
			 <td><b>NAME:</b></td>
			 <td><b><input type="text" name="name" id="name"  placeholder="max 25 characters" value="" size="15" onblur="FormValidation1()"/><div id="div1"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>PASSWORD:</b></td>
			 <td><b><input type="password" name="pswd" pattern="[1-9]{1}[0-9]{3}"  placeholder="1-4 digits" id="pswd" onblur="FormValidation2()" value="" size="15" /><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>PHONE:</b></td>
			 <td><b><input type="tel" name="phone" pattern="[1-9]{1}[0-9]{9}" placeholder="10 digits" id="phone" onblur="validate(this)" value="" size="15"/></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>ADDRESS:</b></td>
			 <td><b><input type="text" name="address" placeholder="max 40 characters" id="address" onblur="FormValidation3()" value="" size="15"/><div id="div3"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>ROLE:</b></td>
			 <td><b><select name="role" id ="role" value="Farmer/Buyer">
                     <option>Farmer</option>
                     <option>Buyer</option>
                     </select><div id="div1"></div></b>
			 </td>
			 </tr>			 
	 </table>
			<br><br>
			 <input type="submit" value="SUBMIT" name="sbmt" id="btn"/>
			 <input type="reset"  value="RESET" id ="btn"/>
			 
			 <?php
	 
              ?>
    </center>
	
     </form>
	
	</div>
	</section>
	<script type="text/javascript">
			function checkForNull()
            {
                if (document.getElementById('name').value==="" || document.getElementById('pswd').value===""||
				document.getElementById('phone').value===""|| document.getElementById('address').value===""
				|| document.getElementById('role').value==="" )
   
                {
                    alert ("Blank fields not allowed");
					return false;
                }
                return true;
				
            }
			function checkForPhone()
            {
           
			 var regex = /^[1-9]{1}[0-9]{9}$/;
				var value = regex.test(document.getElementById("phone").value);
				if (value===false) 
				{
			        alert("Enter 10 digits for phone number");
					return false;        
				} 
				return true;        
            }
			function checkForPswd()
            {
           
			 var regex = /^[1-9]{1}[0-9]{3}$/;
				var value = regex.test(document.getElementById("pswd").value);
				if (value===false) 
				{
			        alert("Enter 4 digits as password");
					return false;        
				} 
				return true;        
            }

    </script>
	</body>
	
</html>

<footer id="f">
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>