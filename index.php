<!DOCTYPE html >
<html lang="en" >
<head>

<script type="text/javascript">
<!--
<!--The javascript here is taken from http://www.javascriptkit.com/script/script2/jsslide.shtml. It is used to create the 3 image slideshow and was modified and edited to fit the web page's requirements.-->
var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}


//-->
</script>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<title>O' Dwyer's House of Music - Home</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Welcome to our website</h1>
</div>
<!--This div hold the 3 picture slideshow.-->
<div id = "slideshow">
<img src="images/inside.jpg" id ="slide"  width= "860" height="260" alt = "3 page slideshow">
</div>

<script type="text/javascript" >
<!--

<!--The javascript here is taken from http://www.javascriptkit.com/script/script2/jsslide.shtml. It is used to create the 3 image slideshow and was modified and edited to fit the web page's requirements.-->
slideshowimages("images/inside.jpg","images/inside2.jpg","images/inside3.jpg")


var slideshowspeed=3000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>
<div id = "home_blurb">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor. Nulla facilisis nisl eget arcu molestie bibendum. Phasellus at nisl eleifend magna tempus mattis. Duis hendrerit consectetur fermentum. Integer non pulvinar lacus. Aliquam et condimentum dui, non auctor dolor.</p>
</div>
</div>

<!--This php code calls in the contents of the 'footer.html' file to be included here.-->
<?php
include 'footer.html';
?>
</div>
</body>
</html>
