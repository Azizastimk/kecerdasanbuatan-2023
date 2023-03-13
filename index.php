<?php
//himpunan dari fuzzy
$permintaan = ['naik','turun'];

//variable 
$x         = $_GET['x'];
$naik      = 5000;
$turun     = 1000;

$rumus = ($naik - $x)/($naik - $turun);

echo "X= ".$rumus;
