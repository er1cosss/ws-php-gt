<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once 'vehicle.php';
require_once 'car.php';
require_once 'motorcycle';

$car = new car ($name, $type, $engine_horsepower);

$motorcylce = new motorcycle($name, $type, $engine_displacemente)

echo "Exibir detalhes da moto: <br>"
$motorcylce->exibirDetalhes();

echo "Exibir detalhes do carro: <br>"
$car->exibirDetalhes();


?>
    
</body>
</html>


