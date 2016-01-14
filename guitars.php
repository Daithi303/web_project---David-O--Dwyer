<!DOCTYPE html >
<html lang="en" >
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Products - Guitars</title>

<script type = "text/javascript">
<!--

<!--This method is a modification of the method in the products page used to alter the appearance of certain divs.-->
function changeColour(x)
{   var a = ["item_A","item_B","item_C","item_D","item_E","item_F","item_G","item_H","item_I"];
	var b = ["#839aba","#54729a","#20406b","#0c284f","#839aba","#54729a","#20406b","#0c284f","#839aba"];
		for(i = 0;i < a.length;i++)
		{
			if(x > 8)
		{x = 0;}
		document.getElementById(a[x]).style.backgroundColor = b[i];
		if(i == 0)
		document.getElementById(a[x]).style.opacity = 1;
		else
		{document.getElementById(a[x]).style.opacity = .3;}
		x++;}	
	
}

<!--This again is a modification of the method in the products page which returns the appearance of a group of divs to their original appearance.-->
function changeBack()
{	
	var a = ["item_A","item_B","item_C","item_D","item_E","item_F","item_G","item_H","item_I"];
	for(i = 0; i<a.length;++i)
	{
	document.getElementById(a[i]).style.opacity = 1;
	document.getElementById(a[i]).style.backgroundColor = "#355580";	
	}
	}
-->
</script>

</head>

<body>
<div id = "container">
<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">

<!--This div holds a list of all the instruments held available on the guitars page. Each item listed is a link to its descriptive div held in the products content section of the page.-->
<div class = "sidebar">
<table>
<tr>
<td>
<ins>List of Items</ins>
</td>
</tr>
<tr>
<td>
<ul>
<li>
<a href = "#item_A" onClick="changeColour(0)">Item A</a>
</li>
<li>
<a href = "#item_B" onClick="changeColour(1)">Item B</a>
</li>
<li>
<a href = "#item_C" onClick="changeColour(2)">Item C</a>
</li>
<li>
<a href = "#item_D" onClick="changeColour(3)">Item D</a>
</li>
<li>
<a href = "#item_E" onClick="changeColour(4)">Item E</a>
</li>
<li>
<a href = "#item_F" onClick="changeColour(5)">Item F</a>
</li>
<li>
<a href = "#item_G" onClick="changeColour(6)">Item G</a>
</li>
<li>
<a href = "#item_H" onClick="changeColour(7)">Item H</a>
</li>
<li>
<a href = "#item_I" onClick="changeColour(8)">Item I</a>
</li>
</ul>
</td>
</tr>
</table>
</div>
<div class="products_content">
<div class="content_heading">
<h1 class = "prod_heading">Guitars</h1>
</div>

<!--The following nested divs are the content area on the page which displays each item in a graphical manner. Each item has a rectangular area which contains an image, a title and a price. Each item component also contains a form with an invisible button which, when clicked, posts a value to an item description page which,in turn, uses that value to customise its content in relation to that item component.-->
<div id = "content_wrapper">
<div class="items_wrapper">

<!--item component-->
<div class="items" id="item_C" onmouseover="changeColour(2)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="3">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item C</span><span>€399.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_B" onmouseover="changeColour(1)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="2">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item B</span><span>€299.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_A" onmouseover="changeColour(0)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="1">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item A</span><span>€199.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_F" onmouseover="changeColour(5)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="6">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item F</span><span>€699.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_E" onmouseover="changeColour(4)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="5">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item E</span><span>€599.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_D" onmouseover="changeColour(3)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="4">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item D</span>
<span>€499.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_I" onmouseover="changeColour(8)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="9">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item I</span><span>€999.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_H" onmouseover="changeColour(7)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="8">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item H</span><span>€899.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_G" onmouseover="changeColour(6)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="7">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Guitar image"><span>Item G</span>
<span>€799.99</span>
</button>
</form>
</div>
</div>
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
