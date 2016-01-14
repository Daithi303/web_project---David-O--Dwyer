<!DOCTYPE html >
<html lang="en" >
<head>

<script type = "text/javascript">
<!--

<!--This method ensures that no field on the form is left blank. It also ensures that the password entered is at least 6 characters long.-->
function validate_form(form)
{
	var valid = true;
	
	if((form.email.value == "" || form.email.value == null) || (form.name.value == "" || form.name.value == null) || (form.username.value == "" || form.username.value == null) || (form.password.value == "" || form.password.value == null))
	{alert("All fields have not been properly completed");
	valid = false;	
	}
	
	if(form.password.value.length< 6)
	{alert("Your password needs to be at least 6 characters long!");
	valid = false;}




return valid;	
}
-->
</script>


<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Registration</title>
</head>
<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Register for our Newsletter</h1>
</div>
<!-- This div is wrapped around the form for positioning -->
<div id = "register_sign_in">
<form action = "reg_confirmation.php"  method = "post" name = "form2" id = "form2" onsubmit = "return validate_form(this);">

<!-- A table is used here to evenly lay out the text and accompanying input tags. -->
<table id = "reg_table">
<tr>
<td>
Please enter your email:
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type = "email" name ="email" id = "email"></td>
</tr>


<tr>
<td>
Please enter your full name:
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<input type = "text" name = "name" id = "name">
</td>
</tr>
<tr>
<td>
Please enter a username:
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<input type = "text" name = "username" id = "username">
</td>
</tr>
<tr>
<td>
Please enter a password:
</td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td>
<input type = "password" name = "password" id = "password">
</td>
</tr>
<tr>
<td>
<input type = "submit" name = "register" id = "register_button" value = "register">
</td>
<td>
</td>
<td>
</td>
</tr>
</table>


</form>




</div>
</div>

<!--This php code calls in the contents of the 'footer.html' file to be included here.-->
<?php
include 'footer.html';
?>
</div>


</body>
</html>