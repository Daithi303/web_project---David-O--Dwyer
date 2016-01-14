<!DOCTYPE html >
<html lang="en" >
<head>
<script type = "text/javascript">
<!--

<!--This method uses a for loop to change the background colour and opacity of four divs which act as links to the more specific products pages. It is called by one of the four divs on mouse over and its function is to highlight the div which is being hovered over by making the other divs slightly transparent and of different colour.-->

function changeColour(x)
{   var a = ["guitars","drums","keyboards","pa_equipment"];
	var b = ["#839aba","#54729a","#20406b","#0c284f"];
		for(i = 0;i < a.length;i++)
		{
			if(x > 3)
		{x = 0;}
		document.getElementById(a[x]).style.backgroundColor = b[i];
		if(i == 0)
		document.getElementById(a[x]).style.opacity = 1;
		else
		{document.getElementById(a[x]).style.opacity = .3;}
		x++;}	
	
}

<!--This method then returns the opacity and colours of each div to their original state. It is called when the cursor is removed from the div.-->

function changeBack()
{	var a = ["guitars","drums","keyboards","pa_equipment"];
	for(i = 0; i<a.length;++i)
	{
	document.getElementById(a[i]).style.opacity = 1;
	document.getElementById(a[i]).style.backgroundColor = "#355580";	
	}
	}
-->
</script>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Products</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->

<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Featured Products</h1>
</div>
<div id = "product_blurb">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor. Nulla facilisis nisl eget arcu molestie bibendum. Phasellus at nisl eleifend magna tempus mattis. Duis hendrerit consectetur fermentum. Integer non pulvinar lacus. Aliquam et condimentum dui, non auctor dolor.</p>
</div>
<!--This div acts as a wrapper for the two divs which act as links to the guitars page and the drums page. The divs are comprised of a heading, an image, and a brief description.-->
<div class = "product_wrapper">

<!--Guitars page link-->
<a href = "guitars.php">
<div class = "products" id = "guitars" onMouseOver="changeColour(0)" onMouseOut="changeBack()">
<h2 class = "products_headings">Guitars</h2><img src="images/guitars.jpg" width="200" height="140" alt="guitar image"/>
<p class = "products_desc">Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
</div>
</a>

<!--Drums page link-->
<a href = "drums.php"><div class = "products" id = "drums" onMouseOver="changeColour(1)" onMouseOut="changeBack()">
<h2 class = "products_headings" >Drums</h2><img src="images/drums.jpg" width="200" height="140" alt="drums image"/>
<p class = "products_desc">Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
</div>
</a>

</div>

<!--This div acts as a wrapper for the two divs which act as links to the keyboards page and the pa equipment page. The divs are comprised of a heading, an image, and a brief description. NOTE: the following divs are not active links because there are no specific products pages written for those links.-->

<div class = "product_wrapper">
<!--Keyboards page link (not an active link)-->
<div class = "products" id = "keyboards" onMouseOver="changeColour(2)" onMouseOut="changeBack()">
<h2 class = "products_headings">Keyboards</h2><img src="images/keyboards.jpg" width="200" height="140" alt="keyboards image"/>
<p class = "products_desc">Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p></div>

<!--PA Equipment page link (not an active link)-->
<div class = "products" id = "pa_equipment" onMouseOver="changeColour(3)" onMouseOut="changeBack()">
<h2 class = "products_headings">PA Equipment</h2><img src="images/pa_equipment.jpg" width="200" height="140" alt="PA Equipment image"/>
<p class = "products_desc">Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
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
