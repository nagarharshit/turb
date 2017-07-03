<html>
<head>

<title>user signin</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">*{
	margin:0px;
	padding:0px;
}
body
{
font-family: 'Titillium Web', sans-serif;
	font-size: 120%;
	//background: black;
	background-image:url(intro.jpg);
background-repeat:no-repeat;
background-size:110% 100%;
}
.header{
	width:30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;

}

form {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border:1px solid #B0C4DE;
	background-color:black;
	border-radius: 0px 0px 10px 10px;
	opacity:0.8;
	color:white;
}
.input-group 
{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display: block;
	text-align: left;
	margin: 3px;
color:white;

}
.input-group input
{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
}
.btn{
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border:none;
	border-radius: 5px;
}
.success {
	color: #3c763d;
	background: #dff0d8;
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}</style>
</head>
<body>
	<div class="header">
	<h2> Register</h2>
	</div>
	
	<form method="post" action="register.php">
	 		<div class="input-group">
		<label>username</label>
		<input type="text" name="username" placeholder="Enter username">
		</div>
		
		<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="Enter Email">
		</div>

		<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" placeholder="Enter Password" minlength="5">
		</div>

		<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2" placeholder="confirm password" minlength="5">
		</div>


		<div class="input-group">
		
		<button type="submit" name="register" class="btn"> Register </button>
		</div>
		<p>Already a member? <a style=" text-align: center "href="login.php">Log in</p>
	</form>
