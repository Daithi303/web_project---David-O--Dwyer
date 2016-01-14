<!DOCTYPE html >
<html lang="en" >
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Products - Drums</title>

<script type = "text/javascript">
<!--

<!--This method is a modification of the method in the products page used to alter the appearance of certain divs.-->
function changeColour(x)
{   var a = ["item_J","item_K","item_L","item_M","item_N","item_O","item_P","item_Q","item_R"];
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
	var a = ["item_J","item_K","item_L","item_M","item_N","item_O","item_P","item_Q","item_R"];
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
<ins>List of items</ins>
</td>
</tr>
<tr>
<td>
<ul>
<li>
<a href = "#item_J" onClick="changeColour(0)">Item J</a>
</li>
<li>
<a href = "#item_K" onClick="changeColour(1)">Item K</a>
</li>
<li>
<a href = "#item_L" onClick="changeColour(2)">Item L</a>
</li>
<li>
<a href = "#item_M" onClick="changeColour(3)">Item M</a>
</li>
<li>
<a href = "#item_N" onClick="changeColour(4)">Item N</a>
</li>
<li>
<a href = "#item_O" onClick="changeColour(5)">Item O</a>
</li>
<li>
<a href = "#item_P" onClick="changeColour(6)">Item P</a>
</li>
<li>
<a href = "#item_Q" onClick="changeColour(7)">Item Q</a>
</li>
<li>
<a href = "#item_R" onClick="changeColour(8)">Item R</a>
</li>
</ul>
</td>
</tr>
</table>
</div>
<div class="products_content">
<div class="content_heading">
<h1 class = "prod_heading">Drums</h1>
</div>

<!--The following nested divs are the content area on the page which displays each item in a graphical manner. Each item has a rectangular area which contains an image, a title and a price. Each item component also contains a form with an invisible button which, when clicked, posts a value to an item description page which,in turn, uses that value to customise its content in relation to that item component.-->
<div id = "content_wrapper">
<div class="items_wrapper">

<!--item component-->
<div class="items" id="item_L" onmouseover="changeColour(2)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="12">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item L</span><span>€1299.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_K" onmouseover="changeColour(1)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="11">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item K</span><span>€1199.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_J" onmouseover="changeColour(0)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="10">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item J</span><span>€1099.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_O" onmouseover="changeColour(5)" onmouseout="changeBack()" >
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="15">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item O</span><span>€1599.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_N" onmouseover="changeColour(4)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="14">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item N</span><span>€1499.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_M" onmouseover="changeColour(3)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="13">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item M</span>
<span>€1399.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_R" onmouseover="changeColour(8)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="18">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item R</span><span>€1899.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_Q" onmouseover="changeColour(7)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="17">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item Q</span><span>€1799.99</span>
</button>
</form>
</div>

<!--item component-->
<div class="items" id="item_P" onmouseover="changeColour(6)" onmouseout="changeBack()">
<form class="form_button" method="post" action="inst_desc.php" target="_blank">
<input type="hidden" name="form_a" value="16">
<button type="submit">
<img src="images/image_here.jpg" width="120" height="120" alt="Drums image"><span>Item P</span>
<span>€1699.99</span>
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
