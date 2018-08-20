<html>
<title>PHP Mailer</title>
<head>
<script>
	function addSubOptions()
		{
			var n = document.getElementById("rn").value;
			var c3=document.getElementById("receivers");
			c3.innerHTML="";
			for(var j=1;j<=n;j++)
			{
				c3.innerHTML = c3.innerHTML + '<tr><input type="text" name="r'+j+'" id="r'+j+ '" placeholder="receiver '+j+'\'s E-mail"></tr><br><br>';	
			}
		}
</script>
<style>
#receivers{
	padding-top: 0em;
    padding-bottom: 0em;
}
#form{
	display:block;
	width:80%;
	margin:0 auto;
}
fieldset{
	background-color:#c4dafc;
	border: 2px solid black;
    border-radius: 25px;
	text-align:center;
}

td {
    padding-top: 1em;
    padding-bottom: 1em;
}
#table{
	margin:0 auto;
}
#submit{
	margin-left:100px;
}
</style>
</head>
<body>
<form id="form" action="mailer.php" method="POST">
<fieldset>
<legend style="font-size:30px;">PHP Mailer</legend>
<table id="table">
	<tr>
		<td>Sender's E-mail:</td>
		<td><input type="email" name="se" id="se" placeholder="Sender's E-mail"></td>
	</tr>
	<tr>
		<td>Sender's password:</td>
		<td><input type="password" name="sp" id="sp" placeholder="Sender's Password"></td>
	</tr>
	<tr>
		<td>Subject:</td>
		<td><input type="text" name="sub" id="sub" placeholder="Subject"></td>
	</tr>
	<tr>
		<td>Attachment:</td>
		<td><input type="file" name="attachment" id="attachment"></td>
	</tr>
	<tr>
		<td>Content:</td>
		<td><textarea name="content" id="content"></textarea></td>
	</tr>
	<tr>
		<td>Number of Receivers:</td>
		<td><input type="number" name="rn" id="rn" onkeyup="addSubOptions()" onchange="addSubOptions()" min="1" max="20"></td>
	</tr>
	<tr><td id="receivers"/></tr>
	<tr>
		<td>Cc:</td>
		<td><input type="email" name="cc" id="cc" placeholder="Cc E-mail"></td>
	</tr>
	<tr>
		<td>Bcc:</td>
		<td><input type="email" name="bcc" id="bcc" placeholder="Bcc E-mail"></td>
	</tr>
	<tr>
		<td><input type="Submit" name="submit" id="submit" value="Submit"></td>
	</tr>
</table>
</fieldset>
</form>
</body>
</html>