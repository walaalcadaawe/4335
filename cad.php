<style type="text/css">
.form{
	border:5px ;
	margin-left:35%;
	margin-right:35%;
	margin-top: 10%%;
	padding:5%;
	background:grey;
	border-radius: 10px;
	
	
}
.p{
	background:green;
	margin-left:30%;
	margin-right:30%;
	height:10%;
	font-size:40;
	text-align:center;
	color:white;
	border-radius:5px;
	
}
.txt{
	margin-right: 5%;
	margin-left: 5%;
	width:200px
	
}
.btn{
	margin-top: 10%;
	margin-left: 15%;
	padding: 20px;

	

	background-color:1C9050;
	
}
</style>
<p class="p">Registration Form</p>
<form action="login.php" method="post" class="form">
<input type="text" name="Fname" class="txt" placeholder="full name"><br><br>
<input type="password" name="password" class="txt" placeholder="password">  <br><br>
<input type="submit" class="btn" value="send">
<input type="reset" class="btn" value="clear">

</form>