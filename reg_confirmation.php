<!DOCTYPE html >
<html lang="en" >
<head>
<?php
/*This if statement tests whether the form has been posted from the registration page. If it has the data posted from the registration form is stored in local variables. Then a text file is opened and the variables are concatenated in a specific format and written to the text file.*/
if(isset($_POST['register']))
{
$_email = trim($_POST['email']);
$_name = trim($_POST['name']);
$_username = trim($_POST['username']);
$_password = trim($_POST['password']);

$ourFileName="register.txt";
$ourFileHandle=fopen($ourFileName ,'a') or die ("can't open file");
fwrite($ourFileHandle, "$_email,$_name,$_username,$_password;");
fclose($ourFileHandle);
}
/*Here the file is re-opened and the entire contents is read in then saved to a variable ($_string). That variable is then truncated and stored in an array ($_array1).This is performed by the explode method which separates the string when a semi-colon (;) is detected in the string. This separates one record from another as each record is written to the file with a semi-colon at the end.*/
$myfile = fopen("register.txt", "r") or die("Unable to open file!");
$_string = fread($myfile,filesize("register.txt"));
$_array1 = explode(';',$_string);
 
$_array2 = array(); 
 /*Each item (record) stored in the array is further truncated by the presence of a comma (,). This is done to isolate the individual pieces of information stored within each record. The individual pieces of information of all records are then stored in a two-dimensional array.*/
 for($x = 0;$x < count($_array1);$x++)
 {$_array2[] = explode(',',$_array1[$x]);}
 
 
 $_list = "";
 /*A string is then declared which then has specific items of data held within the two-dimensional array concatenated to it in a specific format. This is done by means of a for loop.*/
  for($x = 0;$x < count($_array1)-1;$x++)
{
$_list .= "Name: ".$_array2[$x] [0]."\n"."Username: ".$_array2[$x] [2].".\n\n";
}
 
?>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Registration/Sign in</title>
</head>
<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Confirmation of registration</h1>
</div>
<div id = "thank_you">
<span>Thank you for registering. Here is a list of all people currently registered with us.
</span>

<div id = "reg_list">
<!--Here the string created above is echoed out to screen.-->
<?php
echo nl2br($_list);
?>
</div>
</div>
</div>
<!--This php code calls in the contents of the 'footer.html' file to be included here.-->

<?php
include 'footer.html';
?>
</div>


</body>
</html>