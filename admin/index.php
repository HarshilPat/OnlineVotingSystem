<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head><body bgcolor="tan">
<center><a href ="https://www.elections.sk.ca/"><img src = "images/logo.png" alt="site logo"></a></center><br>     
<center><b><font color = "brown" size="6">Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Administrator Login </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#99b898">
<tr>
<form name="form1" method="post" action="checklogin.php" onsubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td width="78"><font color = "#2a363b">Username/Email</font></td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td><font color = "#2a363b">Password</font></td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
</center>
</div>
<div id="footer">
<div class="bottom_addr">-----&copy; 2021 Simple PHP Voting System. Made By Harshil & Aayush-----</div>
</div>
</div>
</body></html>