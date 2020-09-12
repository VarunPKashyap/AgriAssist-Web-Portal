<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  AgriAssist/Login  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="images/logo.png" alt="AgriAssist Logo" />
		</div>

		<nav id="nav-bar">
			<ul>
				
				<li><a class="nav-link" href="#features"><i><b>Connecting farmers and consumers</b></i></a></li>
				
				<li><a class="nav-link" href="Home.php">Home</a></li>
				<li><a class="nav-link" href="SignUp.php">Sign Up</a></li>

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
	<section id="about">
	<div id="loginPg">
	<form action="LoginAuth.php" method="POST" onsubmit="return checkForNull()";>
     <center>
	         <h3><b>LOGIN</b></h3>
			 <table>
			  
			 <tr>
			 <td><b>LOGIN ID:</b></td>
			 <td><b><input type="number" name="usrnm" id="usrnm" placeholder="1-4 digits" value="" size="15""/><div id="div1"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>PASSWORD:</b></td>
			 <td><b><input type="password" type="number" pattern="[1-9]{1}[0-9]{3}" placeholder="1-4 digits" name="pswd" id='pswd' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>LOGIN AS:</b></td>
			 <td><b><select name="role" id="role"  value="">
                     <option>Farmer</option>
                     <option>Buyer</option>
                     </select><div id="div1"></div></b>
			 </td>
			 </tr>
			 </table>
			 <br><br>
             <input type="submit" value="SUBMIT" name="sbmt" id="btn"/><br>
			 <p><i>New User? Please  <b>SIGN UP </b></a> First</i></font></p>
			 
			
			</section>
    <br/>
	</form>
	</div>
	<script type="text/javascript">
			function checkForNull()
            {
                if (document.getElementById('usrnm').value==="" || document.getElementById('pswd').value===""||
		            document.getElementById('role').value==="" )
   
                {
                    alert ("Blank fields not allowed");
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
			        alert("Enter 4 didts as password");
					return false;        
				} 
				return true;        
            }

    </script>
	</section>
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +91-9886008626 </a></li>

				<li><a id ="footlinks"> Email - agriassist@bnmit.in</a></li>
			</ul>
			<span>AgriAssist Copyright 2019 </span>
		</footer>