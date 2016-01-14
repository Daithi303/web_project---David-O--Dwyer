<!DOCTYPE html >
<html lang="en" >
<head>
<meta charset="UTF-8" />
<link rel = "stylesheet" href = "stylesheet.css" type = "text/css" />


<!--This javascript for embedding a google map was taken from the Google Developer website: https://developers.google.com/maps/tutorials/fundamentals/adding-a-google-map-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type = "text/javascript">
	<!--
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(52.2593197, -7.110070299999961),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
-->
</script>

<title>O' Dwyer's House of Music - Products - Contact Information</title>
</head>

<body>
<div id = "container">

<!--This php code calls in the contents of the 'header.html' file to be included here.-->
<?php
include 'header.html';
?>

<div id = "content">
<div class = "content_heading">
<h1>Contact Information</h1>
</div>

<!--This div contains the google map.-->
<div id = "map">
</div>

<!--This div contains the contact details of the business, floated right of the google map.-->
<div id = "contact_details"> O' Dwyer's House of Music<br>
22 Somewhere Street,<br>
Waterford City,<br>
Ireland. <br>

Tel: +353 (0)51 123 4567<br>
Fax: +353 (0)51 123 4567<br>
Email: <a href = "mailto:someone@somewhere.com">info@odwyersmusic.com</a>
<br>
<br>
Opening hours: Mon-Fri - 9:00am to 5:00pm, Sat - 9:00 to 1:30pm.
</div>

<!--This div contains the directions the business' location-->
<div id ="directions">
<h2>Entering the city from the North</h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor.
<h2>Entering the city from the South</h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu eros risus. Nulla in commodo dolor. Proin tincidunt accumsan massa. Sed lacinia augue leo, nec egestas quam sagittis eget. Curabitur euismod a neque id euismod. Suspendisse in urna efficitur, facilisis orci commodo, scelerisque tortor.
</div>
</div>

<!--This php code calls in the contents of the 'footer.html' file to be included here.-->
<?php
include 'footer.html';
?>
</div>
</body>
</html>
