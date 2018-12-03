<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  <table>
    <tr>
      <th>Klantennamen:</th>
      <th>Pakket:</th>
      <th>Prijs:</th>
    </tr>
    <tr>
      <td>Joshua Zoetebier</td>
      <td>asfd</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Yannick Beenen</td>
      <td>Brons - Hosting</td>
      <td>Mexico</td>
    </tr>
    <tr>
      <td>Jendro Knol</td>
      <td>Roland Mendel</td>
      <td>Austria</td>
    </tr>
    <tr>
      <td>Daan Gebraad</td>
      <td>Helen Bennett</td>
      <td>UK</td>
    </tr>
    <tr>
      <td>Michael Lahdo</td>
      <td>Zilver - Hosting</td>
      <td>Canada</td>
    </tr>
    <tr>
      <td>Magazzini Alimentari Riuniti</td>
      <td>Giovanni Rovelli</td>
      <td>Italy</td>
    </tr>
  </table>


	</body>
