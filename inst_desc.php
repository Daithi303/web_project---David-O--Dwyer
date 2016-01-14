<!DOCTYPE html >
<html lang="en" >
<head>



<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Item description</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<!--This entire php code first declares two arrays, one holding the different item descriptions which correspond to each product item on the guitars and drums pages. And the other array holding the different titles and priced whaich again relate to each product item on the guitars and drums pages. Then two variables are initialised. Depending on the value posted from the form to this page both initialised variables will be assigned a specific value from each array. The posted value is tested within a if statement inside a for loop.-->
<?php
$_descAr = array("This is a description of item A.", "This is a description of item B.","This is a description of item C.","This is a description of item D.","This is a description of item E.","This is a description of item F.","This is a description of item G.","This is a description of item H.","This is a description of item I.","This is a description of item J.", "This is a description of item K.","This is a description of item L.","This is a description of item M.","This is a description of item N.","This is a description of item O.","This is a description of item P.","This is a description of item Q. yada yada yada!","This is a description of item R.");

$_titlAr = array("Item A : €199.99", "Item B : €299.99","Item C : €399.99","Item D : €499.99","Item E : €599.99","Item F : €699.99","Item G : €799.99","Item H : €899.99","Item I : €999.99","Item J : €1099.99", "Item K : €1199.99","Item L : €1299.99","Item M : €1399.99","Item N : €1499.99","Item O : €1599.99","Item P : €1699.99","Item Q : €1799.99","Item R : €1899.99");

$_desc = "";
$_titl = "";

for ($x = 0; $x < count($_titlAr); $x++)
{
if($_POST['form_a'] == ($x+1))
 {
	 $_titl = $_titlAr[$x];
	 $_desc = $_descAr[$x];
 }
}

 
?>

<div class = "content_heading">
<h1>Item Description</h1>
</div>
<!--The resulting strings are the echoed out here.-->
<div id = "item_description">
<h2><?php echo $_titl;?></h2>
<p>
<?php
echo $_desc;
?>
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
