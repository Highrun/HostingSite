<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
</head>

<body>


<?php include "include/header.php"; ?>

  <script>
  function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
  </script>

<!-- Contenedor -->
    <div class="pricing-wrapper clearfix">

        <div class="pricing-table">
            <h3 class="pricing-title">Brons</h3>
            <div class="price">&#8364;5,95<sup>/ maand</sup></div>
            <ul class="table-list">
                <li>10 GB <span>Opslag</span></li>
                <li>5 <span>Domeinen</span></li>
                <li>100 GB <span>Dataverkeer</span></li>
                <li>512 GB <span>RAM</span></li>
                <li>1 <span>Core</span></li>
                <li>Backup mogelijkheid <span class="unlimited">5 GB</span></li>
                <li>Emailadressen <span class="unlimited">10</span></li>
                <li>CPanel <span>als administratiepaneel</span></li>
            </ul>
            <!-- Contratar / Bestellen -->
            <div class="table-buy">
                <p>&#8364;5,95<sup>/ maand</sup></p>
                <a href="#" class="pricing-action">Bestellen</a>
            </div>
        </div>

        <div class="pricing-table recommended">
            <h3 class="pricing-title">Zilver</h3>
             <div class="price">&#8364;7,95<sup>/ maand</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li>20 GB <span>Opslag</span></li>
                <li>10 <span>Domeinen</span></li>
                <li>200 GB <span>Dataverkeer</span></li>
                <li>1024 MB <span>RAM</span></li>
                <li>2 <span>Core</span></li>
                <li>Backup mogelijkheid <span class="unlimited">5 GB</span></li>
                <li>Emailadressen <span class="unlimited">20</span></li>
                <li>CPanel <span>als administratiepaneel</span></li>
            </ul>
            <!-- Contratar / Bestellen -->
            <div class="table-buy">
                <p>&#8364;7,95<sup>/ maand</sup></p>
                <a href="#" class="pricing-action">Bestellen</a>
            </div>
        </div>

        <div class="pricing-table">
            <h3 class="pricing-title-green">Goud</h3>
            <div class="price">&#8364;10,95<sup>/ maand</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li>50 GB <span>Opslag</span></li>
                <li>15 <span>Domeinen</span></li>
                <li>Onbeperkt <span>Dataverkeer</span></li>
                <li>2048 MB <span>RAM</span></li>
                <li>4 <span>Core</span></li>
                <li>Backup mogelijkheid <span class="unlimited">5 GB</span></li>
                <li>Emailadressen <span class="unlimited">onbeperkt</span></li>
                <li>CPanel <span>als administratiepaneel</span></li>
            </ul>
            <!-- Contratar / Bestellen -->
            <div class="table-buy">
                <p>&#8364;10,95<sup>/ maand</sup></p>
                <a href="#" class="pricing-action">Bestellen</a>
            </div>
        </div>
    </div>
    <select name="" id="list">
  		<option value="test1">Per maand</option>
  		<option value="test2">Per jaar</option>
  		<option value="test3">Per 5 jaar</option>
  	</select>
  	<button id="calculate" onclick="calculate()">Berekenen</button>
  	<div id="result">Hier komt het resultaat</div>
  	<div id="discount">Hier komt de korting</div>

	 <Br> <Br>
	 <center> <h1> Specificaties </h1> </center>
	 <center> <p class="specs"> - Uiterst snelle HDD </p>
   <p class="specs"> - Uptime van 99,9% </p>
   <p class="specs"> - Node 3310 </p> <br></center>



	</body>

<?php include ("footer.php"); ?>
