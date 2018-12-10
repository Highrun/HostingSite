<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style>
.mySlides {display:none;}
</style>
<body>

  <!--Begin menu -->	
 <?php include "include/header.php"; ?>
  <!--Einde menu -->
  
  
  <p class="begin"> 
  
					
<h2 class="w3-center">Onze slideshow</h2>
<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
<div class="centerslide">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/bedrijf.jpg" style="width:500px">
  <img class="mySlides" src="images/cloudbed.jpg" style="width:400px">
  <img class="mySlides" src="images/cloud.png" style="width:400px">
  <img class="mySlides" src="img_forest.jpg" style="width:400px">
</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>



</html>