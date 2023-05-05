<?php
require __DIR__ . '/models/products.php';
require __DIR__ . '/models/Animale.php';
require __DIR__ . '/models/Cucce.php';
require __DIR__ . '/models/laser.php';
require __DIR__ . '/models/Ossa.php';


$Animali = [
    new Animale("Cane"),
    new Animale("Gatto"),
];

$cuccia = new Cucce("cuccia3000", "cuccia-potentissima", 560.00, [new Animale("Cane")], "Cuccia", "tessuto-spesso");
$laser = new Laser("BFG", "Big-gun", 900.00, [new Animale("Gatto")], 12, "Rosso");
$osso = new Ossa("ossobuco", "Osso-del-ritorno", 5.99, [new Animale("Cane")], "Osso", 20);



var_dump($cuccia);
var_dump($laser);
var_dump($osso);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    </div>
</body>

</html>