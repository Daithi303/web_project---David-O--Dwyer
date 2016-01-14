<!DOCTYPE html >
<html lang="en" >
<head>
<script type = "text/javascript">
<!--
<!-- This method ensures that the data entered into the page's form is not equal to "" or to null. If any of the form's field are left blank an alertbox will print to the screen and the form will not be submitted.-->
function validate_form()
{
	var valid = true;
	
	if((form1.fName.value == "" ||form1.fName.value == null) || (form1.sName.value == "" || form1.sName.value == null) || (form1.age.value == "" || form1.age.value == null) || (form1.sAddress.value == "" || form1.sAddress.value == null) || (form1.tAddress.value == "" || form1.tAddress.value == null) || (form1.cAddress.value == "" || form1.cAddress.value == null) || (form1.fNumber.value == "" || form1.fNumber.value == null) || (form1.eAddress.value == "" || form1.eAddress.value == null) || (form1.gender[0].checked == false && form1.gender[1].checked == false) || (form1.enjoy[0].checked == false && form1.enjoy[1].checked == false))
	{
		alert("There are required fields missing information!");
		valid = false;
	}
	
	return valid;
}
-->
</script>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Feedback</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Feedback</h1>
</div>

<!-- This div is wrapped around the form for positioning -->
<div id = "form">

<form action = "feedback_response.php" method = "post" name = "form1" id = "form1" onsubmit = "return validate_form(this);">

<p id = "feedback_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor. Nulla facilisis nisl eget arcu molestie bibendum. Phasellus at nisl eleifend magna tempus mattis. Duis hendrerit consectetur fermentum. Integer non pulvinar lacus. Aliquam et condimentum dui, non auctor dolor.</p>

<!-- A table is used here to evenly lay out the text and accompanying input tags. -->
<table id = "outer_table">
<tr>
<td>Your First Name&nbsp;&nbsp;</td><td><input type = "text" name = "fName" id = "fName" placeholder = "Enter your first name"></td>
<td class="table_separator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Your Age&nbsp;&nbsp;</td><td><input type = "text" name = "age" id = "age" placeholder = "Enter your age"></td>
</tr>

<tr>
<td>Your Last Name&nbsp;&nbsp;</td><td><input type = "text" name = "sName" id = "sName" placeholder = "Enter your last name"></td>
<td class="table_separator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Gender&nbsp;&nbsp;</td><td><table id = "inner_table"><tr><td><input type = "radio" name = "gender" value = "male" checked>&nbsp;&nbsp;Male</td>
<td><input type = "radio" name = "gender" value = "female">&nbsp;&nbsp;Female</td></tr></table></td>
</tr>



<tr>
<td>Your Street Address&nbsp;&nbsp;</td><td><input type = "text" name = "sAddress" id = "sAddress" placeholder = "Enter your street address"></td>
<td class="table_separator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Your Email Address&nbsp;&nbsp;</td><td>
<input type = "email" name = "eAddress" id = "eAddress" placeholder = "Enter your email address">
</td>

<tr>
<td>Your Town Address&nbsp;&nbsp;</td><td><input type = "text" name = "tAddress" id = "tAddress" placeholder = "Enter your town address"></td>
<td class="table_separator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Your Phone Number&nbsp;&nbsp;</td><td><input type = "text" name = "fNumber" id = "fNumber" placeholder = "Enter your phone number"></td>
</tr>

<tr>
<td>Your City Address&nbsp;&nbsp;</td><td><input type = "text" name = "cAddress" id = "cAddress" placeholder = "Enter your last name"></td>
<td class="table_separator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>Did You Enjoy Our Website?&nbsp;&nbsp;</td><td><table class = "inner_table"><tr><td><input type = "radio" name = "enjoy" value = "yes" checked>&nbsp;&nbsp;Yes</td>
<td><input type = "radio" name = "enjoy" value = "no">&nbsp;&nbsp;No</td></tr></table></td>
</tr>


<tr>
<td>Any Other Comments&nbsp;&nbsp;
</td>
<td colspan="4">
<textarea name = "comments" rows = "4" cols = "80">
</textarea>
</td>
</tr>
<tr><td><input type = "submit" name = "submit_button" id = "submit_button" value = "submit feedback"></td><td></td><td></td><td></td><td></td></tr>

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
