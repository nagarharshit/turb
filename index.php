<html>

<head>
<title>user signin</title>
<style type="text/css">
	*{
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
}
</style>

</head>
<body>
	<div class="header">
	<h2> Home Page</h2>
	</div>
	
	<div class="content" style="opacity:0.8;text-align:center; width: 30%;margin: 0px auto;padding: 20px;border:1px solid #B0C4DE;background: white;border-radius: 0px 0px 10px 10px;">
							<p style="font-size: 30px; font-weight: bold;"> WELCOME<br/> <strong style=" color:purple; font-size: 30px;">ww<br/><br/></strong></p>
			<p><a href="login.php?logout='1'" style="color:red;background: #5F9EA0; padding: 20px;border-radius:20px;:hover:color:white;"> logout</a></p>
				</div>
