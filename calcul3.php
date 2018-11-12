<?php
//fonction calcul 21 à 30//
$table = $_GET["tables"];
$total = '<br />';

for ($x = 21; $x <= 30; $x++) {
    $total .= $x." X ".$table." = ".$x*$table."<br />";
        
    }

echo $total;
?>