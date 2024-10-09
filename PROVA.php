<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>This is Hello World page</title>
</head>
<body>
 	<h1>Hello World</h1>
    <?php
    echo "<p>";
    $car = array("brand"=>"Volkswagen", "model"=>"Golf", "year"=>2023);
    var_dump($car); //dice com'è strutturato un array di elementi
    echo "<br>";
    print_r($car); //stampa l'array in modo leggibile mostrando le coppie-chiave. senza esplicitare il tipo di elemento
    echo "</p>";
    echo "<br>";
    echo "<p>".$car["model"]."</p>";
    ?>


</body>
</html>

