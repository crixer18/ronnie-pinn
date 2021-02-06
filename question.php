<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rabbit 1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="rabbit.css" />
  </head>
  <body>

<?php
include 'functions.php';
get_navbar() ?>

<div class="rabbit-page">

<div class="rabbit-container">

    <div class="rabbit-page-header">
      <img src="imgs/Rabbit_ico.svg" class="rabbit-icon">
      <h1 class="rabbit-title">Consigliami un articolo</h1>
    </div>

    <div class="rabbit-form">
    <form name="nform" action="answer1.php" method="get">
      <p class="lead">Ecco un posto bellissimo:</p>
      <select name="q1" id="place-select" ><!--required-->
        <option value=""></option>
        <option value="netflix">Netflix</option>
        <option value="facebook">Facebook</option>
        <option value="biblioteca">La biblioteca</option>
      </select>
      <br>
      <p class="lead">Non puoi stare senza:</p>
			<select name="q2" id="activity-select" ><!--required-->
				<option value=""></option>
				<option value="classici">I classici</option>
				<option value="novita">Le novità</option>
				<option value="dalmondo">Le notizie</option>
			</select>
			<br>

			<p class="lead">Una sola cosa salverà il mondo:</p>
			<select name="q3" id="values-select" ><!--required-->
				<option value=""></option>
				<option value="bellezza">La bellezza</option>
				<option value="politica">La politica</option>
				<option value="scienza">La scienza</option>
			</select>

			<hr>
			<button type="submit" class="vai">Vai!</button>
			<!--<input type="submit" value="Submit" onclick="calcola()">-->

		</form>
    &nbsp;
  </div> <!--form-space-->


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>
