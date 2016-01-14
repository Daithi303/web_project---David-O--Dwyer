<!DOCTYPE html >
<html lang="en" >
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Sitemap</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Sitemap</h1>
</div>
<p id = "sitemap_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor. Nulla facilisis nisl eget arcu molestie bibendum. Phasellus at nisl eleifend magna tempus mattis. Duis hendrerit consectetur fermentum. Integer non pulvinar lacus. Aliquam et condimentum dui, non auctor dolor.</p>

<!--Nested tables are used here to structure the links into a visually comprehensive sitemap. NOTE: the arrows which connect the various links are part of a jpeg image set as the table's background. -->
<table id = "sitemap_table">
<tr>
<th><a href = "index.php">Home</a></th>
<th><a href = "products.php">Products</a></th>
<th><a href = "contact_information.php">Contact Information</a></th>
<th><a href = "feedback.php">Feedback</a></th>
<th><a href = "sitemap.php">Sitemap</a></th>
<th><a href = "registration_sign_in.php">Register for our NewsLetter</a></th>
</tr>
<tr>
<td></td>
<td><table><tr><td><a href = "guitars.php">Guitars</a></td><td><a href = "drums.php">Drums</a></td><td>Keyboards</td><td>PA Equipment</td></tr><tr><td><a href = "inst_desc.php">Item Description</a></td><td><a href = "inst_desc.php">Item Description</a></td><td><a href = "inst_desc.php">Item Description</a></td><td><a href = "inst_desc.php">Item Description</a></td></tr></table></td>
<td></td>
<td><table><tr><td><a href = "feedback_response.php">Feedback Response</a></td></tr><tr><td></td></tr></table></td>
<td></td>
<td><table><tr><td><a href = "reg_confirmation.php">Registration Confirmation</a></td></tr><tr><td></td></tr></table></td>

</tr>
</table>
</div>

<!--This php code calls in the contents of the 'footer.html' file to be included here.-->
<?php
include 'footer.html';
?>
</div>
</body>
</html>
