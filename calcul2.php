<?php
//fonction calcul 11 à 20//
$table = $_GET["tables"];
$total = '<br />';

for ($x = 11; $x <= 20; $x++) {
    $total .= $x." X ".$table." = ".$x*$table."<br />";
        
    }

echo $total;
?>