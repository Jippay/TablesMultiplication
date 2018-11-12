<?php
//fonction calcul 0 à 10//
$table = $_GET["tables"];
$total = '<br />';

for ($x = 0; $x <= 10; $x++) {
    $total .= $x." X ".$table." = ".$x*$table."<br />";
        
    }

echo $total;
?>