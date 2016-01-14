<!DOCTYPE html >
<html lang="en" >
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Feedback Response</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<!--The content area of this page combines regular html with php which echoes the different pieces of data posted to this page by the form on the feedback page. The result is a report displayed back to the viewer of what they have just entered in the form on the feedback page.-->
<div id = "content">
<div class = "content_heading">
<h1>Thank you <?php
echo $_POST['fName'];
?> for your feedback</h1>
</div>
<div id = "feedback_report">
<p>Your name is <?php
$_name = $_POST['fName']." ".$_POST['sName'];
echo $_name;

?>.</p>
<p>
Your address is:

<?php echo $_POST['sAddress'];?>
,
<?php echo $_POST['tAddress'];?>
,
<?php echo $_POST['cAddress'];?>
.</p>
<p>

<!--An if statement is used here to determine the appropriate string to echo, based on the value of a specific piece of information posted.-->
You are <?php if($_POST['gender'] == "male"){echo "male";}
else
{echo "female";}
?>.
</p>
<p>
You are <?php echo $_POST['age'];?>
 years old.</p>
 <p>
Your phone number is <?php echo $_POST['fNumber'];?>
.</p>
<p>
Your email address is <?php echo $_POST['eAddress'];?>
.</p>
<p>
<p>

<!--An if statement is used here to determine the appropriate string to echo, based on the value of a specific piece of information posted.-->
You <?php 

if($_POST['enjoy'] == "yes")
{echo "enjoyed";}

else
{echo "did not enjoy";}



?>
 our website.</p>
<p>
Comments:<br>

<!--An if statement is used here to determine the appropriate string to echo, based on the value of a specific piece of information posted.-->
<?php 

if($_POST['comments'] == "" || $_POST['comments'] == null)
{echo "No comments have been entered.";}
else
{echo $_POST['comments'];}?>
</p>

</div>
</div>
<!--This php code calls in the contents of the 'footer.html' file to be included here.-->

<?php
include 'footer.html';
?>
</div>
</body>
</html>
